@extends('app')

@section('content')
    <section
        class="uis-margin-large-top
            uis-margin-medium-bottom">

        <h1
            class="uis-text-header
                uis-margin-remove-top
                uis-margin-small-bottom">
            Writters. ✍🏻
        </h1>
        <p class="uis-margin-remove">The latest and best lifestyle articles selected</p>
        <p class="uis-margin-remove">by our editorial office.</p>

        
    </section>

    @include('home.latest')
@endsection