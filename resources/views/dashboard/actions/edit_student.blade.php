@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('student.update', $student->id)}}" method="POST">
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
                              <label for="img">Image: </label>
                              <input type="text" name="image" value="{{$student->image}}" class="form-control" id="img" placeholder="Fix Image Here">
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