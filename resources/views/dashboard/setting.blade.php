@extends('layout.main')



@section('konten')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



<table class="table table-success table-striped">
    <thead>
        <a href="{{route('create')}}" class="btn btn-prymary">Tambah</a>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Icon</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($settingsubmenu as $data)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
                {{-- {{dd($ajk->photo)}} --}}
                @if($data->icon)
                <img src="{{ asset('storage/photos/'.$data->icon) }}" alt="pto" style="width: 100px; height: 100px;">
                @else
                <span>No Photo</span>
                @endif
            </td>
            <td>{{$data->title}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>
                <a href="{{ route('edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('delete', ['id' => $data->id]) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin Hapus Data?');">
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
