@extends('layouts.frame')
@section('frame')

  <div class="container-fluid">
      <div class="row">
          <div class="card">
              <div class="card-body">
                        <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Non-Teaching Staff
  </button>
  <button type="button" class="btn btn-danger">
    <i class="fa fa-file-excel" aria-hidden="true"></i>
  Export Excel
  </button>
  <button type="button" class="btn btn-danger">
      <i class="fa fa-file-pdf" aria-hidden="true"></i>
    Download PDF
    </button>
   </button>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Add Non-Teaching Staff</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('non_teaching.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Name: </label>
                  <input type="text" name="name" class="form-control" id="user" placeholder="Name">
                </div>
              <div class="form-group form-inline">
                  <label for="mail">Email: </label>
                  <input type="text" name="email" class="form-control" id="mail" placeholder="Email">
              </div>
              <div class="form-group form-inline">
                <label for="phon">Phone Number: </label>
                <input type="tel" name="phone" class="form-control" id="phon" placeholder="Phone Number">
              </div>
              <div class="form-group form-inline">
                <label for="idno">ID NO.: </label>
                <input type="text" name="id_no" class="form-control" id="idno" placeholder="ID Number">
              </div>
              <div class="form-group form-inline">
                <label for="loc">Location: </label>
                <input type="text" name="location" class="form-control" id="loc" placeholder="Location">
              </div>
              <div class="form-group form-inline">
                <label for="role">Role: </label>
                <input type="text" name="role" class="form-control" id="role" placeholder="Position">
              </div>
              <div class="form-group form-inline">
                <label for="gen">Gender: </label>
                <select name="gender">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="form-group form-inline">
                <label for="image">Image: </label>
                <input type="file" name="image" class="form-control" id="image"  placeholder="Upload the Image Here"
                 onchange="return imageval()"> 
              </div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
         </div>
         <div class="modal-footer">

         </div>
       </div>
     </div>
   </div>
        <!-- DataTales Example -->
 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-secondary">Manage Non-Teaching Staff</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>SI</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone Number</th>
           <th>ID Number</th>
           <th>Location</th>
           <th>Role</th>
           <th>Gender</th>
           <th>Image</th>
           <th>Edit</th>
           <th>Delete</th>
         </tr>
       </thead>
       <tfoot>
           <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>ID Number</th>
            <th>Location</th>
            <th>Role</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
             </tr>
       </tfoot>
       <tbody>
        @foreach ($non_teachings as $non_teaching)
        <tr>
        <td>{{$non_teaching->id}}</td>
          <td>{{$non_teaching->name}}</td>
          <td>{{$non_teaching->email}}</td>
          <td>{{$non_teaching->phone}}</td>
          <td>{{$non_teaching->id_no}}</td>
          <td>{{$non_teaching->location}}</td>
          <td>{{$non_teaching->role}}</td>
          <td>{{$non_teaching->gender}}</td>
          <td><img class="img-responsive" style="width:50px" src="{{asset('img/'.$non_teaching->image)}}"/></td>
          <td><a  href="{{action('NonteachingController@edit', $non_teaching->id)}}" class="btn btn-info fa fa-edit btn-sm"></a></td>
            <td><form action="{{action('NonteachingController@destroy', $non_teaching->id )}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
            </form>
            </td>
            </tr> 
        @endforeach
       </tbody>
     </table>
    </div>
  </div>
</div>
              </div>
          </div>
      </div>
    </div>  
@endsection