@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('create_homesection7')}}" method="post" enctype="multipart/form-data">
@csrf
    @if($errors->any())
    <div class = "alert alert-danger">
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
    </div>
    @endif
    
    @if(session()->has('message'))
    <div class="alert alert-success">
    {{ session()->get('message') }}
    </div>
    @endif
<div class="x_panel">
    <div class="x_title">
      <h2 class="sub_title">Page Content</h2>
        <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
        </ul>
        
        <div class="clearfix"></div>
    </div>
        
        <div class="x_content">
                <div class="form-group has-feedback" style="position:relative;">
                
                <div class="form-group">
               <label for="exampleFormControlFile1">Main Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                 </div>
                 <div class="form-group">
                <label for="exampleFormControlTextarea1">Blog Title</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="title"></textarea>
               </div>
               <div class="form-group">
               <label for="exampleFormControlFile1">Author Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="author_image">
                 </div>
               <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Post Time</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="time">
                </div>

                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
            

        
                
        </div>
          
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush