<!DOCTYPE html>
<html>

<head>
    <title>Shortened URL</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <form class="form" action="{{ route('shorten-url') }}" method="POST">
                @csrf
                <div>
                    <label for="shortLinkForm" class="mb-2">Drop Your Link Here</label>
                    <input id="shortLinkForm" class="form-control" name="original_url" type="text">
                </div>

                <button type="submit" class="btn btn-success mt-3">Generate</button>
            </form>

        </div>
    </div>
</body>

</html>
