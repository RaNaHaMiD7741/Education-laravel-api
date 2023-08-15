<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::get();
        return response()->json($results);
    }

}
