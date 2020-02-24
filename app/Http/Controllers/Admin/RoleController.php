<?php

namespace App\Http\Controllers\Admin;

use App\Events\AssignRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $users = User::with('roles')->paginate(15);
        return view('backend.dashboard.admin.roles.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        $roles = Role::all()->pluck('name');
        return view('backend.dashboard.admin.roles.form', ['roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     *
     */
    public function store (UserStoreRequest $request)
    {
        $role = $request->role;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token' => str::random(16),
            'email_verified_at' => Carbon::now(),
        ]);
        $user->syncRoles($role);
        event(new AssignRole($user,$role));
        return redirect('/admin/roles');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        $user = User::findorFail($id);
        $role = $user->getRoleNames();
        $roles = Role::all()->pluck('name' ,'id');
        return view('backend.dashboard.admin.roles.edit', ['user' => $user, 'role' => $role], ['roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $role = $request->role;
        $user = User::find($id);

        $user->name = $name;
        $user->syncRoles($role);

        $user->save();
        return redirect('admin/roles');
    }

    public function show ()
    {
        $roles = Role::all()->pluck('name');
        return view('backend.dashboard.admin.roles.index',['roles'=>$roles]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ( $id)
    {
        User::destroy([$id]);
        return redirect('admin/roles');
    }
}
