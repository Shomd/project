@extends('layouts.app')

@section('content')
    <div class="container p-3 border ">
        <div class="row g-2">
            <div class="col-6">
            <div class="p-3 border bg-light">Custom column padding</div>
            </div>
            <div class="col-6">
            <div class="p-3 border bg-light">Custom column padding</div>
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
                <a class="nav-link"  href="{{ url('/home')}}">ホーム</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/system/notice')}}">お知らせ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('/system/shift')}}">勤怠詳細</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/system/status')}}">出退勤</a>
            </li>
        </ul>
    </div>


    <div class="main">
            <div class="main-container">
              <h1>お知らせ</h1>
              <ul class="news-list">
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/15</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/13</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/10</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2023/3/09</p>
                    <p class=""></p>ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/07</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/04</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/03</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
                <li class="border-bottom-2 border-dark">
                  <a href="#">
                    <p class="date">2022/3/01</p>
                    <p class="">ここにお知らせが入りますここにお知らせが入りますここにお知らせが入ります</p>
                  </a>
                </li>
              </ul>
      
      
        
    </div>



@endsection