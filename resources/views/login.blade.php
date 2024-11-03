<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Login Laravel</title>
</head>

<body>

    <div class="text-center">
        <h2>Login App</h2>
        <p>Silahkan masuk dengan akun yang sudah anda daftarkan</p>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf
                            <label>Email Adress</label>
                            <input type="email" name="email" class="form-control mb-2">

                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Submit Login</button>
                        </form>
                        <a href="{{ route('registrasi.tampil') }}">
                            Registrasi
                        </a>
                        @if (session('failed'))
                        <p class="text-danger"> {{ session('failed') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
