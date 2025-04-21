<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Category;
use App\Models\InvoiceItem;
use App\Models\Product;
use Validator;
class InvoiceController extends Controller
{
    //Anuradha Jamdade on 12/4/2025 @ 4:00PM
    //Create Invoice
    public function createInvoice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_id' => 'required|exists:clients,id',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:1',
            'payment_method' => 'required|in:online,cash,cheque',
            'screenshot' => 'required_if:payment_method,online,cash,cheque|file|image|max:2048',
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $category = $request->category_id;
        $quantity = $request->quantity;
  
        // if (!$category) {
        //     $resp['status'] = false;
        //     $resp['message'] = "Category not selected";
        //     return response()->json($resp);
        // }

        $categoryData = Category::findOrFail($category)->first();
        $price = $categoryData->price;
        $total = $quantity * $price;              

        $cdata = new Invoice();
        $cdata->client_id = $request->client_id;
        $cdata->category = $category;
        $cdata->quantity = $quantity;
       

        if ($cdata->payment_method == "online") {
            $cdata->payment_method = $request->payment_method;
            if ($request->hasFile('screenshot')) {
                $image = $request->file('screenshot');

                $imageName = $image->getClientOriginalName();

                $path = public_path("upload/Invoices/");

                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }

                $image->move($path, $imageName);
                $cdata->screenshot = $imageName;
            }

        } else {
            if ($request->payment_method == "cash") {
                $cdata->payment_method = $request->payment_method;
            }
             else {
              
                $cdata->payment_method = $request->payment_method;
            }
        }
        foreach ($request->items as $item) {
            $product = Product::findOrFail($item['product_id']);
            
            $invoiceItem = new InvoiceItem();
            $invoiceItem->invoice_id = $cdata->id;
            $invoiceItem->product_id = $product->id;
            $invoiceItem->quantity = $item['quantity'];
            $invoiceItem->unit_price = $product->price;
            $invoiceItem->total_price = $product->price * $item['quantity'];
            $invoiceItem->save();
       
            $totalAmount += $invoiceItem->total_price;
        }

        // Update invoice total
        $cdata->total_amount = $totalAmount;
        // $invoice->save();

        if ( $cdata->save()) {
            $resp['status'] = true;
            $resp['message'] = "Invoice Generated Successfully";
            return response()->json($resp);
        } else {
            $resp['status'] = false;
            $resp['message'] = "Invoice not Generated";
            return response()->json($resp);
        }
    }

    // get invoice data

    public function getInvoiceDetails($id)
    {
        $data = Invoice::findOrFail($id);
        $resp=[];
        if ($data) {
            $client_data = Client::findOrFail($data['client_id']);

            $category_data=Category::findOrFail($data['category']);

            $data->created_at = date('d-m-Y', strtotime($data->created_at));

            if ($client_data) {
                // $resp['status'] = true;
                // $resp['message'] = "Invoice Details";
                // $resp['invoice_data'] = $data;
                // $resp['client_data'] = $client_data;
                // $resp['category_data']= $category_data;

                return response()->json(
                    ['message'=>"Invoice Details",
                'invoice_data'=>$data,
                'client_data'=>$client_data,
                'category_data'=>$category_data
                ],200);
            } else {
                // $resp['status'] = 400;
                // $resp['message'] = "Client details Not Found";
                return response()->json(['message'=>"Invoice Details",
                'invoice_data'=>$data,
                'client_data'=>$client_data,
                'category_data'=>$category_data
                ],200);
            }
        } else {
            $resp['status'] = 400;
            $resp['message'] = "Invoice Not Found";
            return response()->json($resp);
        }
    }

}
