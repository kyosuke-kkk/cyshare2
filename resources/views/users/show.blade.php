
@extends('layouts.app')


@section('content')

<div class="card-body">
<h5 class="card-title">{{ $user->name }}</h5>
<img src="{{ $user->image }}" alt="" title="">
<h5 class="card-title">{{ $user->age }}</h5>
<h5 class="card-title">{{ $user->sex }}</h5>
<h5 class="card-title">{{ $user->twitter_link }}</h5>
<h5 class="card-title">{{ $user->region }}</h5>
         <h5 class="card-title">
         </h5>
         <h5 class="card-title">
         </h5>
      <p class="card-text">{{ $user->content }}</p>
 @if($user->id == Auth::id() )
  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">編集</a>
  @endif
    </div>
 </div>
 
 @endsection