<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\indextable;
use App;
use File;

class IndexController extends Controller
{
    public function index()
    {
        $projects = indextable::all();
        return view('index.index',
            [
                'projects' => $projects
            ]);
    }
}
