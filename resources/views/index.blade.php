@extends("layouts.app")

@section("section1")
    <div class="row text-center">
        <table class="table">
            <thead class="text-center align-middle">
                <tr>
                <th class="py-3" scope="col">#</th>
                <th class="py-3" scope="col">Name</th>
                <th class="py-3" scope="col">Post</th>
                <th class="py-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center align-middle">
                <th class="py-3" scope="row">1</th>
                <td class="py-3">Mark</td>
                <td class="py-3">This is my post on Post Blog</td>
                <td class="py-3">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary m-1">Show</button>
                        <button type="button" class="btn btn-success m-1">Create</button>
                        <button type="button" class="btn btn-danger m-1">Delete</button>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection