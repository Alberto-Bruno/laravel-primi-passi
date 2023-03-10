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
    <title>Hello Laravel</title>
</head>

<body>
    <div class="container-fluid text-center h-25 py-5">
        <h1>Hello Word</h1>
    </div>

    <div class="d-grid gap-2 container">
        <a class="btn btn-primary" href="{{ route('page1') }}"> Page 1</a>
        <a class="btn btn-primary" href="{{ route('page2') }}"> Page 2</a>
    </div>
</body>

</html>
