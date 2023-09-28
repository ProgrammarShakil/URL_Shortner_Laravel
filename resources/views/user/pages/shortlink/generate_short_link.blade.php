@extends('user.layout.app')
@section('user.content')
<div>
    <div class="m-5">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        toastr.options.closeButton = true;
                        toastr.error('{{ $error }}');
                    });
                </script>
            @endforeach
        @endif

        <div class="card-body">
            <p>Back to <a class="btn btn-success btn-sm" href="{{ route('user.dashboard.index') }}">Home</a></p>
            <p>Your shortened URL Link: <a
                    href="{{ route('user.shortend.url', $shortUrl) }}">{{ route('user.shortend.url', $shortUrl) }}</a></p>
        </div>
    </div>
</div>
@endsection
