@extends('layouts.app')
@section('content')
<div class="card-header">アプリの説明</div>
<div class="card-body">

<table class="table table-borderless">
  <thead>
    <tr>
      <h6>このアプリは自転車で走った距離や場所などを自転車が好きな方々で共有するアプリです</h6>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>新規登録をします。すでに登録済みの方はログインをします。</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>自分の走った時間、場所、距離を一覧に記入して投稿してもらうとユーザーの皆さんが閲覧出来るようになります。</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>地図はgoogle mapのhtmlと表記されてるとこをコピーして貼る形になっています。</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>private機能は投稿されず自分だけ見れるようになっています。</td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>自分のプロフィールを作成でき、投稿一覧の方できになる人がいればその人の詳細を確認出来ます。</td>
    </tr>
  </tbody>
</table>
@endsection