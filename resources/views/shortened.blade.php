<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="row justify-content-center mt-3">
        <div class="card col-md-8">
            <div class="card-body">
                <p>Back to <a class="btn btn-success btn-sm" href="{{ route('welcome') }}">Home</a></p>
                <p>Copy and Share Your shortened URL Link: <a
                        href="{{ route('short-url', $shortUrl) }}">{{ route('short-url', $shortUrl) }}</a></p>
                <p>If you want to see how much clicked your link, please register your account.</p>
            </div>
        </div>
    </div>
</body>

</html>
