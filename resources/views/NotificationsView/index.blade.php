@extends('cgpaTest.layout')

@section('title','Who send me Mail - Notifications Calculator')

@section('custom_style')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div class="container mt-4 shadow-lg p-3 mb-5 bg-white rounded">
     
    <legend class="bg-primary text-light">
        <i class="fas fa-fw fa-briefcase"></i>File uploadding
    </legend>
    <div class="card-body border border-primary">
<fieldset>
            {{-- ............ Image .................. --}}
    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="var_id">Upload an Image :
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-4">
                        <input class="form-control" type="file" name="image_name" id="image_id" />
                    </div>
                    <div class="col-md-5" align="center">
                        Preview
                    </div>
                </div>
        </fieldset>
    </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-outline-warning">Upload
                    </button>
                </div>
            </div>
        </div>
    </form>
    </div>
</fieldset>
<h1 align="center"> Notifications System</h1>
<div class="container mt-4 shadow-lg p-3 mb-5 bg-white rounded">
	 
    <legend class="bg-primary text-light">
        <i class="fas fa-fw fa-briefcase"></i>Notification Lists
    </legend>
   
    <div class="card-body border border-primary">
        <fieldset>
            <form action="{{ url('/mail_me') }}" method="POST" >
                @csrf
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="var_id">Message Here :
                        <span class="text-danger font-weight-bold">*</span> </label>
                    <div class="col-md-4">
                        <input class="form-control" type="email" name="email_name" id="msg_id" required/>
                        @error('email_name')
                            <div class="text-danger text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="col-md-5" align="center">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="var_id">
                        <span class="text-danger font-weight-bold"></span> </label>
                    <div class="col-md-4" style="height: 150px;">
                        <button type="submit" class="btn btn-info">Email Me</button>
                    </div>
                    
                </div>
            </form>
        </fieldset>
    </div>
    <div class="card-footer">
    </div>
</div>
  
@endsection

@section('custom_script')

{{-- ................................... DATA table CDN ...................................... --}}
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>