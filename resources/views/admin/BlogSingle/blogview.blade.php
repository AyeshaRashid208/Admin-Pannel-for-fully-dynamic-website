@extends('admin.layout')
@section('content')
<div class="row">
<form action="{{url('display_banner')}}" method="post" enctype="multipart/form-data">
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
        <a href="{{ url('create_blog') }}" class="btn btn-primary float-end">Add New</a>
                 

                <div class="table-bordered">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Writer Name</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Feature Image</th>
                            <th scope="col">Catagories</th>

                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($info as $info)
                        <tr>
                           
                            <td>{{$info['id']}}</td>
                            <td>{{$info->date}}</td>
                            <td>{{$info->name}}</td>
                            <td>{{$info->title}}</td>
                            <td>
                            <img src="{{ asset('images/resource/'.$info->fimage) }}"  width="100px" alt="Image">
                            
                            </td>
                             <td>{{$info->catagory}}</td>
                            
                            <td> <a href={{"edit_blog/".$info['id']}} class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                            <a href="del_blog/{{ $info->id }}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Delete</a>
                           </td>
                           

                        </tr>
                        @endforeach
                       
                    </tbody>
                    </table>

                    
                </div>
                <!-- <button type="button" class="btn btn-block btn-success btn-sm"><i class="fa fa-save"></i><span> &nbsp; SAVE</span></button> -->
        
                
        </div>
        
        
    
</div>

</form>
</div>


@endsection
@push('footer-scripts')
@endpush