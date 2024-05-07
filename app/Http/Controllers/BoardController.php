<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blast;
use App\Models\Paint;

class BoardController extends Controller
{
    //
    public function create(Request $request){

        $data = $request->all();
        unset($data['_token']);

        $obj = new Blast();

        $obj->create($data);
        return redirect(route('board.blast'));
    }
    public function paint_create(Request $request){

        $data = $request->all();
        unset($data['_token']);

        $obj = new Paint();

        $obj->create($data);
        return redirect(route('board.paint'));
    }
}
