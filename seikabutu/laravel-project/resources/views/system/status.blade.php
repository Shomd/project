@extends('layouts.app')

@section('content')

<div>
  <ul class="nav nav-tabs nav-pills m-3">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/home')}}">ホーム</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/system/notice')}}">お知らせ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ url('/system/shift')}}">勤怠詳細</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{ url('/system/status')}}">出退勤</a>
    </li>
  </ul>
</div>

<h1 class="pt-2">出退勤登録</h1>
<div class="m-5 border bg-light">

  <div class="m-3 text-center">
    <div class="main-time fs-1">
      <p class="" id="nowDay"> </p>
      <p class="" id="nowDate"> </p>
    </div>

    <ul style="list-style: none;" class="list-group">
      <li class="p-3 list-group">
        <!-- 後々ボタンを押すことで出退勤ができるようにする -->
        <form method="POST">
          @csrf
          @method('POST')
          <button type="submit" class="btn btn-primary">出勤</button>
        </form>
      </li>
      <li class="p-3list-group">
        <form method="POST">
          @csrf
          @method('POST')
          <button type="submit" class="btn btn-success">退勤</button>
        </form>
      </li>
    </ul>

  </div>
</div>

@endsection