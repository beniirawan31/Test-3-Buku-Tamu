@extends('layout.main')

@section('konten')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<h2>Edit Setting</h2>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form action="{{ route('update1', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="file" class="form-control" id="icon" name="icon" placeholder="Enter icon">
                    <img src="{{ asset('storage/photos/'.$data->icon) }}" alt="Icon Preview"
                        style="width: 100px; height: 100px;">
                </div>
                <div class="form-group">
                    <label for="header">Header</label>
                    <input type="text" class="form-control" id="header" name="header" value="{{ $data->header }}"
                        placeholder="Enter header">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}"
                        placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Description</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                        placeholder="Enter description">{{ $data->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
