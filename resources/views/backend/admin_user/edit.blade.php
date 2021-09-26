@extends('backend.layouts.app')
@section('title','Create Admin Users')
@section('admin-user-active','mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Edit Admin Users
                
            </div>
        </div>
       
     </div>
</div> 

<div class="content pt-3">
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.admin-user.update',$admin_user->id)}}" method="POST" id="update">
                @csrf
                @method('PUT')
                <div class="form-group">
                    @include('backend.layouts.flash')
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{$admin_user->name}}"   class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{$admin_user->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="{{$admin_user->phone}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button  class="btn btn-secondary mr-2 back-btn">Cancel</button>
                    <button  class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
      
    
</div>
@endsection
@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\UpdateAdminUser','#update') !!}
<script>
   $(document).ready(function() {

} );
</script> 
@endsection