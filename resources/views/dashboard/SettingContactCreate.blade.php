@extends('layout.main')

@section('konten')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<h2>Tambah Setting Baru</h2>

<form action="{{ route('store2') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="header">header</label>
        <input type="text" class="form-control" id="header" name="header" placeholder="Enter header">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <textarea class="form-control" id="phone" name="phone" rows="3" placeholder="Enter description"></textarea>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <textarea class="form-control" id="email" name="email" rows="3" placeholder="Enter description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
