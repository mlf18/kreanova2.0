<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Role;

use Validator;

class UserController extends Controller
{
    public function index()
    {   
        // $this->authorize('index.user'); 
        $user = User::all();
        
        return view('user.index', compact ('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create.user');
        $role= Role::pluck('name','id');
        
        return view('user.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('store.user');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $user->roles()->attach($request->input('role_id'));
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('show.user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('edit.user');    
        $edit = User::where('id', $id)->first();
        //$role_all = Role::all();
        $role = Role::pluck('name','id');   

        return view('user.edit', compact('edit','role'));
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
        // $this->authorize('update.user');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (!empty($request->input('password'))) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        $user->roles()->sync($request->input('role_id'));
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete.user');
        $users = User::find($id)->delete();
        return redirect('/user');
    }
}
