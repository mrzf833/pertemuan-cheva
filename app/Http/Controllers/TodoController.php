<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request, $id = null){
        return response()->json([
            "message" => "data todo berhasil di get",
        ], 200);
    }

    public function todo(Request $request, $id = null){
        $message_perubahan = "data todo berhasil diubah";

        if($id == 12){
            return response()->json([
                "message" => "data todo berhasil di get",
            ], 200);
        }if($id == 11){
            return response()->json([
                "message" => $message_perubahan,
            ], 200);
        }
        else{
            return response()->json([
                "message" => "data todo gagal di get",
            ], 200);
        }
    }

    public function create(Request $request){
        if($request->id == 1){
            return response()->json([
                "apalah" => "gagal"
            ]);
        }

        return response()->json([
            "apalah" => "gitu"
        ]);
    }
}
