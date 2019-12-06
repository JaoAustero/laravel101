@extends('app')

@section('content')
<div class="uis-margin-top">
    <div class="uis-width-1-1 uis-width-1-2@l uis-margin-auto">
        <h3>Log in</h3>
        {!!
            Form::open([
                'class'     => 'uis-form-stacked',
                'action'    => 'Auth\LoginController@login',
                'method'    => 'POST'
            ]);    
        !!}

            <div class="uis-margin">
                {!!
                    Form::label('email-address', 'Email address', [
                        'class' => 'uis-form-label'
                    ])
                !!}

                {!!
                    Form::email('email', '', [
                        'id' => 'email-address',
                        'class' => 'uis-input',
                        'placeholder' => 'john.doe@gmail.com'
                    ])
                !!}
            </div>

            <div class="uis-margin">
                {!!
                    Form::label('password', 'Password', [
                        'class' => 'uis-form-label'
                    ])
                !!}

                {!!
                    Form::password('password', [
                        'id' => 'password',
                        'class' => 'uis-input',
                        'placeholder' => 'Your password'
                    ])
                !!}
            </div>

            <div>
                {!!
                    Form::submit('Log in', [
                        'class' => 'uis-button uis-button-primary'
                    ])    
                !!}
            </div>

        {!!
            Form::close()    
        !!}
    </div>
</div>
@endsection
