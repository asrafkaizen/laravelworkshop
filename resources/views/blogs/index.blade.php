@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            @if (session()->has('alert'))
                    <div class="alert {{ session()->get('alert-type')}}">
                        {{session()->get('alert')}}
                    </div>
                @endif

                <div class="card-header">Blogs index</div>
                <div class="card-body">                
                <table class='table'>
                    <tr><th>id</th><th>title</th><th>updated at</th><th></th>
                    </tr>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id}}</td>
                        <td>{{ $blog->title}}</td>
                        <td>{{ $blog->updated_at->diffForHumans()}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>              
                    
                @endforeach
                </table>
                {{ $blogs->links()}}
                <br>
                
                <a href="create" class="btn btn-primary">Add new blog</a>
                <!--p style='text-align:center'><a href="create">Add a new blogpost!</a></p-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
