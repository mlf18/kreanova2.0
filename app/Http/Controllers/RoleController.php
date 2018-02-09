<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        // $this->authorize('index.role');
        $role= Role::all();
        
        return view('role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create.role');
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('store.role');
        Role::create([
            'name'=>$request->input('name')
        ]);

        return redirect('role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('show.role');
        $role = role::where('id', $id)->first();
        $permission = $role->permissions;
        foreach ($permission as  $value) {
            echo $value->name;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('edit.role');
        $edit = Role::where('id', $id)->first();
        //$role_all = Role::all();
       
        return view('role.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->authorize('update.role');
        $role = Role::find($id);
        $role->update($request->all());

        return redirect('role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete.role');
        $role = Role::find($id);
        $role->delete();

        return redirect('role');
    }
}
