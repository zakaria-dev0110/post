@extends("layouts.app")

@section("section1")
    <form method="POST" action="{{ route("posts.store") }}">
        @csrf
        <div class="col text-center m-4">
            <label class="m-4">ID</label>
            <input class="text-center" type="text" name="id" value="{{ $id }}">
        </div>
        <div class="col text-center m-4">
            <label class="m-4">Name</label>
            <input required type="text" name="name">
        </div>
        <div class="row text-center m-4">
            <label class="mb-2">Post</label>
            <textarea required rows="6" cols="40" name="post"></textarea>
        </div>
        <div class="col text-center m-4">
            <button type="submit" class="btn btn-success m-1">Create</button>
            <a type="button" class="btn btn-secondary m-1">Back</a>
        </div>
    </form>
@endsection