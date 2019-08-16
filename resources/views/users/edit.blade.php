@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ url('users/'.$user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
            <label for="image">{{ __('Image') }}</label>
            <input id="image" type="file" class="form-control" name="image" value="{{ $user->image }}" required autofocus>
            <label for="age">{{ __('Age') }}</label>
            <input id="age" type="number" class="form-control" name="age" value="{{ $user->age }}" required autofocus>
            <label for="sex">{{ __('Sex') }}</label>
            <input id="sex" type="text" class="form-control" name="sex" value="{{ $user->sex }}" required autofocus>
            <label for="twitter_link">{{ __('Twitter_link') }}</label>
            <input id="twitter_link" type="text" class="form-control" name="twitter_link" value="{{ $user->twitter_link }}" required autoforcus>
            <label for="region">{{ __('Region') }}</label>
            <input id="region" type="text" class="form-control" name="region" value="{{ $user->region }}" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection