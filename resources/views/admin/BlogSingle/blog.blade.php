@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('create_blog')}}" method="post" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Date</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="date">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Writer Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Blog Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title">
                </div>
                <div class="form-group">
               <label for="exampleFormControlFile1">Feature Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fimage">
                 </div>
                 <div class="form-group">
                <label for="formGroupExampleInput">Paragraph one </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="one"></textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Paragraph two </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="two"></textarea>
                </div>
                <br>
                <div class="form-group">
               <label for="exampleFormControlFile1">Additional Image 1</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_one">
                 </div>
                 <br>
                <div class="form-group">
               <label for="exampleFormControlFile1">Additional Image 2</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_two">
                 </div>
                 <br>
                <div class="form-group">
                <label for="formGroupExampleInput">Sub Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Paragraph three </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="three"></textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Quoted Text</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="quote">
                </div>
                <br>
                
                <div class="form-group">
                <label><strong>Catagory :</strong></label><br>
                <input type="text" class="form-control" id="formGroupExampleInput" name="catagory" > 
                </div>
                <label for="formGroupExampleInput">Add at least one Tag</label>
                <br>
                <div class="form-group">
                <label for="formGroupExampleInput">Tag one</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tag_one">
                </div>              
                <div class="form-group">
                <label for="formGroupExampleInput">Tag two</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tag_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tag Three </label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tag_three">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tag Four</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="tag_four">
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