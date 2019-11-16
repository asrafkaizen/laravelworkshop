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
                    <tr><th>id</th><th>title</th><th>updated at</th><th>poster</th><th>action</th>
                    </tr>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id}}</td>
                        <td>{{ $blog->title}}</td>
                        <td>{{ $blog->updated_at->diffForHumans()}}</td>
                        <td>{{ $blog->user->name}}</td>
                        <!--td>{{ $blog->user_id ? $blog->user->name : "ENTAH"}}</td-->
                        <td>
                            <a href="{{ route('blog:show', $blog)}}" class="btn btn-success">Show</a>
                            <a href="{{ route('blog:edit', $blog)}}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('blog:padam',$blog)}}" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>              
                    
                @endforeach
                </table>
                {{ $blogs->links()}}
                <!--p style='text-align:center'><a href="create">Add a new blogpost!</a></p-->
                </div>
                <a href="{{route('blog:create')}}" class="btn btn-primary">Add new blog</a>
            </div>
        </div>
    </div>
</div>
@endsection
