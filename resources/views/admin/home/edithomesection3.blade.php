@extends('admin.layout')
@section('content')
<div class="row">
<form action="/updatehomefeatures" method="post" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Tab Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['name']}}" name="name">
                </div>
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['description']}}" name="description">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Detail</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="detail">{{$info['detail']}}</textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 1 Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['title_one']}}" name="title_one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 1 description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="desc_one">{{$info['desc_one']}}</textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 2 Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['title_two']}}" name="title_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 2 description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="desc_two">{{$info['desc_two']}}</textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 3 Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['title_thr']}}" name="title_thr">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 3 description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="desc_thr">{{$info['desc_thr']}}</textarea>
                </div>
                <div class="form-group">
               <label for="exampleFormControlFile1">Image</label>
                
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                <img src="{{ asset('images/resource/'.$info->image) }}" alt="Image" width="100">

                 </div>
                <br>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
                <a href="{{url('view_homefeatures')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
               
               

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