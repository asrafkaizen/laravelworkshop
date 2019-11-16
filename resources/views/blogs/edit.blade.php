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
                <div class="card-header">Blog Edit</div>

                <div class="card-body">

                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                    <label for="title">Title</label>
                        <input class="form-control" name="title" aria-describedby="titleHelp" value="{{ $blog->title}}">
                        <small id="titleHelp" class="form-text text-muted">Use an interesting title to boost your blogpost</small>
                    </div>
                    <div class="form-group">
                        <label for="body">Body text</label>
                        <textarea class="form-control" name="body" rows="5">{{ $blog->body}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('blogs')}} " class="btn btn-primary">Back</a>
                    </div>
                    </form>
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