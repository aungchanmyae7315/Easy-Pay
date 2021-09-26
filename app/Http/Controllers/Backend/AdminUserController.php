<?php

namespace App\Http\Controllers\Backend;
use App\AdminUser;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminUser;
use App\Http\Requests\UpdateAdminUser;

class AdminUserController extends Controller
{
    public function index(){
      
        return view('backend.admin_user.index');
    }
    public function ssd(){
        $data = AdminUser::query();
    
        return Datatables::of($data)
        ->addColumn('action',function($each) {
            $edit_icon = '<a href="'.route('admin.admin-user.edit',$each->id).'" class="text-warning"><i class="fas fa-edit"></i></a>'  ;
            $delete_icon = '<a href="" class="text-danger delete" data-id="'.$each->id.'"><i class="fas fa-trash-alt"></i></a>';
            return '<div class="action-icon">' . $edit_icon . $delete_icon . '</div>';
        })
        ->make(true);
    }
    public function create(){
      
        return view('backend.admin_user.create');
    }
    public function store(StoreAdminUser $request){
        $admin_user = new AdminUser();
        $admin_user->name = $request->name;
        $admin_user->email = $request->email;
        $admin_user->phone = $request->phone;
        $admin_user->password = Hash::make($request->password);
        $admin_user->save();
      
        return redirect()->route('admin.admin-user.index')->with('create','Successfully Created');
    }
    public function edit($id){
      $admin_user = AdminUser::findOrFail($id);

        return view('backend.admin_user.edit',compact('admin_user'));
    }
    public function update($id,UpdateAdminUser $request){
        $admin_user = AdminUser::findOrFail($id);
       
        $admin_user->name = $request->name;
        $admin_user->email = $request->email;
        $admin_user->phone = $request->phone;
        $admin_user->password = $request->password ? Hash::make($request->password) : $admin_user->password; 
        $admin_user->save();
      
        return redirect()->route('admin.admin-user.index')->with('update','Successfully Updated');
    }
    public function destroy($id){
        $admin_user = AdminUser::findOrFail($id);
        $admin_user->delete();
        return 'success';
      }
}
