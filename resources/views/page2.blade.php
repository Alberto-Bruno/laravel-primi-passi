<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <title>Page 2</title>
</head>

<body>
    <div class="container text-center h-25 py-5">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Laravel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page1') }}">Return</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
        </ul>
    </div>
</body>

</html>
