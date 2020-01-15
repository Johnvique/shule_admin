@extends('layouts.frame')
@section('frame')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('fee.update', $fee->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                              <div class="form-group form-inline">
                                <label for="user">Pupil Name: </label>
                                <input type="text" name="name" value="{{$fee->name}}" class="form-control" id="user" placeholder="Name">
                              </div>
                            <div class="form-group form-inline">
                                <label for="class">Class: </label>
                                <input type="text" name="class" value="{{$fee->class}}" class="form-control" id="class" placeholder="Class">
                            </div>
                            <div class="form-group form-inline">
                              <label for="reg">Reg.No.: </label>
                              <input type="text" name="regno" value="{{$fee->regno}}" class="form-control" id="reg" placeholder="Registration Number">
                            </div>
                            <div class="form-group form-inline">
                              <label for="pay">Amount Payable: </label>
                              <input type="text" name="payable" value="{{$fee->payable}}" class="form-control" id="pay" placeholder="Payable">
                            </div>
                            <div class="form-group form-inline">
                              <label for="paid">Amount Paid: </label>
                              <input type="text" name="paid" value="{{$fee->paid}}" class="form-control" id="paid" placeholder="Paid">
                            </div>
                            <div class="form-group form-inline">
                              <label for="bal">Balance: </label>
                              <input type="text" name="balance" value="{{$fee->balance}}" class="form-control" id="bal" placeholder="Remaining Balance">
                            </div>
                            <div class="form-group form-inline">
                              <label for="pdate">Payment Date: </label>
                              <input type="date" name="paydate" value="{{$fee->paydate}}" class="form-control" id="pdate" placeholder="Payment Date">
                            </div>
                            <div class="form-group form-inline">
                              <label for="tno">Transaction No.: </label>
                              <input type="text" name="transNo" value="{{$fee->transNo}}" class="form-control" id="tno" placeholder="Transaction Number">
                            </div>
                            <div class="form-group form-inline">
                              <label for="paymethod">Payment Method: </label>
                              <select name ="paymethod">
                                <option value="{{$fee->paymethod}}">{{$fee->paymethod}}</option>
                                <option>Cash</option>
                                <option>M-Pesa</option>
                                <option>Bank</option>
                                <option>Smart Card</option>
                              </select>
                            </div>
                              <button type="submit" class="btn btn-primary">Update Fee</button>
                            </form>
                    </div>
                </div>                     
            </div> 
            <div class="col-md-4">

            </div>

        </div>
    </div>    
@endsection