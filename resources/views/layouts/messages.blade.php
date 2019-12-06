@if(count($errors) > 0 )
    @foreach($errors->all() as $error)
        <div class="uis-message uis-message-danger uis-margin-top">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="uis-message uis-message-success uis-margin-top">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="uis-message uis-message-danger uis-margin-top">
        {{ session('error') }}
    </div>
@endif