@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_contactsection2')}}" method="post" enctype="multipart/form-data">
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
                  
                  
                
                <div class="form-group">
                <label for="formGroupExampleInput">Message</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="message">
                </div>
                <label for="exampleFormControlTextarea1">Address</label>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Street</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="street">
               </div>
               <div class="form-group">
                <label for="exampleFormControlTextarea1">Country</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="country">
               </div>
               <div class="form-group">
                <label for="exampleFormControlTextarea1">Phone</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="phone">
               </div>
               <div class="form-group">
                <label for="exampleFormControlTextarea1">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="email">
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