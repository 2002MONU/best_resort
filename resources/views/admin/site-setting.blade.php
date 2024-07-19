@extends('admin.layout.app')
@section('admintitle') Seo Setting  Details @endsection
@section('maindashboard')
<!-- Main Content Area -->
<div class="main-content">
   
    <div class="data-table-area">
       <div class="container-fluid">
           <div class="d-inline-block align-items-center">
               <nav>
                   <ol class="breadcrumb">
                       {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                       <li class="breadcrumb-item active" aria-current="page">Site Setting Details</li>
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
                  
                 </script>
                 
               <div class="col-12 box-margin">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-flex justify-content-between">
                               <h4 class="card-title mb-2">Site Setting Details</h4>
                           </div>
                           <div class="table-responsive order-stats">
                               <table class="table"> 
                                <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Title </th>
                                       <th>Keywords</th>
                                       <th>Description</th>
                                       <!--<th>About Banner</th>-->
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tr>
                                       <td>{{$site_setting->id}}</td>
                                       
                                       <td>{{$site_setting->title}}</td>
                                       <td>{{$site_setting->keywords}}</td>
                                       <td>{!! $site_setting->description !!}</td>
                                       <!--<td><img src="{{asset('web_assets/dynamics/gallery/'.$site_setting->about_banner)}}" style="width:100px;height:100px;"></td>-->
                                       <td><a href="{{route('site-setting-edit',$site_setting->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a> 
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