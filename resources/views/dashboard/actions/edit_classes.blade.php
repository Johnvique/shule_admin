@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('classes.update', $class->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                              <div class="form-group form-inline">
                                <label for="user">Name: </label>
                                <input type="text" name="name" value="{{$class->name}}" class="form-control" id="user" placeholder="Name">
                              </div>
                            <div class="form-group form-inline">
                                <label for="cap">Capacity: </label>
                                <input type="text" name="size" value="{{$class->size}}" class="form-control" id="cap" placeholder="Capacity">
                            </div>
                            <div class="form-group form-inline">
                              <label for="rep">Class Rep: </label>
                              <input type="text" name="class_rep" value="{{$class->class_rep}}" class="form-control" id="rep" placeholder="Class Rep">
                            </div>
                            <div class="form-group form-inline">
                              <label for="classteach">Class Teacher: </label>
                              <input type="text" name="teacher" value="{{$class->teacher}}" class="form-control" id="classteach" placeholder="Class Teacher">
                            </div>
                              <button type="submit" class="btn btn-primary">Update Classes</button>
                            </form>
                    </div>
                </div>                     
            </div> 
            <div class="col-md-4">

            </div>

        </div>
    </div>    
@endsection