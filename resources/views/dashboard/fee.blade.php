@extends('layouts.frame')
@section('frame')

  <div class="container-fluid">
      <div class="row">
          <div class="card">
              <div class="card-body">
                        <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Manage Fee
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
           <h5 class="modal-title" id="exampleModalLabel">Receive Fee Payment</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('fee.store')}}" method="POST">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Student Name: </label>
                  <input type="text" name="name" class="form-control" id="user" placeholder="Name">
                </div>
              <div class="form-group form-inline">
                  <label for="class">Class: </label>
                  <input type="text" name="class" class="form-control" id="class" placeholder="Class">
              </div>
              <div class="form-group form-inline">
                <label for="reg">Reg.No.: </label>
                <input type="text" name="regno" class="form-control" id="reg" placeholder="Registration Number">
              </div>
              <div class="form-group form-inline">
                <label for="pay">Amount Payable: </label>
                <input type="text" name="payable" class="form-control" id="pay" placeholder="Payable">
              </div>
              <div class="form-group form-inline">
                <label for="paid">Amount Paid: </label>
                <input type="text" name="paid" class="form-control" id="paid" placeholder="Paid">
              </div>
              <div class="form-group form-inline">
                <label for="bal">Balance: </label>
                <input type="text" name="balance" class="form-control" id="bal" placeholder="Remaining Balance">
              </div>
              <div class="form-group form-inline">
                <label for="pdate">Payment Date: </label>
                <input type="date" name="paydate" class="form-control" id="pdate" placeholder="Payment Date">
              </div>
              <div class="form-group form-inline">
                <label for="tno">Transaction No.: </label>
                <input type="text" name="transNo" class="form-control" id="tno" placeholder="Transaction Number">
              </div>
              <div class="form-group form-inline">
                <label for="paymethod">Payment Method: </label>
                <select name="paymethod">
                  <option>Cash</option>
                  <option>M-Pesa</option>
                  <option>Bank</option>
                  <option>Smart Card</option>
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
    <h6 class="m-0 font-weight-bold text-secondary">Manage Fee Payment</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>SI</th>
           <th>Student Name</th>
           <th>Class</th>
           <th>Reg.No.</th>
           <th>Amount Payable</th>
           <th>Amount Paid</th>
           <th>Balance</th>
           <th>Payment Date</th>
           <th>Transaction Number</th>
           <th>Payment Method</th>
           <th>Update</th>
         </tr>
       </thead>
       <tfoot>
           <tr>
            <th>SI</th>
            <th>Student Name</th>
            <th>Class</th>
            <th>Reg.No.</th>
            <th>Amount Payable</th>
            <th>Amount Paid</th>
            <th>Balance</th>
            <th>Payment Date</th>
            <th>Transaction Number</th>
            <th>Payment Method</th>
            <th>Update</th>
             </tr>
       </tfoot>
       <tbody>
        @foreach ($fees as $fee)
        <tr>
        <td>{{$fee->id}}</td>
          <td>{{$fee->name}}</td>
          <td>{{$fee->class}}</td>
          <td>{{$fee->regno}}</td>
          <td>{{$fee->payable}}</td>
          <td>{{$fee->paid}}</td>
          <td>{{$fee->balance}}</td>
          <td>{{$fee->paydate}}</td>
          <td>{{$fee->transNo}}</td>
          <td>{{$fee->paymethod}}</td>
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