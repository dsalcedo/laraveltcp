<?php

namespace App\Http\Controllers\Webhook\V1\Alert;

use App\Models\DebugTcp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class ReciveController extends Controller
{

    public function index(Request $request)
    {
        $date = date('Y-m-d_His');

        Storage::disk('log')->put("$date.log", $request->all());

        $postbody = $request->all();

        DebugTcp::create($postbody);

        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $request->all()
        ]);
    }
}
