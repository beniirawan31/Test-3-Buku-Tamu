<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            margin-top: 10px;
        }

        nav ul li {
            display: inline;
            margin-right: 60px;
            margin-top: 20px;
            text-transform: uppercase;
            cursor: pointer;
        }

        nav ul li:hover {
            text-decoration: underline;
        }

        .search-form {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f4f4f4;
        }

        .search-form ul {
            display: flex;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .search-form ul li {
            margin-right: 20px;
        }

        .home {
            width: auto;
            height: 600px;
            background-image: url('gambar/1.png');
            background-size: cover;
            background-position: center;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .home .box1 {
            width: 400px;
            height: 400px;
            margin-top: 100px;
            margin-left: 100px;
            background-color: transparent;
            color: white;
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
            color: white;
        }

        .box2 {
            width: auto;
            height: 300px;
            background-color: transparent;
        }

        .box3 {
            width: 300px;
            height: 200px;
            background-color: transparent;
            float: left;
            margin-left: 100px;
            margin-top: 50px;
            text-align: center;
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .about {
            width: auto;
            height: 500px;
            background-color: transparent;
        }

        .about1 {
            width: 400px;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-left: 150px;
            float: left;
            margin-top: 50px;
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .about2 {
            width: 450px;
            height: 400px;
            background-color: transparent;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-left: 150px;
            margin-top: 50px;
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .btn1 {
            padding: 10px 20px;
            background-color: #20BF06;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #20BF06;
        }

        .img1 {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
            background-size: cover;
        }

        .img2 {
            width: 40px;
            height: 40px;
            margin-left: 50px;
            margin-top: 20px;
            background-image: url('gambar/3.png');
            background-size: cover;
        }

        .img3 {
            width: 40px;
            height: 40px;
            margin-left: 50px;
            margin-top: 20px;
            background-image: url('gambar/4.png');
            background-size: cover;
        }

        .contac {
            width: auto;
            height: 600px;
            background-color: transparent;
            background-size: cover;
            background-position: center;
            backdrop-filter: blur(10px);
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .box21 {
            width: 86%;
            height: 150px;
            background-color: transparent;
            background-color: #20BF06;
            margin-left: 120px;
            margin-top: 60px;
            border-radius: 10px;
            /* Tambahkan z-index di sini */
        }

        .box22 {
            width: auto;
            height: 300px;
            background-image: url('gambar/6.png');
            background-size: cover;
            background-position: center;
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .phone {
            margin-left: 120px;
            float: left;
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

        .email {
            margin-right: 120px;
            float: right;
            z-index: 1;
            /* Tambahkan z-index di sini */
        }

    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Udacoding</a>
                <form class="d-flex" role="search">
                    <ul>
                        <li>Home</li>
                        <li>about</li>
                        <li>Contact</li>
                    </ul>
                    <a href="/login" class="btn btn-outline-success">Login</a>
                </form>
            </div>
        </nav>

        <div class="home">
            <div class="box1">
                <h1>Halo...! <br>
                    Selamat datang <br>
                    di perusahaan kami</h1>
                <p style="margin-bottom: 40px">Kami siap melayani dan membatu dengan hati <br>
                    unutuk mengembangkan bisnis yang ada inginkan</p>
                <button type="button" class="btn1" onclick="$('#myModal').modal('show')">Berkunjung
                    Sekarang</button>



            </div>
        </div>

        <div class="box2">
            @foreach ($settingsubmenu as $index)
            <div class="box3">
                <div class="img1">
                    <img src="{{ asset('storage/photos/'.$index->icon) }}" class="img1">
                </div>
                <h2 style="text-align: left;">{{ $index['title'] }}</h2>
                <p style="text-align: left;">{{ $index['deskripsi'] }}</p>
            </div>
            @endforeach

        </div>


        <div class="about">
            @foreach ($settingabout as $about)

            <div>
                <img src="{{ asset('storage/photos/'.$about->icon) }} " class="about1">
            </div>
            <div style="float: left" class="about2">
                <h1 style="color: #20BF06; font-size:20px">{{ $about->header }}</h1>
                <h1 style="color:black">{{ $about->title }}</h1>
                <p>{{ $about->deskripsi }}</p>
                <br>
                <button class="btn1" type="submit">GET STARTED</button>
            </div>
            @endforeach
        </div>


        {{-- Contact --}}
        <div class="contac">
            @foreach ($SettingContact as $Contact)
            <h1 style="color: #20BF06; font-size: 30px; margin-left: 130px;">{{ $Contact->header }}</h1>
            <h1 style="color:black;margin-left: 130px; width:550px">{{ $Contact->title }}</h1>
            <div class="box21">
                <div class="phone">
                    <h1 style="margin-top: 40px">{{ $Contact->phone }}</h1>
                    <p style="color: white">Phone Number</p>
                </div>
                <div class="email">
                    <h1 style="margin-top: 40px; ">{{ $Contact->email }}</h1>
                    <p style="color: white">Email account</p>
                </div>
                @endforeach
            </div> <br>


            <div class="box22"></div>
            {{-- footer --}}
            <footer class="footer" style="margin-top: 70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-content mt-10">
                                <div style="float: left;">
                                    <h1 style="color: black">Udacoding</h1>
                                    <p>South Tangsel, Dhayapesona <br>
                                        Indonesia.</p>
                                </div>
                                <div style="float: left; margin-left: 270px;">
                                    <h3 style="color: black">About Us</h3>
                                    <p>News</p>
                                    <p>Careers</p>
                                    <p>Investor</p>
                                </div>
                                <div style="float: left; margin-left: 50px;">
                                    <h3 style="color: black">Get Help</h3>
                                    <p>Order Status</p>
                                    <p>Careers</p>
                                    <p>Delivery</p>
                                </div>
                                <div style="float: left; margin-left: 50px;">
                                    <h3 style="color: black">Contact Us</h3>
                                    <p>admin@mail.com</p>
                                    <p>+624239849248</p>
                                </div>
                            </div>
                            <div style="float: left; margin-left: 100px;">
                                <a href=""><img src="{{'gambar/Group 100.png'}}" alt="" style="margin-left: 20px"></a>
                                <a href=""><img src="{{'gambar/Group 102.png'}}" alt="" style="margin-left: 20px"></a>
                                <a href=""><img src="{{'gambar/Group 101.png'}}" alt="" style="margin-left: 20px"></a>
                            </div>
                        </div>
                        <hr style="margin-top: 70px;">
                        <div style="text-align: center;">
                            <p>© 2022 udacoding. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <!-- Footer -->

    </div>

    {{-- Modal pengunjung --}}
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Buku Tamu </h4>
                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Telepon:</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Keperluan:</label>
                            <select class="form-control" id="keperluan" name="keperluan">
                                <option value="training">Training</option>
                                <option value="belajar">Belajar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" class="form-control" id="tanggal" name="tangggal">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam:</label>
                            <input type="time" class="form-control" id="jam" name="jam">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
