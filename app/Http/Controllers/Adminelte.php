<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Admin;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Adminelte extends Controller
{
	public function dashboard(){
     	
        return view('superadmin.dashboard.home');
    }
    public function annonce(){
     	
        return view('superadmin.importation.annonce');
    }
    public function annonceur(){
     	
        return view('superadmin.importation.annonceur');
    }
    public function archive(){
     	
        return view('superadmin.importation.archive');
    }
}
