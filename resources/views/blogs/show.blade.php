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
                <div class="card-header">Blog detail</div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        Title
                        <h4>{{ $blog->title}}</h4>
                    </div>
                    <div class="form-group">
                        Body
                        <h4>{{ $blog->body}}</h4>
                    </div>
                    <div class="form-group">
                        Created at
                        <h4>{{ $blog->created_at->diffForHumans()}}</h4>
                    </div>
                    <div class="form-group">
                        Written by
                        <h4>{{ $blog->author}}</h4>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('blogs')}} " class="btn btn-primary">Back</a>
                        <a href="{{ route('blog:edit',$blog)}} " class="btn btn-primary">Edit</a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection