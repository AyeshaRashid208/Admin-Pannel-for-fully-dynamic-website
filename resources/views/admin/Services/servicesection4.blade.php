@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('create_monthlyplan')}}" method="post" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Plan Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Discription</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="price">
                </div>
                
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 1 </label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="one">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 2</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 3</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="three">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Feature 4</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="four">
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