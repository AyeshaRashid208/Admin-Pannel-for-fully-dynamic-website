@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('add_aboutsection3')}}" method="post" enctype="multipart/form-data">
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
                <label for="exampleFormControlTextarea1">Skill 1 </label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="5" col ="3"name="skill_one">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Skill 1 Percentage</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="5" col ="3"name="skill_one">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Skill 2 </label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="5" col ="3"name="skill_two">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Skill 1 </label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="5" col ="3"name="skill_one">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Skill 1 </label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="5" col ="3"name="skill_three">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Skill 1 </label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="5" col ="3"name="skill_one">
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