@extends("layouts.app")

@section("section1")
    <div class="row text-center">
        <table class="table">
            <thead class="text-center align-middle">
                <tr>
                <th class="py-3" scope="col">ID</th>
                <th class="py-3" scope="col">Name</th>
                <th class="py-3" scope="col">Post</th>
                <th class="py-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="text-center align-middle">
                <th class="py-3" scope="row">{{$post["id"]}}</th>
                <td class="py-3">{{$post["Name"]}}</td>
                <td class="py-3">{{$post["Post"]}}</td>
                <td class="py-3">
                    <div class="col text-center">
                        <a href="{{ route("posts.show", $post["id"]) }}" type="button" class="btn btn-primary m-1">Show</a>
                        <form method="POST" action="{{ route("posts.delete", array("id" => $post["id"])) }}">
                            @csrf
                            <button type="submit" class="btn btn-danger m-1">Delete</button>
                        </form>
                    </div>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="column text-center">
            <a href="{{ route("posts.create") }}" type="button" class="btn btn-success m-1">Create New Post</a>
        </div>
    </div>
@endsection