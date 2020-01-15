@extends('layouts.frame')
@section('frame')
         <!-- Begin Page Content -->
         <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h3 class="h3 mb-0 text-gray-800">School Data</h3>
              <a href="{{url('dashboard/fee')}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm "><i class="fas fa-dollar-sign fa-sm text-white-50"></i> <span style="color: #323232">Receive Fee Payment</span></a>
            </div>
  
            <!-- Content Row -->
            <div class="row">
  
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body bg-info">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Teaching Staff</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$teachers_count}}</div>
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
                  <div class="card-body bg-info">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Registered Students</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$students_count}}</div>
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
                  <div class="card-body bg-info">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">BOG Members</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$bogs_count}}</div>
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
                                <div class="card-body bg-info">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Non-Teaching Staff</div>
                                      <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$nonteaching_count}}</div>
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
                  <div class="card-body bg-info">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Our Classes</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$classes_count}}</div>
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
                  <div class="card-body bg-info">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Subjects Offered</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$subjects_count}}</div>
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
                  <div class="card-body bg-info">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Fee Payment</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$fees_count}}</div>
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