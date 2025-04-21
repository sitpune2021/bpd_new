<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
class SellerController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all(); // Or use pagination/filter logic here
    
            $data = [];
            $i = 1;
            foreach ($users as $user) {
                $data[] = [
                    'id' => $i++,
                    'name' => $user->name,
                    'mobile' => $user->mobile,
                    'email' => $user->email,
                  
                    'role' => $user->role,
                    'action' => '<a href="#"><i class="bi bi-eye" style="color: blue;"></i></a>
                                 <a href="#"><i class="bi bi-pencil-square" style="color: orange;"></i></a>
                                 <a href="#"><i class="bi bi-trash" style="color: red;"></i></a>'
                ];
            }
    
            return response()->json(['data' => $data]);
        }
    
        return view('manage-role');
    }

    public function showData(Request $request)
    {

    }
}
