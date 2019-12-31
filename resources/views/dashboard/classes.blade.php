@extends('layouts.frame')
@section('frame')

  <div class="container-fluid">
      <div class="row">
          <div class="card">
              <div class="card-body">
                        <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Class
  </button>
      <button type="button" class="btn btn-danger btn-sm" onclick="PrintDiv()">
          <i class="fa fa-print" aria-hidden="true"></i>
        Print
        </button>
   </button>
   
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Manage Classes</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('classes.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Name: </label>
                  <input type="text" name="name" class="form-control" id="user" placeholder="Name">
                </div>
              <div class="form-group form-inline">
                  <label for="cap">Capacity: </label>
                  <input type="text" name="size" class="form-control" id="cap" placeholder="Capacity">
              </div>
              <div class="form-group form-inline">
                <label for="rep">Class Rep: </label>
                <input type="text" name="class_rep" class="form-control" id="rep" placeholder="Class Rep">
              </div>
              <div class="form-group form-inline">
                <label for="classteach">Class Teacher: </label>
                <input type="text" name="teacher" class="form-control" id="classteach" placeholder="Class Teacher">
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
    <h6 class="m-0 font-weight-bold text-secondary">Manage Classes</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>SI</th>
           <th>Name</th>
           <th>Capacity</th>
           <th>Class Rep.</th>
           <th>Class Teacher</th>
           <th>Update</th>
         </tr>
       </thead>
       <tfoot>
           <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Capacity</th>
            <th>Class Rep.</th>
            <th>Class Teacher</th>
            <th>Update</th>
             </tr>
       </tfoot>
       <tbody>
        @foreach ($classes as $class)
        <tr>
        <td>{{$class->id}}</td>
          <td>{{$class->name}}</td>
          <td>{{$class->size}}</td>
          <td>{{$class->class_rep}}</td>
          <td>{{$class->teacher}}</td>
          <td> 
              <a  href="" class="btn btn-success fa fa-edit btn-sm"></a>
              <a  href="" class="btn btn-danger fa fa-trash-alt btn-sm"></a>
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