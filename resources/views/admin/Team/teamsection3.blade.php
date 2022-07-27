@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_teamsection3')}}" method="post" enctype="multipart/form-data">
@csrf
<!-- {{ csrf_field() }} -->
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
                <div class="form-group">
                <label for="formGroupExampleInput">Message</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="message">
                </div> 
                <div class="form-group">
                <label for="formGroupExampleInput">Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="heading">
                </div> 
                
                <div class="form-group">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="description">
                </div>

                 
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