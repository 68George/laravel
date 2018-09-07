<?php

namespace App\Http\Controllers;

use Auth;
use App\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
        if (Auth::user()->id != 1) {
            return view('home');
        }
        $projects = Project::all();
        return view('index', compact('projects'));
    }

    public function add (Request $request)
    {
        try {
            Project::create($request->post());
            echo json_encode(['code' => 200, 'message' => '添加成功']);
            exit();
        } catch (Exception $e) {
            echo json_encode(['code' => 408, 'message' => $e->getMessage()]);
            exit();
        }
//        $res = Project::create($request->post());
//        if ($res) {
//            echo json_encode(['code' => 200, 'message' => '添加成功']);
//            exit();
//        } else {
//            echo json_encode(['code' => 408, 'message' => '添加失败']);
//            exit();
//        }
    }
}
