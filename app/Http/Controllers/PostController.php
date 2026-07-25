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
        $post = request()->all();
        $_SESSION['DBposts'][$id]['id'] = $id;
        $_SESSION['DBposts'][$id]['Name'] = $post['name'];
        $_SESSION['DBposts'][$id]['Post'] = $post['post'];

        return to_route("posts.index");
    }

    public function create() { // Modified
        $newID = count($_SESSION["DBposts"]);
        return view("create", ["id" => $newID]);
    }

    public function store(){ // Modified
        $post = request()->all();
        array_push($_SESSION['DBposts'], array(
            "id" => $post["id"],
            "Name" => $post["name"],
            "Post" => $post["post"]
        ));
        return to_route("posts.index");
    }
}
