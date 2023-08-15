<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Head;


class HeadController extends Controller
{
    public function index()
    {
        $heads = Head::get();
        return response()->json($heads);
    }
}
