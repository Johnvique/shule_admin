@extends('layouts.frame')
@section('frame')

  <div class="container-fluid">
      <div class="row">
          <div class="card">
              <div class="card-body">
                        <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Student
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
           <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Name: </label>
                  <input type="text" name="name" class="form-control" id="user" placeholder="Name">
                </div>
              <div class="form-group form-inline">
                  <label for="reg">Reg.NO: </label>
                  <input type="text" name="regno" class="form-control" id="reg" placeholder="RegNo">
              </div>
              <div class="form-group form-inline">
                <label for="class">Class: </label>
                <input type="text" name="class" class="form-control" id="class" placeholder="Class">
              </div>
              <div class="form-group form-inline">
                <label for="age">DOB: </label>
                <input type="date" name="dob" class="form-control" id="age" placeholder="D.O.B">
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
    <h6 class="m-0 font-weight-bold text-secondary">Manage Students</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>SI</th>
           <th>Name</th>
           <th>Reg.No</th>
           <th>Class</th>
           <th>DOB</th>
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
            <th>Reg.No</th>
            <th>Class</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
             </tr>
       </tfoot>
       <tbody>
        @foreach ($students as $student)
        <tr>
        <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->regno}}</td>
          <td>{{$student->class}}</td>
          <td>{{$student->dob}}</td>
          <td>{{$student->gender}}</td>
          <td><img class="img-responsive" style="width:60px" src="{{asset('img/'.$student->image)}}"/></td>
          <td><a  href="{{action('StudentController@edit', $student->id)}}" class="btn btn-info fa fa-edit btn-sm"></a></td>
            <td><form action="{{action('StudentController@destroy', $student->id )}}" method="post">
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