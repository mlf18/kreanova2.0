<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

use App\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        // $this->authorize('index.permission');
        $permissions = Permission::orderBy('id', 'dsc')->paginate(10);
       
        return view('permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create.permission');
        $role= Role::pluck('name','id');
        return view('permission.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('store.permission');        
        $permission = new permission();
        $permission->name = $request->input('name');
        $permission->save();
        $permission->roles()->attach($request->input('role_id'));
        return redirect('permission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('show.permission');
        $permission = Permission::where('id', $id)->first();
        //$role = role::pluck('name', 'id');
        $roles = $permission->roles;
        foreach ($roles as $values) {
            echo $values->name.", ";
        }

        //return view('permission.show', compact('permission, roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('edit.permission');
        $edit = permission::where('id', $id)->first();
        //$role_all = Role::all();
        $role = role::pluck('name','id');   

        return view('permission.edit', compact('edit','role'));
    }

     public function update(Request $request, $id)
    {
        // $this->authorize('update.permission');     
        $Permission = Permission::find($id);
        $Permission->name = $request->input('name');
        $Permission->save();
        $Permission->roles()->sync($request->input('role_id'));
        return redirect('permission');
    }


    public function destroy($id)
    {
        // $this->authorize('delete.permission');
        $permissions = permission::find($id)->delete();
        return redirect('/permission');
    }
}
