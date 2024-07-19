@extends('admin.layout.app')
@section('admintitle') Enquiry Details @endsection
@section('maindashboard')
<!-- Main Content Area -->
<div class="main-content">
   
    <div class="data-table-area">
       <div class="container-fluid">
           <div class="d-inline-block align-items-center">
               <nav>
                   <ol class="breadcrumb">
                       {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                       <li class="breadcrumb-item active" aria-current="page">Enquiry Details</li>
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
                               <h4 class="card-title mb-2">Enquiry Details</h4>
                           </div>
                           <div class="table-responsive order-stats">
                               <table class="table"> 
                                <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone Number</th>
                                       <th>Subject</th>
                                       <th>Message </th>
                                       
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($enqueries as $equiry)
                                   <tr>
                                       <td>{{$equiry->id}}</td>
                                       <td>{{$equiry->user_name}}</td>
                                       <td>{{$equiry->email}}</td>
                                       <td>{{$equiry->phone_no}}</td>
                                       <td>{{$equiry->subject}}</td>
                                        <td>{{$equiry->message}}</td>
                                        <td><a href="{{route('enquiryDelete',$equiry->id)}}"   class="btn btn-sm btn-danger mtop" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></td>
                                   </tr>
                                   @endforeach
                                </tbody> 
                           </table>
                          
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