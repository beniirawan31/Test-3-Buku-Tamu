@extends('layout.main')



@section('konten')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



<table class="table table-success table-striped">
    <thead>
        <a href="{{route('create2')}}" class="btn btn-prymary">Tambah</a>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Header</th>
            <th scope="col">Title</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($SettingContact as $data)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$data->header}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->email}}</td>
            <td class="d-inline">
                <a href="{{ route('edit2', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                <form class="d-inline" action="{{ route('delete2', ['id' => $data->id]) }}" method="POST"
                    style="display: inline;" onsubmit="return confirm('Yakin Hapus Data?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
