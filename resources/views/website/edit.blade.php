@extends('website.main.master')

@section('title','Update')

@section('body')
<div class="container">
            
    <a href="{{ route('student.index') }}" class="btn btn-warning btn-lg">Back to List</a>
     <br>
     {{--error sms bag--}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif



     {{--end error sms bag--}}
    <form method="post" action="{{ route('student.update', $student->id ) }}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="">UserName</label>
<input type="text" name="name" id="" class="form-control" placeholder="Enter your name"
        value="{{$student->name}}" >
        </div>
        <div class="form-group">
            <label for="">Email:</label>
<input type="text" name="email" id="" class="form-control" placeholder="email@xyz.com" 
value="{{$student->email}}">
          </div>
          <div class="form-group">
            <label for="">Address</label>
<input type="text" name="address" id="" class="form-control" placeholder="Enter your address"
value="{{$student->address}}" >
<div class="form-group">
    <label for="">Date</label>
<input type="date" name="date" id="" class="form-control" placeholder="Enter your date"
value="{{$student->date}}" >
          </div>
          <br>
          <input type="submit" class="btn btn-info btn-lg" value="Update">
</div>
    </form>
    
</div>
@endsection