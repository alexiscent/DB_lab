@extends('base')

@section('body')
    <h3>{{$from}}</h3>
    @foreach($content as $item)
        @if($type)
            <a href="/DB_lab/public/{{$type}}/{{$item->id}}">{{$item->name}}</a>
        @else
            <p>{{$item->name}}</p>
        @endif
    @endforeach
@endsection
