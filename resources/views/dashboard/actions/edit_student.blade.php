@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('student.update', $student->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                              <div class="form-group form-inline">
                                <label for="user">Name: </label>
                                <input type="text" name="name" value="{{$student->name}}" class="form-control" id="user" placeholder="Name">
                              </div>
                            <div class="form-group form-inline">
                                <label for="reg">Reg.NO: </label>
                                <input type="text" name="regno" value="{{$student->regno}}" class="form-control" id="reg" placeholder="RegNo">
                            </div>
                            <div class="form-group form-inline">
                              <label for="class">Class: </label>
                              <input type="text" name="class" value="{{$student->class}}" class="form-control" id="class" placeholder="Class">
                            </div>
                            <div class="form-group form-inline">
                              <label for="age">DOB: </label>
                              <input type="date" name="dob" value="{{$student->dob}}" class="form-control" id="age" placeholder="D.O.B">
                            </div>
                            <div class="form-group form-inline">
                              <label for="gen">Gender: </label>
                              <select name="gender">
                                <option value="{{$student->gender}}">{{$student->gender}}</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                            <div class="form-group form-inline">
                              <label for="image">Image: </label>
                              <input type="file" name="image" class="form-control" id="image"  placeholder="replace the image"
                               onchange="return imageval()">
                            </div>
                              <button type="submit" class="btn btn-primary">Update Students</button>
                            </form>
                    </div>
                </div>                     
            </div> 
            <div class="col-md-4">

            </div>

        </div>
    </div> 
@endsection