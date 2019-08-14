@extends('layouts.app')


@section('content')
<div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
         <h5 class="card-title">
              ポスト:{{ $post->title }}
         </h5>
         <h5 class="card-title">
          投稿者:{{ $post->user->name }}
         </h5>
      <p class="card-text">{{ $post->content }}</p>
  <p>{{ $post->user->name }}</p>
    </div>
 </div>
 
 @endsection