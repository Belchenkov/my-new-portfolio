@extends('layouts.app')

@section('content')
    <app-navbar></app-navbar>
    <app-list-works
        :categories="{{$categories}}"
    ></app-list-works>
@endsection