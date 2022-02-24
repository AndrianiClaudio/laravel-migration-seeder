@extends('guest.layout.base')

@section('documentTitle')
    {{ $documentTitle }}
@endsection

@section('MainContent')
<ul>
  @foreach ($train->toArray() as $key =>$item)
  <li>
    {{$key}} : {{$item}}
  </li>    
  @endforeach
</ul>
@endsection