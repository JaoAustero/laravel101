@extends('layouts.app')

@section('content')
    <h1>Write a blog</h1>

    {!! Form::open([
        'class' => 'uis-form-stacked',
        'action' => 'PostsController@store',
        'method' => 'POST',
        ]) !!}
        <div class="uis-margin">
            {!!
                Form::label('blog-title', 'Title', [
                    'class' => 'uis-form-label'
                ])
            !!}

            {!!
                Form::text('title', '', [
                    'id' => 'blog-title',
                    'class' => 'uis-input',
                    'placeholder' => 'ex: My new blog 2019'
                ])
            !!}
        </div>

        <div class="uis-margin">
            {!!
                Form::label('blog-body', 'Body', [
                    'class' => 'uis-form-label'
                ])
            !!}

            {!!
                Form::textarea('body', '', [
                    'id' => 'blog-body',
                    'class' => 'uis-textarea',
                    'placeholder' => 'ex: something to say'
                ])
            !!}
        </div>

        <div class="uis-margin">
            {!!
                Form::submit('Submit', [
                    'class' => 'uis-button uis-button-primary'
                ])    
            !!}
        </div>
    {!! Form::close() !!}
@endsection