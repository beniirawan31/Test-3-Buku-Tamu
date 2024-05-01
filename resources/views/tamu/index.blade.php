@extends('layout.main')

<style>
    /* CSS untuk rata kiri */
    .container {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
    }

    .form-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-right: 20px;
        /* jarak antara form dan filter */
    }

    /* CSS untuk tombol dan form */
    .button {
        background-color: #6FCF97;

        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 15px;

    }

    .form-group {
        margin-top: -10px;
        margin-left: 60px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="date"] {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        /* Input tanggal mengambil lebar penuh */
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
    }

    .form-group input[type="date"],
    .form-group select {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        height: 40px;
        /* add this to make select and input have the same height */
    }

    .form-group select {
        appearance: none;
        /* remove default select arrow */
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2220%22%20height%3D%2220%22%3E%3Cpath%20fill%3D%22%23007bff%22%20d%3D%22M7%206.5l5%205%205-5%22%2F%3E%3C%2Fsvg%3E');
        background-size: 20px 20px;
        background-position: 95% 50%;
        background-repeat: no-repeat;
        padding-right: 30px;
        /* add some padding to make room for the arrow */
    }

</style>



@section('konten')
<section class="content-header">
    <h1>
        Tamu
    </h1>
</section>

<div class="container">
    <div class="form-container">
        <button class="button">Tambah</button>
        <div class="form-group">
            <label for="tanggal">Form</label>
            <input type="date" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
            <label for="tanggal">To</label>
            <input type="date" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
            <label for="Filter">Filter</label>
            <select id="Filter" name="jenis_kelamin">
                <option value="Filter">Filter</option>
                <option value="Filter">Filter</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Export">Export</label>
            <select id="Export" name="jenis_kelamin">
                <option value="Export">Export</option>
                <option value="Export">Export</option>
            </select>
        </div>
    </div>
    <!-- Bagian Filter dan Export akan ditambahkan di sini -->
</div>



<div class="box">
    <div class="box-body">
        <table id="" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>alamat</th>
                    <th>no_hp</th>
                    <th>keperluan</th>
                    <th>tangggal</th>
                    <th>jam</th>
                    <th>Aktion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->keperluan }}</td>
                    <td>{{ $item->tangggal }}</td>
                    <td>{{ $item->jam }}</td>
                    <td><div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                            data-toggle="dropdown">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#detailModal{{ $item->id }}">Delete</a>
                                            </li>
                                        </ul>
                                    </div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
