@extends("layouts.app")

@section("h1")
    <h1 class="text-center pt-4">Welcome to Post Blog</h1>
@endsection

@section("section1")
    <div class="row text-center">
        <p class="fs-2">Write Your Post Now</p><br>
        <div class="col text-center">
            <a href="{{ route("posts.index") }}" type="button" class="btn btn-primary">Show</a>
            <a href="{{ route("posts.create") }}" type="button" class="btn btn-success">Create</a>
        </div>
    </div>
        
        
@endsection
