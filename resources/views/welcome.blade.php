<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Form Biodata</h3><br />
                        {{-- menampilkan error validasi --}} @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif <br />
                        <!-- form validasi -->
                        <form action="{{ url('hasil') }}" method="post"> {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Tempat Tanggal L`ahir</label>
                                <input class="form-control" type="text" name="ttl" value="{{ old('ttl') }}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Jenis Kelamin</label>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Hobi</label>
                                <input class="form-control" type="text" name="hobi" value="{{ old('hobi') }}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                            </div>
                        </form>
                    </div>
</body>

</html>
