@extends('layouts.frame')
@section('frame')

  <div class="container-fluid">
      <div class="row">
          <div class="card">
              <div class="card-body">
                        <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Subject
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
           <h5 class="modal-title" id="exampleModalLabel">Manage Subjects</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('subject.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Subject Name: </label>
                  <input type="text" name="name" class="form-control" id="user" placeholder="Name">
                </div>
              <div class="form-group form-inline">
                  <label for="teach">Subject Teacher: </label>
                  <input type="text" name="teacher" class="form-control" id="teach" placeholder="Teacher">
              </div>
              <div class="form-group form-inline">
                <label for="code">Subject Code: </label>
                <input type="text" name="code" class="form-control" id="code" placeholder="Subject Code">
              </div>
              <div class="form-group form-inline">
                <label for="type">Subject Type: </label>
                <select name="sub_type">
                  <option>Optional</option>
                  <option>Compulsary</option>
                </select>
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
    <h6 class="m-0 font-weight-bold text-secondary">Manage BOG Members</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>SI</th>
           <th>Subject Name</th>
           <th>Subject Teacher</th>
           <th>Subject Code</th>
           <th>Subject Type</th>
           <th>Update</th>
         </tr>
       </thead>
       <tfoot>
           <tr>
            <th>SI</th>
            <th>Subject Name</th>
            <th>Subject Teacher</th>
            <th>Subject Code</th>
            <th>Subject Type</th>
            <th>Update</th>
             </tr>
       </tfoot>
       <tbody>
        @foreach ($subjects as $subject)
        <tr>
        <td>{{$subject->id}}</td>
          <td>{{$subject->name}}</td>
          <td>{{$subject->teacher}}</td>
          <td>{{$subject->code}}</td>
          <td>{{$subject->sub_type}}</td>
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