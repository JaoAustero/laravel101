@extends('app')

@section('content')
    <h1>{{ $title }}</h1>
    <ul class="uis-list uis-list-large uis-list-divider">
        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
@endsection