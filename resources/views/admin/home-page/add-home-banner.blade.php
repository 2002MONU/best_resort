@extends('admin.layout.app')
@section('admintitle') Add Slider @endsection
@section('maindashboard')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
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
<div class="col-xl-12 box-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Home Slider</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('admin.add-home-banner-post')}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Slider Image</label>
                                <input type="file"  class="form-control file-input" name="image"  id="fileInput1">
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-2MB)</span>
                                <span id="message1" class="text-danger"></span>
                                @if ($errors->has('image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Title(When image didn't show)</label>
                                <input type="text"  class="form-control" name="title"  id="fileInput">
                                <span id="message" class="text-danger"></span>
                                @if ($errors->has('title'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('title') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                 <select name="status" id="" class="form-control">
                                    <option  selected>Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('status') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                   <button class="btn btn-primary" type="submit" >Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection