<?php
/**
 * Created by PhpStorm.
 * User: richardschalin
 * Date: 31.03.17
 * Time: 22:06
 */

namespace App\Http\Controllers\Todo;


use App\Http\Controllers\Controller;
use App\Http\Request\Todo\TodoStoreRequest;
use Illuminate\Http\Request;

class TodoController extends Controller {
    public function index() {
        return view("todo.todo.index");
    }



    public function store(TodoStoreRequest $request) {
        return "todoController.store: " . $request->input("title");
    }


}
