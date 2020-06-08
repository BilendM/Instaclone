@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf  
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-form-label">Post Caption</label>
                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                        caption="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-form-label">Post Image</label>
                    <input type="file" name="image" class="form-control-file @error('caption') is-invalid @enderror" id="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary" type="submit">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection