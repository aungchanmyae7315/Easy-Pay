@extends('backend.layouts.app')
@section('title','Admin Users')
@section('admin-user-active','mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Admin Users
                
            </div>
        </div>
       
     </div>
</div> 
<div class="pt-3">
    <a href="{{route('admin.admin-user.create')}}"class="btn btn-primary">
        <i class="fas fa-plus-circle">Create Admin user</i>
    </a>
</div>
<div class="content  pt-3">
    
        <div class="card ">
            <div class="card-body"> 
                <table class="table table-bordered datatable">
                    <thead>
                        <tr class="bg-light">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                       
                        
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    
</div>
@endsection
@section('scripts')
<script>
   $(document).ready(function() {
    var table =  $('.datatable').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "/admin/admin-user/datatable/ssd",
        columns: [
            {
                data:"name",
                name:"name"
            },
            {
                data:"email",
                name:"email"
            },
            {
                data:"phone",
                name:"phone"
            },
            {
                data:"action",
                name:"action"
            },
        ]
    } );
    $(document).on('click','.delete',function(e) {
        e.preventDefault();
        var id = $(this).data('id')
        Swal.fire({
            title: 'Are you sure,you want to delete?',
            showCancelButton: true,
            confirmButtonText: `Confirm`,
           
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
               $.ajax({
                   url:'/admin/admin-user/' + id,
                   type:'DELETE',
                   success:function() {
                     table.ajax.reload();
                   }
               })
            } 
            })
    })
} );
</script> 
@endsection