<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Managingcommite;

class ManagingCommityController extends Controller
{
    public function index()
    {
        $managingCommite = Managingcommite::get();
        return response()->json($managingCommite);
    }

}
