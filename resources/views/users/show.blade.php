
@extends('layouts.app')


@section('content')
<div class="card-body">
<h5 class="card-title">{{ $user->name }}</h5>
<h5 class="card-title">{{ $user->image }}</h5>
<h5 class="card-title">{{ $user->age }}</h5>
<h5 class="card-title">{{ $user->sex }}</h5>
<h5 class="card-title">{{ $user->twitter_link }}</h5>
<h5 class="card-title">{{ $user->region }}</h5>
         <h5 class="card-title">
              ポスト:{{ $user->title }}
         </h5>
         <h5 class="card-title">
          投稿者:{{ $user->name }}
         </h5>
      <p class="card-text">{{ $user->content }}</p>
  <p>{{ $user->name }}</p>
  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">詳細</a>
    </div>
 </div>
 
 @endsection