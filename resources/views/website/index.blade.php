@extends('website.main.master')

@section('title','Student List')

@section('body')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6">
                <button class="btn btn-primary btn-lg"  >Student List</button>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-end align-item-center">
            <a href="{{ route('student.create') }}" class="btn btn-outline-light btn-lg">+ Add New Student</a>
            <a href="{{ url('/ViewPages') }}" class="btn btn-outline-light btn-lg">+ Export</a>
            </div>
        </div>
       {{-- flash sms --}}
         @if (session()->has('success'))
         <div class="alert alert-success">
           {{session()->get('success')}}
         </div>
             
         @endif


       {{-- end flash sms --}}

         {{-- table begin --}}
           <table class="table table-bordered text-white bg-dark">
               <thead>
                   <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Address</th>
                       <th>Date</th>
                       <th>Show</th>
                       <th>Update</th>
                       <th>Delete</th>
                   </tr>
               </thead>
               <tbody>
                  @foreach ($std as $student )
                  <tr>
                  <td >{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->n_date}}</td>
                    <td>
                        <a href="{{ route('student.show',$student->id) }}" class="btn btn-primary">Show</a>
                    </td>
                    <td>
                     <a href="{{ route('student.edit',$student->id) }}" class="btn btn-warning">Update</a>
                    </td>
                    <td>
                      <form method="post" action="{{ route('student.destroy',$student->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                    
                    </td>
                </tr>
                  @endforeach
                  
               </tbody>
           </table>
         {{-- table end --}}

          <div class="d-flex justify-content-center align-item-center">
          <div>{{$std->links()}}</div>
          </div>
    </div>
        
    @endsection
    
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
