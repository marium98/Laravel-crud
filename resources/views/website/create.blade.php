@extends('website.main.master')

@section('title','AddNewStudent')
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
            <form method="post" action="{{ url('/student') }}">
                @csrf
                <div class="form-group">
                  <label for="">UserName</label>
    <input type="text" name="name" id="" class="form-control" placeholder="Enter your name"
                value="{{old('name')}}" >
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
      <input type="text" name="email" id="" class="form-control" placeholder="email@xyz.com" 
      value="{{old('email')}}">
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
      <input type="text" name="address" id="" class="form-control" placeholder="Enter your address"
      value="{{old('address')}}" >
      <div class="form-group">
        <label for="">Date</label>
<input type="date" name="n_date" id="" class="form-control" placeholder="Enter your address"
value="{{old('n_date')}}" >
                  </div>
                  <br>
                  <input type="submit" class="btn btn-info btn-lg" value="Submit">
        </div>
            </form>
            
        </div>
    @endsection