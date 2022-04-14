@extends('layouts.app')



@section('content')

<div class="container p-3 border ">
    <div class="row g-2">
        <div class="col-6">
            <div class="p-3 border bg-light"><?php $user = Auth::user(); ?>{{ $user->user_id }}</div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light"><?php $user = Auth::user(); ?>{{ $user->name }}</div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light">Custom column padding</div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light">Custom column padding</div>
        </div>
    </div>
</div>

<div>
    <ul class="nav nav-tabs nav-pills m-3">
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/home')}}">ホーム</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/system/notice')}}">お知らせ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/system/shift')}}">勤怠詳細</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/system/status')}}">出退勤</a>
        </li>
    </ul>
</div>

@foreach($users as $user)
<div class="p-3 d-flex flex-wrap">
    <!-- 従業員の詳細へ -->
    <a href="" class="p-3 text-dark border bg-light">{{ $user->user_id}}{{ $user->name}}</a>
</div>
@endforeach


@endsection