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
                                <th>User Name</th>
                                <th>Shortend URL</th>
                                <th>Long URL</th>
                                <th>Click</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($shorURLs as $shortURL)
                                <tr>
                                    <td> @php
                                        $counter++;
                                    @endphp </td>
                                    <td> {{ $shortURL->user_id }} </td>
                                    <td> {{ env('APP_URL') .'/'. $shortURL->short_url }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
