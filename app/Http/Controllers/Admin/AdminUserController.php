<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class AdminUserController extends Controller
{
   
    public function index() {
        if (request()->ajax()) {
            $users = User::query();
            return DataTables::of($users)->make();
        
        }
        return view('admin.users.index');
    }
}
