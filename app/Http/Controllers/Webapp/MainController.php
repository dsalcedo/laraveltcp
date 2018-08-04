<?php

namespace App\Http\Controllers\Webapp;

use App\Models\DebugTcp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $logs = DebugTcp::select(['id', 'content'])->orderBy('id','DESC')->paginate(10);
        return view('welcome', compact('logs'));
    }
}
