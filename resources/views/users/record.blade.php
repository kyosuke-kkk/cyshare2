@extends('layouts.app')

@section('content')
<div class="card-header">board</div>
<div class="card-body">
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@foreach($posts as $post)
<div class="card">
    
    <div class="card-body">

        <h5 class="card-title">{{ $post->title }}</h5>
        <h5 class="card-title">
            投稿者:
            <a href="{{ route('users.show', $post->user_id)  }}">  {{ $post->user->name }}</a>

        </h5>
        
        <p class="card-text">{{ $post->content }}</p>
        <p>{{ $post->user->name }}</p>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
        @if($post->user_id == Auth::id() )
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
        </form>
        @endif
    </div>
    </div>
    @endforeach
</div>
@endsection
