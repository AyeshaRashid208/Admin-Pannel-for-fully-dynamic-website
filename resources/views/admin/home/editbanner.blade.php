@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_banner')}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
    @if($errors->any())
    <div class = "alert alert-danger">
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
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
                <div class="card">
                <div class="card-header">
              
                <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$users->title}}" name="title">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
               
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="description">{{$users->description}}</textarea>
               </div>
               <div class="form-group">
               <label for="exampleFormControlFile1">Image</label>
                <!-- <img src="{{ asset('images/resource/'.$users->image) }}" alt="Banner Image" name="image" width="100"> -->
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                <img src="{{ asset('images/resource/'.$users->image) }}" alt="Banner Image" width="100">

                 </div>
                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
                <a href="{{url('view_banner')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
               
               


</div>
</div>
            </div>
                

        
                
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush