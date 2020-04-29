@extends('website.main.master')
@section('title','ShowData')

@section('body')
    
<div class="jumbotron bg-info text-center">
    <h3 class="bg-warning p-3">WELCOME TO MY PROFILE</h3>

    <h2>MY ID IS:  {{$student->id}}</h2>
    <h2>MY NAME IS:  {{$student->name}}</h2>
    <h2>MY EMAIL IS:  {{$student->email}}</h2>
    <h2>MY ADDRESS IS:  {{$student->address}}</h2>
    <h2>DATE I ENTER:  {{$student->n_date}}</h2>
</div>
    
@endsection