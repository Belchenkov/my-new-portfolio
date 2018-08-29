@extends('layouts.app')

@section('content')
    <app-navbar></app-navbar>
    <app-list-categories
        :categories="{{$categories}}"
    ></app-list-categories>
@endsection