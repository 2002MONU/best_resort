@extends('admin.layout.app')
@section('admintitle') Edit Site Setting @endsection
@section('maindashboard')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()">Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Site Setting</li>
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                </ol>
            </nav>
        </div>
        
        <div class="row">
            <script>
                
                var msg1 = '{{ Session::get('error') }}';
                var exist1 = '{{ Session::has('error') }}';
                if (exist1) {
                    alert(msg1);
                }
            </script>
            
            <div class="col-xl-12 box-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Footer & Contact</h4>
                        <form class="cmxform" method="post" enctype="multipart/form-data" action="{{ route('site-setting-post', $site->id) }}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $site->title }}">
                                            @if ($errors->has('title'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control ckeditor" name="description">{{ $site->description }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keywords">Keywords</label>
                                            <input type="text" class="form-control" name="keywords" value="{{ $site->keywords }}">
                                            @if ($errors->has('keywords'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('keywords') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keywords">About Banner</label>
                                            <input type="file" class="form-control" name="about_banner" >
                                            <span class="text-danger">(TYPE:PNG,JPG,JPEG, SIZE:1MB)</span> <br>
                                            <a href="{{asset('web_assets/dynamics/gallery/'.$site->about_banner)}}"> <img src="{{asset('web_assets/dynamics/gallery/'.$site->about_banner)}}" style="width:100px;height:100px;"></a>
                                            @if ($errors->has('about_banner'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('about_banner') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keywords">Contact Banner</label>
                                            <input type="file" class="form-control" name="contact_banner" >
                                            <span class="text-danger">(TYPE:PNG,JPG,JPEG, SIZE:1MB)</span> <br>
                                            <a href="{{asset('web_assets/dynamics/gallery/'.$site->contact_banner)}}"> <img src="{{asset('web_assets/dynamics/gallery/'.$site->contact_banner)}}" style="width:100px;height:100px;"></a>
                                            @if ($errors->has('gallery_banner'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('contact_banner') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keywords">Gallery  Banner</label>
                                            <input type="file" class="form-control" name="gallery_banner" >
                                             <span class="text-danger">(TYPE:PNG,JPG,JPEG, SIZE:1MB)</span> <br>
                                            <a href="{{asset('web_assets/dynamics/gallery/'.$site->gallery_banner)}}"> <img src="{{asset('web_assets/dynamics/gallery/'.$site->gallery_banner)}}" style="width:100px;height:100px;"></a>
                                            @if ($errors->has('gallery_banner'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('gallery_banner') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keywords">Rooms Banner</label>
                                            <input type="file" class="form-control" name="rooms_banner" >
                                             <span class="text-danger">(TYPE:PNG,JPG,JPEG, SIZE:1MB)</span> <br>
                                            <a href="{{asset('web_assets/dynamics/gallery/'.$site->rooms_banner)}}"> <img src="{{asset('web_assets/dynamics/gallery/'.$site->rooms_banner)}}" style="width:100px;height:100px;"></a>
                                            @if ($errors->has('rooms_banner'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('rooms_banner') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('.ckeditor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
