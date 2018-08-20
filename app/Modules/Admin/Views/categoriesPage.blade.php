@extends('layouts.app')

@section('content')
    <app-list-categories
        :categories="{{$categories}}"
    ></app-list-categories>
@endsection