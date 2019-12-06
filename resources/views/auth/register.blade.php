@extends('app')

@section('content')
<div class="uis-margin-top">
    <div class="uis-width-1-1 uis-width-1-2@l uis-margin-auto">
        <h3>Register</h3>
        {!!
            Form::open([
                'class'     => 'uis-form-stacked',
                'route'    => 'register',
                'method'    => 'POST'
            ]);    
        !!}
            <div class="uis-margin">
                {!!
                    Form::label('fullname', 'Full name', [
                        'class' => 'uis-form-label'
                    ])
                !!}

                {!!
                    Form::text('name', '', [
                        'id' => 'fullname',
                        'class' => 'uis-input',
                        'placeholder' => 'John Doe'
                    ])
                !!}
            </div>

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

            <div class="uis-margin">
                {!!
                    Form::label('confirm-password', 'Confirm Password', [
                        'class' => 'uis-form-label'
                    ])
                !!}

                {!!
                    Form::password('password_confirmation', [
                        'id' => 'confirm-password',
                        'class' => 'uis-input',
                        'placeholder' => 'Re-type your password'
                    ])
                !!}
            </div>

            <div>
                {!!
                    Form::submit('Register', [
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
