@extends('admin.layout')
@section('content')
<div class="row">
<form action="/updateblog" method="post" enctype="multipart/form-data">
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

                <div class="form-group">
                <label for="formGroupExampleInput">Date</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['date']}}" name="date">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Writer Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['name']}}" name="name">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Blog Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['title']}}" name="title">
                </div>
                <div class="form-group">
               <label for="exampleFormControlFile1">Feature Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fimage">
                <img src="{{ asset('images/resource/'.$info->fimage) }}" alt="Image" width="100">
                 </div>
                 <div class="form-group">
                <label for="formGroupExampleInput">Paragraph one </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="one">{{$info['one']}}</textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Paragraph two </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="two">{{$info['two']}}</textarea>
                </div>
                <br>
                <div class="form-group">
               <label for="exampleFormControlFile1">Additional Image 1</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="image_one">
                <img src="{{ asset('images/resource/'.$info->image_one) }}" alt="Image" width="100">
                 </div>
                 <br>
                <div class="form-group">
               <label for="exampleFormControlFile1">Additional Image 2</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_two">
                <img src="{{ asset('images/resource/'.$info->image_two) }}" alt="Image" width="100">
                 </div>
                 <br>
                <div class="form-group">
                <label for="formGroupExampleInput">Sub Heading</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['heading']}}" name="heading">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Paragraph three </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="three">{{$info['three']}}</textarea>
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Quoted Text</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['quote']}}" name="quote">
                </div>
                <br>
                
                <div class="form-group">
                <label><strong>Catagory :</strong></label><br>
                <input type="text" class="form-control" id="formGroupExampleInput" name="catagory" value="{{$info['catagory']}}"> 
                </div>
                <br>
                <label for="formGroupExampleInput">Add at least one Tag</label>
                <br>
                <div class="form-group">
                <label for="formGroupExampleInput">Tag one</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['tag_one']}}" name="tag_one">
                </div>              
                <div class="form-group">
                <label for="formGroupExampleInput">Tag two</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['tag_two']}}" name="tag_two">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tag Three </label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['tag_three']}}" name="tag_three">
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput">Tag Four</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="{{$info['tag_four']}}" name="tag_four">
                </div>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
                <button class="btn btn-success btn-lg" type="submit" name="submit">Update</button>
                <a href="{{url('view_blog')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a>
               
            </div>
           

                
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