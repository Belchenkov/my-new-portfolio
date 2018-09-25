@extends('layouts.app')

@section('content')
    <app-navbar></app-navbar>
    <app-list-works
        :categories="{{$categories}}"
        :works="{{$works}}"
    ></app-list-works>
@endsection