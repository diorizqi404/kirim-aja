<!DOCTYPE html>
<html>
<head>
    <title>New Submission</title>
</head>
<body>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding: 1rem;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: -1rem;
        }
        .title {
            margin-right: 0.5rem;
        }
    </style>

    <h1><b>Submission baru dari form {{ $formName }}</b></h1>
    <h3>Seseorang baru saja mengirimkan form dari <a href="{{ 'https://' . $data['site'] }}">{{ $data['site'] }}</a>. Berikut isinya:</h3>
    <br>
    <div class="row">
        <p class="title">Fullname:</p>
        <p><b>{{ $data['fullname'] }}</b></p>
    </div>
    <div class="row">
        <p class="title">Email:</p>
        <p><b>{{ $data['email'] }}</b></p>
    </div>
    <div class="row">
        <p class="title">Phone Number:</p>
        <p><b>{{ $data['phone'] }}</b></p>
    </div>
    <div class="row">
        <p class="title">Message:</p>
        <p><b>{{ $data['message'] }}</b></p>
    </div>
    <div class="row">
        <p class="title">IP Address:</p>
        <p><b>{{ $data['ip_address'] }}</b></p>
    </div>
    <div class="row">
        <p class="title">Submitted On:</p>
        <p><b>{{ $createAt }}</b></p>
    </div>

    <div style="margin-top: 2rem">
        <h3>Terima kasih telah menggunakan <a href="{{ 'https://' . $domain }}">{{ $domain }}</a> !</h3>
    </div>
</body>
</html>