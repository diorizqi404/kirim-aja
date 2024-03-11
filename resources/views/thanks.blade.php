<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks | KIRIM_AJA</title>
</head>
<body>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100dvh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif
        }

        .card {
            padding: 1rem 2rem;
            margin: 0;
            background-color: #d2eeff;
            border: 2px solid #aee1ff;
            border-radius: 5px;
            color: #013da7;
        }
        h1 {
            margin: 0;
            font-size: 3rem;
        }
        h3 {
            margin: 0;
            color: #051c4a;
            font-size: 1.5rem;
        }
        h4 {
            margin: 0;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        a {
            padding: 0.3rem 0.5rem;
            background-color: #0990ff;
            color: white;
            border-radius: 5px;
            font-size: 1rem;
            text-decoration: none;
        }
    </style>

    <div class="card">
        <h1>Thanks!</h1>
        <h3>The form has been submitted.</h3>
        <h4>Thankyou for using KIRIM_AJA</h4>
        <a href="{{ url()->previous() }}"><= Go Back</a>
    </div>
</body>
</html>