@extends('admin.layout.app')
@section('admintitle') Contact & Footer Details @endsection
@section('maindashboard')
<!-- Main Content Area -->
<div class="main-content">
   
    <div class="data-table-area">
       <div class="container-fluid">
           <div class="d-inline-block align-items-center">
               <nav>
                   <ol class="breadcrumb">
                       {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                       <li class="breadcrumb-item active" aria-current="page">Footer & Contact Details</li>
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
                               <h4 class="card-title mb-2">Footer & Contact Details</h4>
                                {{-- <a href="{{route('admin.add-home-banner')}}" class="btn btn-primary  btn-sm">Add Banner</a> --}}
                           </div>
                           <div class="table-responsive order-stats">
                               <table class="table"> 
                                <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Logo</th>
                                       <th>Favicon</th>
                                       <th>Footer About</th>
                                       <th>Address</th>
                                       <th>Contact </th>
                                       <th>Alternative Contact</th>
                                       <th>Email</th>
<!--                                       <th>Alternative Email</th>-->
                                       <th>Wattapps Number</th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               
                                   <tr>
                                       <td>{{$contact->id}}</td>
                                       <td><a href="{{asset('web_assets/dynamics/slider/'.$contact->logo)}}"><img src="{{asset('web_assets/dynamics/slider/'.$contact->logo)}}" style="width:80px;height:80px;"></a></td>
                                       <td><a href="{{asset('web_assets/dynamics/slider/'.$contact->favicon)}}"><img src="{{asset('web_assets/dynamics/slider/'.$contact->favicon)}}" style="width:80px;height:80px;"></a></td>
                                       <td></td>
                                       <td>{!! $contact->address !!}</td>
                                        <td>{{$contact->contact}} </td>
                                        <td>{{$contact->alterno}}</td>
                                       <td>
                                           {{$contact->email}}  <br>
                                           {{$contact->alteremail}}
                                       </td>
<!--                                       <td>{{$contact->alteremail}}</td>-->
                                       <td>{{$contact->wattsno}}</td>
                                       <td>{{$contact->updated_at}}</td>
                                       <td><a href="{{route('contact.update-contact',$contact->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            {{-- <a href="{{route('admin.slider-delete',$banner->id)}}" class="btn btn-sm btn-danger mtop" onclick="return confirm('Are you sure?')">Delete</a> --}}
                                       </td>
                                   </tr>
                                  h
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