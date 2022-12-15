@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="element-container">
            <div class="current-series">
                CURRENT SERIES
            </div>
            <div class="row-card">
                @foreach ($data as $card)
                        <div class="card">
                            <img src="{{$card["thumb"]}}" alt="">
                            <p>{{$card["title"]}}</p>
                        </div>
                @endforeach
            </div>
            <div class="load">
                LOAD MORE
            </div>
        </div>
    </div>
</div>
  
  
    

@endsection 