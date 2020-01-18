<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\AcademicMember;

class AcaMemberController extends Controller
{
    public function index()
     {
     	$members = AcademicMember::all();
     	return view('user.academicmember.index', compact('members'));
;
     }
}
