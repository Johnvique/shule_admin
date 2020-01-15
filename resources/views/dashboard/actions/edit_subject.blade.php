@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('subject.update', $subject->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                              <div class="form-group form-inline">
                                <label for="user">Subject Name: </label>
                                <input type="text" name="name" value="{{$subject->name}}" class="form-control" id="user" placeholder="Name">
                              </div>
                            <div class="form-group form-inline">
                                <label for="teach">Subject Teacher: </label>
                                <input type="text" name="teacher" value="{{$subject->teacher}}" class="form-control" id="teach" placeholder="Teacher">
                            </div>
                            <div class="form-group form-inline">
                              <label for="code">Subject Code: </label>
                              <input type="text" name="code" value="{{$subject->code}}" class="form-control" id="code" placeholder="Subject Code">
                            </div>
                            <div class="form-group form-inline">
                              <label for="type">Subject Type: </label>
                              <select name="sub_type">
                                <option value="{{$subject->sub_type}}">{{$subject->sub_type}}</option>
                                <option>Optional</option>
                                <option>Compulsary</option>
                              </select>
                            </div>
                              <button type="submit" class="btn btn-primary">Update Subjects</button>
                            </form>
                    </div>
                </div>                     
            </div> 
            <div class="col-md-4">

            </div>

        </div>
    </div>    
@endsection