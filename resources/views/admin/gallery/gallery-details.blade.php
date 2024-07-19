@extends('admin.layout.app')
@section('admintitle') Gallery Details @endsection
@section('maindashboard')
<!-- Main Content Area -->
<div class="main-content">
   
    <div class="data-table-area">
       <div class="container-fluid">
           <div class="d-inline-block align-items-center">
               <nav>
                   <ol class="breadcrumb">
                       {{-- <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li> --}}
                       <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                       <li class="breadcrumb-item " aria-current="page"><a href="{{url('admin/dashboard')}}" >Dashboard</a></li>
                   </ol>
               </nav>
           </div>
           <div class="row">
               <script>
                //    var msg = '{{Session::get('success')}}';
                //    var exist = '{{Session::has('success')}}';
                //    if(exist){
                //      alert(msg);
                //    }
                   var msg1 = '{{Session::get('success')}}';
                   var exist1 = '{{Session::has('success')}}';
                   if(exist1){
                     alert(msg1);
                   }
                 </script>
                 
               <div class="col-12 box-margin">
                   <div class="card">
                       <div class="card-body">
                           <div class="d-flex justify-content-between">
                               <h4 class="card-title mb-2">Gallery Details</h4>
                                <a href="{{route('gallery.add-gallery')}}" class="btn btn-primary  btn-sm">Add Banner</a>
                           </div>
                           <div class="table-responsive order-stats">
                               <table class="table"> 
                                <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Gallery Image</th>
                                       <th>Title (When image didn't show)</th>
                                       <th>Status</th>
                                       <th>Created </th>
                                       <th>Update</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                                <tbody>
                                   @foreach($galleries as $gallery)
                                   <tr>
                                       <td>{{$gallery->id}}</td>
                                       <td><a href="{{asset('web_assets/dynamics/gallery/'.$gallery->image)}}"><img src="{{asset('web_assets/dynamics/gallery/'.$gallery->image)}}" style="width:80px;height:80px;"></a></td>
                                       <td>{{$gallery->title}}</td>
                                        <td>@if ($gallery->status == 1)
                                           <span class="badge badge-success">active</span> 
                                            @else
                                             <span class="badge badge-danger">Inactive</span>
                                            @endif</td>
                                       <td>{{$gallery->created_at}}</td>
                                       <td>{{$gallery->updated_at}}</td>
                                       <td><a href="{{route('gallery.update-gallery',$gallery->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('gallery.gallery-delete',$gallery->id)}}" class="btn btn-sm btn-danger mtop" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                       </td>
                                   </tr>
                                   @endforeach
                                </tbody>
                           </table>
                           {!! $galleries->appends(['sort' => 'department'])->links() !!}
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