@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($threads as $thread)
            <div class="card my-4">
                <div class="card-header">
                    <a href="{{ route('threads.show', [$thread->channel->slug, $thread->id] ) }}">
                        <h4>{{ $thread->title }}</h4>
                    </a>
                </div>
                <div class="card-body">
                    <article>
                        {{ $thread->body }}
                    </article>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
