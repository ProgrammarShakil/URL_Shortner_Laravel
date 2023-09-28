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
            <p>Copy and Share Your shortened URL Link: <a
                    href="{{ route('short-url', $shortUrl) }}">{{ route('short-url', $shortUrl) }}</a></p>
            <p>If you want to see how much clicked your link, please register your account.</p>
        </div>
    </div>
</div>
@endsection
