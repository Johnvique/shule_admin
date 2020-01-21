@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('non_teaching.update', $non_teaching->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                              <div class="form-group form-inline">
                                <label for="user">Name: </label>
                                <input type="text" name="name" value="{{$non_teaching->name}}" class="form-control" id="user" placeholder="Name">
                              </div>
                            <div class="form-group form-inline">
                                <label for="mail">Email: </label>
                                <input type="text" name="email" value="{{$non_teaching->email}}" class="form-control" id="mail" placeholder="Email">
                            </div>
                            <div class="form-group form-inline">
                              <label for="phon">Phone Number: </label>
                              <input type="tel" name="phone" value="{{$non_teaching->phone}}" class="form-control" id="phon" placeholder="Phone Number">
                            </div>
                            <div class="form-group form-inline">
                              <label for="idno">ID NO.: </label>
                              <input type="text" name="id_no" value="{{$non_teaching->id_no}}" class="form-control" id="idno" placeholder="ID Number">
                            </div>
                            <div class="form-group form-inline">
                              <label for="loc">Location: </label>
                              <input type="text" name="location" value="{{$non_teaching->location}}" class="form-control" id="loc" placeholder="Location">
                            </div>
                            <div class="form-group form-inline">
                              <label for="role">Role: </label>
                              <input type="text" name="role" value="{{$non_teaching->role}}" class="form-control" id="role" placeholder="Position">
                            </div>
                            <div class="form-group form-inline">
                              <label for="gen">Gender: </label>
                              <select name="gender">
                                  <option value="{{$non_teaching->gender}}">{{$non_teaching->gender}}</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                            <div class="form-group form-inline">
                              <label for="image">Image: </label>
                              <input type="file" name="image" class="form-control" id="image"  placeholder="replace the image"
                               onchange="return imageval()">
                            </div>
                              <button type="submit" class="btn btn-primary">Update Non-Teaching Staff</button>
                            </form>
                    </div>
                </div>                     
            </div> 
            <div class="col-md-4">

            </div>

        </div>
    </div>    
@endsection