@extends('admin.layout')
@section('content')
<div class="row">
<form action="/updatecontactdetails" method="post" enctype="multipart/form-data">
<input type="hidden"  value="{{$info['id']}}" name="id">
@csrf

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
                <label for="formGroupExampleInput">Address</label>
                <div class="card-header">
                <div class="form-group">
                <label for="formGroupExampleInput">Street</label>
                <input type="text" class="form-control " id="formGroupExampleInput" value="{{$info['street']}}" name="street">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">State</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['state']}}" name="state">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Phone No</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['phone']}}" name="phone">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['email']}}" name="email">
                </div>
               
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
                <a href="{{url('view_homesection5')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
               
               


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