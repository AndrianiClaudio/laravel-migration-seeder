@extends('guest.layout.base')
@section('documentTitle')
    {{$documentTitle}}
@endsection
@section('MainTitle')
Treni in partenza oggi
@endsection
@section('MainContent')
<div class="container">
  @foreach ($trains as $train)
  <div class="train">
    <h2 class="title">
      {{$train->train_code}} - 
      {{$train->departure_station}} -> 
      {{$train->arrival_station}}
    </h2>
    <h3 class="agency"><a href="{{route('trains.show',$train->id)}}">{{$train->agency}}</a></h3>
    <div class="travel-time">
      <b>Partenza: </b><span>{{$train->departure_time}}</span>
      <b>Arrivo: </b><span>{{$train->arrival_time}}</span>
    </div>
  </div>
  @endforeach
</div>
@endsection