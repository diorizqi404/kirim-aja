<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih Telah Mensubmit Form</title>
</head>
<body>
    <h1>Hello, {{ $data['fullname'] }}</h1>
    <p>Terima kasih telah mensubmit form di {{ 'https://' . $data['site'] }}. Kami akan memproses informasi yang Anda berikan dan menghubungi Anda segera.</p>
    <p>Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami kembali.</p>
    <p>Hormat Kami,</p>
    <p>Your Team</p>
</body>
</html>