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

            <form action="{{ route('update2', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                    <label for="phone">Description</label>
                    <textarea class="form-control" id="phone" name="phone" rows="3"
                        placeholder="Enter description">{{ $data->phone }}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Description</label>
                    <textarea class="form-control" id="email" name="email" rows="3"
                        placeholder="Enter description">{{ $data->email }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
