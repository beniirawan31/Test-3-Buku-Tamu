@extends('layout.main')


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('konten')
    <div class="row">
        <div class="col-md-6">
            <h1>Jumlah Tamu</h1>
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-md-6">
            <h1 style="margin-left:20px">Jumlah Kunjungan</h1>
            <canvas id="myChart1"></canvas>
        </div>
    </div>

    @include('layout.script')
@endsection
