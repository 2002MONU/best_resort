@extends('admin.layout.app')
@section('admintitle') Admin @endsection
@section('maindashboard')
<!-- Main Content Area -->
<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
      alert(msg);
    }
    var msg1 = '{{Session::get('error')}}';
    var exist1 = '{{Session::has('error')}}';
    if(exist1){
      alert(msg1);
    }
  </script>
<div class="main-content">

    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                    {{-- <li class="breadcrumb-item" aria-current="page">Banner</li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Welcome Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="row ">
             <div class="col-md-6 col-xl-4 height-card box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Single Widget -->
                                    <div class="single-widget-area d-flex align-items-center justify-content-between">
                                        <div class="profit-icon">
                                            <i class="zmdi zmdi-favorite-outline"></i>
                                        </div>

                                        <div class="total-profit">
                                            <h6 class="mb-0">Active Banner</h6>
                                            <div class="counter font-30 font-weight-bold" data-comma-separated="true">{{$homebanner}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--            <div class="col-md-6 col-xl-4">
                <a href="">
                <div class="card box-margin-admin">
                    <div class="card-body">
                        
                        <h4 class="my-3">{{$homebanner}}</h4>
                        <h5 class="mb-0"><span class="text-success"></span>Banner</h5>
                    </div>
                    end card-body
                </div>
                </a>
                end card
            </div>-->
            <!--end col-->
            <div class="col-md-6 col-xl-4 height-card box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Single Widget -->
                                    <div class="single-widget-area d-flex align-items-center justify-content-between">
                                        <div class="profit-icon">
                                            <i class="zmdi zmdi-network"></i>
                                        </div>

                                        <div class="total-profit">
                                            <h6 class="mb-0">Active Gallery</h6>
                                            <div class="counter font-30 font-weight-bold" data-comma-separated="true">{{$gallery}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!--end col-->
<!--            <div class="col-xl-4">
                <a href="">
                <div class="card box-margin-admin">
                    <div class="card-body">
                        {{-- <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span> --}}
                        <h4 class="my-3">{{$gallery}}</h4>
                        <h5 class="mb-0">
                            {{-- <span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> --}}
                             Gallery</h5>
                    </div>
                    end card-body
                </div>
                </a>
                end card
            </div>-->
                   <div class="col-md-6 col-xl-4 height-card box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Single Widget -->
                                    <div class="single-widget-area d-flex align-items-center justify-content-between">
                                        <div class="profit-icon">
                                            <i class="zmdi zmdi-eye"></i>
                                        </div>

                                        <div class="total-profit">
                                            <h6 class="mb-0">Rooms Available</h6>
                                            <div class="counter font-30 font-weight-bold" data-comma-separated="true">{{$rooms}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--            <div class="col-xl-4">
                <a href="">
                <div class="card box-margin-admin">
                    <div class="card-body">
                        {{-- <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span> --}}
                        <h4 class="my-3">{{$rooms}}</h4>
                        <h5 class="mb-0">
                            {{-- <span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> --}}
                             Rooms</h5>
                    </div>
                    end card-body
                </div>
                </a>
                end card
            </div>-->
            
        </div>


    </div>
</div>
@endsection