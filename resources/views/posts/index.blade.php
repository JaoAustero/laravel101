@extends('app')

@section('content')
    <div class="uis-flex uis-flex-between uis-margin-top">
        <div>
            <h1 class="uis-text-lead uis-margin-remove">List of posts</h1>
        </div>
        <div>
            <a 
                class="uis-button uis-button-primary"
                href="/posts/create">
                Create a post
            </a>
        </div>
    </div>

    @if(count($posts) > 0)
        <ul class="uis-list uis-list-large uis-list-divider">
            @foreach($posts as $post)
                <li>
                    <a
                        class="uis-link uis-link-reset"
                        href="/posts/{{ $post->id }}">
                        <div class="uis-grid">
                            <div>
                                <img src="{{ $post->media->path }}" hegiht="80px" width="80px" alt="">
                            </div>
                        
                            <div>
                                <div>
                                    <b>{{ $post->title }}</b>
                                </div>
                                <div>
                                    <span class="uis-badge uis-margin-remove">{{ $post->category->name }}</span>
                                </div>
                                <div>
                                    <small>{{ $post->body }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No posts yet.</p>
    @endif
@endsection