@extends('app')

@section('content')
<div class="uis-width-1-1 uis-width-1-2@l uis-margin-auto uis-margin-top">
    <div class="uis-card uis-card-default">
        <div class="uis-card-body">
            <h3 class="uis-card-title">Dashboard</h3>

            @if (session('status'))
                <div class="uis-message uis-message-success">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
</div>
@endsection
