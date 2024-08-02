<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">{{ config('app.name') }}</h1>
            <p class="lead">Buat form gausah mikirin backend. Tinggal salin link ajah:)</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Simple Form</h2>
                <p>Form kami simpel, tinggal salin url saja atau pakai template yang sudah tersedia.</p>
            </div>
            <div class="col-md-4">
                <h2>Free</h2>
                <p>100% tidak berbayar alias gratis. Kamu bisa membuat form berapapun yang kamu inginkan.</p>
            </div>
            <div class="col-md-4">
                <h2>Easy</h2>
                <p>Kamu dapat melihat submission baru pada halaman dashboard dan email kamu tentunya.</p>
            </div>
        </div>
    </section>

    <section class="container mt-4">
            <h2>Demo Tutorial</h2>
            <video src="{{ asset('demo_kirim_aja.mp4') }}" width="500px" controls></video>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2024 {{ config('app.name') }}. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 