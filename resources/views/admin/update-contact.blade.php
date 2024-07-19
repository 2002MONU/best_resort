@extends('admin.layout.app')
@section('admintitle') Update Contact  @endsection
@section('maindashboard')
<div class="main-content">
    <div class="container-fluid">
        <div class="d-inline-block align-items-center">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:history.back()" >Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Footer & Contact Details</li>
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
            <h4 class="card-title">Update Footer & Contact</h4>
            <form class="cmxform"  method="post" enctype="multipart/form-data" action="{{route('contact.update-contact-post',$contact->id)}}">
                @csrf
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Logo</label>
                                <input type="file"  class="form-control file-input" name="logo"  id="fileInput1">
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-2MB)</span> <br>
                                <a href="{{asset('web_assets/dynamics/slider/'.$contact->logo)}}"><img src="{{asset('web_assets/dynamics/slider/'.$contact->logo)}}" style="width:100px;height:50px;"></a>
                                <span id="message1" class="text-danger"></span>
                                @if ($errors->has('logo'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('logo') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Favicon</label>
                                <input type="file"  class="form-control file-input" name="favicon"  id="fileInput2">
                                <span class="text-danger">(NOTE-PNG,JPG,JPEG,Size-2MB)</span> <br>
                                <a href="{{asset('web_assets/dynamics/slider/'.$contact->favicon)}}"><img src="{{asset('web_assets/dynamics/slider/'.$contact->favicon)}}" style="width:50px;height:50px;"></a>
                                <span id="message2" class="text-danger"></span>
                                @if ($errors->has('favicon'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('favicon') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Footer About</label>
                                <textarea type="text"  class="form-control" name="footerabout" cols="12" rows="4">{{$contact->footerabout}}</textarea>
                                 @if ($errors->has('footerabout'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('footerabout') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Address</label>
                                <textarea type="text"  class="form-control ckeditor" name="address"  >{{$contact->address}}</textarea>
                                
                                @if ($errors->has('address'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('address') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Contact (With Country Code)</label>
                                <input type="text"  class="form-control" name="contact"  value="{{$contact->contact}}">
                                
                                @if ($errors->has('contact'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('contact') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Alternative Contact (With Country Code)</label>
                                <input type="text"  class="form-control" name="alterno" value="{{$contact->alterno}}">
                                
                                @if ($errors->has('alterno'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('alterno') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Email</label>
                                <input type="email"  class="form-control" name="email" value="{{$contact->email}}">
                                
                                @if ($errors->has('email'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('email') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Alternative Email(Sidebar Email)</label>
                                <input type="email"  class="form-control" name="alteremail" value="{{$contact->alteremail}}">
                                
                                @if ($errors->has('alteremail'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('alteremail') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Whatsapp (with Country code)</label>
                                <input type="text"  class="form-control" name="wattsno" value="{{$contact->wattsno}}">
                                 @if ($errors->has('wattsno'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('wattsno') }}.</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Maps Location Link</label>
                                <input type="text"  class="form-control" name="maplocation" value="{{$contact->maplocation}}">
                                 @if ($errors->has('maplocation'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('maplocation') }}.</strong>
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
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection