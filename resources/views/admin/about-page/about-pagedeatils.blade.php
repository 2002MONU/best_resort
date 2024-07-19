@extends('admin.layout.app')
@section('admintitle') About Details @endsection
@section('maindashboard')
<!-- Main Content Area -->
<div class="main-content">
   
    <div class="data-table-area">
       <div class="container-fluid">
           <div class="d-inline-block align-items-center">
               <nav>
                   <ol class="breadcrumb">
                       {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                       <li class="breadcrumb-item active" aria-current="page">About Page</li>
                       <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                   </ol>
               </nav>
           </div>
           <div class="row">
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
               <div class="col-12 box-margin">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-flex justify-content-between">
                               <h4 class="card-title mb-2">About Page Details</h4>
                                {{-- <a href="{{route('admin.add-home-banner')}}" class="btn btn-primary  btn-sm">Add Banner</a> --}}
                           </div>
                           <div class="table-responsive order-stats">
                               <table class="table"> 
                                <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Title</th>
                                       <th>Description</th>
                                       <th>Image</th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   
                                   <tr>
                                       <td>{{$about_details->id}}</td>
                                      <td>{{$about_details->title}}</td>
                                      <td></td>
                                       <td><a href="{{asset('web_assets/dynamics/slider/'.$about_details->image)}}"><img src="{{asset('web_assets/dynamics/slider/'.$about_details->image)}}" style="width:80px;height:80px;"></a></td>
                                       <td>{{$about_details->created_at}}</td>
                                       <td>{{$about_details->updated_at}}</td>
                                       <td><a href="{{route('about.about-update',$about_details->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            {{-- <a href="{{route('admin.slider-delete',$banner->id)}}" class="btn btn-sm btn-danger mtop" onclick="return confirm('Are you sure?')">Delete</a> --}}
                                       </td>
                                   </tr> 
                                </tbody>
                           </table>
                           {{-- {!! $homeBanner->appends(['sort' => 'department'])->links() !!} --}}
                       </div>
                       </div> <!-- end card body-->
                   </div> <!-- end card -->
               </div><!-- end col-->
           </div>
           <!-- end row-->
       </div>
   </div>
   </div>

@endsection