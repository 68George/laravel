<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index ()
    {
        $projects = Project::all();
        return view('admin/index', compact('projects'));
    }

    public function append ()
    {
        $id = \request(['id']);
        $data = Project::find($id);
        return view('welcome');
    }
}
