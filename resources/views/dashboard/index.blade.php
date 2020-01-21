@extends('layouts.frame')
@section('frame')
         <!-- Begin Page Content -->
         <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h3 class="h3 mb-0 text-gray-800">School Data</h3>
              <a href="{{url('dashboard/fee')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm "><i class="fas fa-dollar-sign fa-sm text-white-50"></i> <span style="color: #FFFFFF">Receive Fee Payment</span></a>
            </div>
  
            <!-- Content Row -->
            <div class="row">
  
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-secondary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/teacher')}}"><span style="color:#FFFFFF">Teaching Staff</span></a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$teachers_count}}  Teachers</span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-secondary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/student')}}"><span style="color:#FFFFFF">Registered Students</span></a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$students_count}}  Students</span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-secondary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/bog')}}"><span style="color:#FFFFFF">BOG Members</span></a></div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$bogs_count}}  Board Member</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body bg-secondary">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/non_teaching')}}"><span style="color:#FFFFFF">Non-Teaching Staff</span></a></div>
                                      <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$nonteaching_count}}  Staffs</span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-secondary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/classes')}}"><span style="color:#FFFFFF">Our Classes</span></a></div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$classes_count}}  Classes</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-building fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-secondary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/subject')}}"><span style="color:#FFFFFF">Subjects Offered</span></a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$subjects_count}}  Subjects</span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-secondary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1"><a href="{{url('dashboard/fee')}}"><span style="color:#FFFFFF">Fee Payments</span></a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span style="color:#FFFFFF">{{$fees_count}}  Payments</span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Content Row -->
  
            <!-- Content Row -->
            <div class="row">
  
              <!-- Content Column -->
              <div class="col-lg-6 mb-4">

  
              </div>
  
              <div class="col-lg-6 mb-4">
  
  
  
              </div>
            </div>
  
          </div>
          <!-- /.container-fluid -->
  
        </div>
        <!-- End of Main Content -->   
@endsection