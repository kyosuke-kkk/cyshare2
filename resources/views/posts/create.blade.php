@extends('layouts.app')

@section('content')
<div class="card-header">投稿画面</div>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="card create_card">
        <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('posts.store') }}" method="POST">
                {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="title" name="date">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">departure_time</label>
                <input type="time" class="form-control" id="exampleInputEmail1" placeholder="title" name="departure_time">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">arrival_time</label>
                <input type="time" class="form-control" id="exampleInputEmail1" placeholder="title" name="arrival_time">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">mileage</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="mileage" name="mileage">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">driving_time</label>
                <input type="time" class="form-control" id="exampleInputEmail1" placeholder="title" name="driving_time">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">map</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="iframe tag" name="map">
            </div>

            <div class="form-check">
  <input class="form-check-input" type="checkbox" value="private" id="defaultCheck1" name="private">
  <label class="form-check-label" for="defaultCheck1">
    private
  </label>
</div>

        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        
            <button type="submit" class="btn btn-dark">Write a post</button>
        </form>
        

        

        </div>
    </div>
</div>
@endsection
