<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;

class InstituteController extends Controller
{
    public function index()
    {
        $institute = Institute::get();
        return response()->json($institute);
    }
}
