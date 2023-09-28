@extends('user.layout.app')
@section('user.content')
    <div class="m-5">
        <div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                {{-- <th>User Name</th> --}}
                                <th>Shortend URL</th>
                                <th>Long URL</th>
                                <th>Short Link Click</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($shortURLs) === 0)
                                <tr><td colspan="5"><div class="text-center">No short URLs are available.</div></td></tr>
                            @else
                                @php $counter = 1; @endphp
                                @foreach ($shortURLs as $shortURL)
                                    <tr>
                                        <td>
                                            {{ $counter++ }}
                                        </td>
                                        {{-- <td> {{ $shortURL->user->name }}</td> --}}
                                        <td> <a
                                                href="{{ route('user.shortend.url', $shortURL->short_url) }}">{{ route('user.shortend.url', $shortURL->short_url) }}</a>
                                        </td>
                                        <td> <a href="{{ $shortURL->original_url }}">{{ $shortURL->original_url }}</a> </td>
                                        <td>{{ $shortURL->click_count }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
