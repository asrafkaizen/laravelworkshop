@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blogs Create</div>

                <div class="card-body">

                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="blogtitle">Title</label>
                        <input class="form-control" id="blogtitle" aria-describedby="titleHelp" placeholder="Enter blog title">
                        <small id="titleHelp" class="form-text text-muted">Use an interesting title to boost your blogpost</small>
                    </div>
                    <div class="form-group">
                        <label for="blogtext">Body text</label>
                        <textarea class="form-control" id="blogtext" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
