@extends("layouts.app")

@section("section1")
    <form method="POST" action="{{ route("posts.update", $post["id"]) }}">
        @csrf
        <div class="col text-center m-4">
            <input type="text" name="name" value={{ $post["Name"] }}>
        </div>
        <div class="row text-center m-4">
            <textarea rows="6" cols="40" name="post">{{ $post["Post"] }}</textarea>
        </div>
        <div class="col text-center m-4">
            <button type="submit" class="btn btn-primary m-1">Update</button>
            <a href="{{ route("posts.index") }}" type="button" class="btn btn-secondary m-1">Back</a>
        </div>
    </form>
@endsection