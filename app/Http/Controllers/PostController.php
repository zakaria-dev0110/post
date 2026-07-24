<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $DBposts = array(
            array (
                "id" => "0",
                "Name" => "Mark",
                "Post" => "This is my post on Post Blog from Database"
            )
        );
    public function index() {
        return view('index', ["posts" => $this->DBposts]);
    }

    public function show($id) {
        $post = array_filter($this->DBposts, fn(array $i) => $i["id"] == $id)[$id];
        return view('show', ["post" => $post]);
    }

    public function update($id){
        $post = request()->all();
        $DBposts[$id]["Name"] = $post["name"];
        $DBposts[$id]["Post"] = $post["post"];
        return to_route("posts.index");
    }
}
