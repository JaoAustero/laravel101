@extends('app')

@section('content')
    <div class="uis-margin-top">
        <a class="uis-button uis-button-primary"
            href="/posts">
            Go back
        </a>
        <h1 class="uis-margin-remove-bottom">{{ $post->title }}</h1>
        <div class="uis-badge uis-margin-remove">
            {{ $post->category->name }}
        </div>
        <div>
            <small>Written at {{ $post->created_at }}</small>
        </div>

        <img src="{{ $post->media->path }}" alt="">
        <p>{{ $post->body }}</p>


        <div class="uis-flex uis-flex-between uis-margin-top">
            <a class="uis-button uis-button-default"
                href="/posts/{{ $post->id }}/edit">
                Edit
            </a>

        
            {!!
                Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])    
            !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'uis-button uis-button-danger']) }}
            {!!
                Form::close()    
            !!}
        </div>
    </div>
@endsection