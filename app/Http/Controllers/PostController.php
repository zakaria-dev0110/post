<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $DBposts = array(
            array (
                "id" => "1",
                "Name" => "Mark",
                "Post" => "This is my post on Post Blog from Database"
            )
        );
        return view('index', ["posts" => $DBposts]);
    }
}
