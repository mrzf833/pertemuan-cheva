<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        // $todo = DB::table("todos")
        //     ->where("id", 1)
        //     ->join("users", "todos.id", "=", "users.id")
        //     ->groupBy("todos.id")
        //     ->get();

        // DB::select("select * from todos
        // where id = 1
        // join    users
        // groubp by");

        return response()->json([
            "data" => $todos
        ]);
    }

    public function create(Request $request)
    {
        $todo = Todo::create([
            'todo' => $request->todo,
            'key' => $request->key
        ]);

        return response()->json([
            "data" => $todo
        ]);
    }

    public function queryBuilder()
    {
        $todos = DB::table("todos")
            ->where("id", "=", 1)
            ->select("id", "todo", "key", DB::raw("COUNT(id) as jumlah"))
            ->groupBy("id")
            ->get();

        return response()->json([
            "data" => $todos
        ]);
    }

    public function insertData(Request $request)
    {
        $todo = DB::table("todos")
            ->insert([
                "todo" => $request->todo,
                "key" => $request->key
            ]);

        return response()->json([
            "data" => $todo
        ]);
    }

    public function rawStat()
    {
        $todo = DB::select("select * from todos");

        return response()->json([
            "data" => $todo
        ]);
    }

    public function bladeEngine()
    {
        return view("blade-engine", [
            "datas" =>  [
                "satu"
            ]
        ]);
    }

    public function requestTes(Request $request)
    {
        // return $request->all();
        // return $request->input("key");
        // return $request->key;
        // return $request->only("todo");
        // return $request->file("todo_file");

        dd($request->only("todo"));
    }

    public function todoReq(TodoRequest $request)
    {
        return $request->all();
    }
}
