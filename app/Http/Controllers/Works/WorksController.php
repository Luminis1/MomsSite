<?php

namespace App\Http\Controllers\Works;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorksController extends Controller
{
    public function index()
    {
        return view('works.works');
    }
}
