<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/hello/{data}', function ($data) {
//     return response()->json([
//         "message" => "Hello World!" . $data
//     ], 200);
// });

// Route::post('/hello', function (Request $request) {
//     // return dd($request->all());

//     return response()->json([
//         "message" => "Hello World POST",
//         "data" => $request->all()
//     ], 200);
// });

// Route::put('/hello', function (Request $request) {
//     return dd($request->all());

//     return response()->json([
//         "message" => "Hello World PUT",
//         "data" => $request->all()
//     ], 200);
// });

// Route::delete('/produk/{id}', function (Request $request, $id) {
//     // return dd($id);

//     if($id == 12){
//         return response()->json([
//             "message" => "data produk ber id " . $id . " berhasil dihapus",
//             "data" => $request->all()
//         ], 200);
//     }else{
//         return response()->json([
//             "message" => "data produk gagal dihapus",
//             "data" => $request->all()
//         ], 200);
//     }
// });

// // Route::get("/todo/{id}", [App\Http\Controllers\TodoController::class, "todo"]);
// Route::get("/todo/{id}", [TodoController::class, "todo"]);
// Route::post("/todo", [TodoController::class, "create"]);

// Route::post("/daftar/{data}/{id}", function(Request $request, $id, $data){
//     // dd($id);
//     dd($data);
//     // return response()->json([
//     //     "data" => "data"
//     // ], 404);
// });

Route::get("/todo", [TodosController::class, "index"]);
Route::post("/todo", [TodosController::class, "create"]);
Route::get("/todo/query-builder", [TodosController::class, "queryBuilder"]);
Route::get("/todo/query-builder", [TodosController::class, "queryBuilder"]);
Route::post("/todo/insert", [TodosController::class, "insertData"]);
Route::get("/todo/raw", [TodosController::class, "rawStat"]);

Route::post("/todo/request-tes", [TodosController::class, "requestTes"]);
Route::post("/todo/todo-req", [TodosController::class, "todoReq"]);
