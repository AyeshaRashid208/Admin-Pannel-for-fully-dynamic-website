@extends('admin.layout')
@section('content')
<div class="row">
<form action="/updateportsection2" method="post" enctype="multipart/form-data">
@csrf
<input type="hidden"  value="{{$info['id']}}" name="id">

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
                <div class="card">
                <div class="card-header">
                <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['title']}}" name="title">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Discription</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description">{{$info['description']}}</textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Catagory</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['catagory']}}" name="catagory">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Client Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['client']}}" name="client">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Date</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['date']}}" name="date">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Website</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['website']}}" name="website">
                </div>
               
                <div class="form-group">
               <label for="exampleFormControlFile1">Image</label>
                
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                <img src="{{ asset('images/gallery/'.$info->image) }}" alt="Image" width="100">

                 </div>
                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
                <a href="{{url('view_portsection2')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
               
               


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