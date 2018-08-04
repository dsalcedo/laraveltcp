<?php

namespace App\Http\Controllers\Webhook\V1\Alert;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => []
        ]);
    }
}
