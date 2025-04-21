<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- jQuery & DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .table-responsive {
        overflow-x: auto;
        width: 100%;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 330px;
    }

    #myTable {
        width: 100% !important;
        white-space: nowrap;
    }

    .dataTables_wrapper {
        padding: 10px;
    }

 /* Orange border for the table headings only */
 #myTable thead th {
    border-bottom: 3px solid orange !important;
    border-top: none;
    border-left: none;
    border-right: none;
    background-color: #fff;
    }

    /* Keep body borders default or none */
    #myTable tbody td {
        border: 1px solid #dee2e6; /* Bootstrap default or set to none if you want no lines */
    }

    /* Optional: make heading text bold and colored */
    #myTable thead th {
        color: #000;
        font-weight: bold;
        background-color: #fff8f0; /* light orange shade for header */
    }
 
</style>

@include('sidemenu')

<div class="container">
    <div class="row">
        
        <!-- Sidebar -->
        <div class="col-md-2">
            <!-- Optional Sidebar content -->
        </div>

        <!-- Main Content -->
        <div class="col-md-10">
        <button class="btn btn-primary" style="margin-top: 50px; margin-right: 0px;">Add</button>
            <div class="table-responsive mt-4">
                <table id="myTable" class="table table-bordered table-striped" style="">
                    <thead>
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 15%;">Mobile No</th>
                            <th style="width: 15%;">Email</th>
           
                            <th style="width: 15%;">Role</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DataTables will populate this -->

                   </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'mobile', name: 'mobile' },
                { data: 'email', name: 'email' },
              
                { data: 'role', name: 'role' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            columnDefs: [
                { width: "5%", targets: 0 },   // ID
                { width: "15%", targets: 1 },  // Name
                { width: "15%", targets: 2 },  // Mobile
                { width: "15%", targets: 3 },  // Email
               
                { width: "15%", targets: 4 },  // Role
                { width: "15%", targets: 5 }   // Action
            ],
            scrollX: true,
            scrollY:false,
            language: {
                emptyTable: "No records available"
            }
        });
    });
</script>