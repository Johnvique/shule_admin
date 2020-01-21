@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('bog.update', $bog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                  <div class="form-group form-inline">
                                    <label for="user">Name: </label>
                                    <input type="text" name="name" value="{{$bog->name}}" class="form-control" id="user" placeholder="Name">
                                  </div>
                                <div class="form-group form-inline">
                                    <label for="mail">Email: </label>
                                    <input type="text" name="email" value="{{$bog->email}}" class="form-control" id="mail" placeholder="Email">
                                </div>
                                <div class="form-group form-inline">
                                  <label for="phon">Phone Number: </label>
                                  <input type="tel" name="phone" value="{{$bog->phone}}" class="form-control" id="phon" placeholder="Phone Number">
                                </div>
                                <div class="form-group form-inline">
                                  <label for="idno">ID NO.: </label>
                                  <input type="text" name="id_no" value="{{$bog->id_no}}" class="form-control" id="idno" placeholder="ID Number">
                                </div>
                                <div class="form-group form-inline">
                                  <label for="loc">Location: </label>
                                  <input type="text" name="location" value="{{$bog->location}}" class="form-control" id="loc" placeholder="Location">
                                </div>
                                <div class="form-group form-inline">
                                  <label for="pos">Position: </label>
                                  <input type="text" name="role" value="{{$bog->role}}" class="form-control" id="pos" placeholder="Role">
                                </div>
                                <div class="form-group form-inline">
                                  <label for="gen">Gender: </label>
                                  <select name="gender">
                                    <option value="{{$bog->gender}}">{{$bog->gender}}</option>
                                  </select>
                                </div>
                                <div class="form-group form-inline">
                                  <label for="image">Image: </label>
                                  <input type="file" name="image" class="form-control" id="image"  placeholder="replace the image"
                                   onchange="return imageval()">
                                </div>
                                  <button type="submit" class="btn btn-primary">Update BOG</button>
                                </form> 
                    </div>
                </div>                     
            </div> 
            <div class="col-md-4">

            </div>

        </div>
    </div>    
@endsection