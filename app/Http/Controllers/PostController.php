<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        session_start();
        if (!isset($_SESSION['DBposts'])) {
            $_SESSION['DBposts'] = array();
        }
    }
    
    public function index() {
        if (count($_SESSION['DBposts']) == 0) {
            array_push($_SESSION['DBposts'], array(
                "id" => "0",
                "Name" => "John",
                "Post" => "Hello"
            ));
        }
        
        return view('index', ["posts" => $_SESSION['DBposts']]);
    }

    public function show($id) {
        $post = array_filter($_SESSION['DBposts'], fn(array $i) => $i["id"] == $id)[$id];
        return view('show', ["post" => $post]);
    }

    public function update($id){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post = request()->all();
            $_SESSION['DBposts'][$id]["Name"] = $post["name"];
            $_SESSION['DBposts'][$id]["Post"] = $post["post"];
        }
        return to_route("posts.index");
    }
}
