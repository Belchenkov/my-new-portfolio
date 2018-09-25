@extends('layouts.app')

@section('content')
    <app-portfolio
        :works="{{$works}}"
    ></app-portfolio>
@endsection