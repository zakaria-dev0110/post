<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $DBposts = array(
            array (
                "id" => "0",
                "Name" => "Mark",
                "Post" => "This is my post on Post Blog from Database"
            )
        );
        return view('index', ["posts" => $DBposts]);
    }

    public function show($id) {
        $DBposts = array(
            array (
                "id" => "0",
                "Name" => "Mark",
                "Post" => "This is my post on Post Blog from Database"
            )
        );
        $post = array_filter($DBposts, fn(array $i) => $i["id"] == $id)[$id];
        return view('show', ["post" => $post]);
    }
}
