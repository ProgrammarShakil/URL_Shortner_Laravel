<!DOCTYPE html>
<html>

<head>
    <title>Shortened URL</title>
</head>

<body>
    <form action="{{ route('shorten-url') }}" method="POST">
        @csrf
        <input class="form-control" name="original_url" type="text">
        <button type="submit" class="btn-info">Generate</button>
    </form>


</html>
