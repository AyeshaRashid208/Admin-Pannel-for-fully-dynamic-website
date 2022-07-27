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
        <a href="{{ url('create_portsection2') }}" class="btn btn-primary float-end">Add New</a>
                 

                <div class="table-bordered">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Catagory</th>
                            <th scope="col">Client</th>
                            <th scope="col">Date</th>
                            <th scope="col">Website</th>
                            <th scope="col">Image</th> 
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($info as $info)
                        <tr>
                           
                            <td>{{$info['id']}}</td>
                            <td>{{$info->title}}</td>
                            <td>{{$info->description}}</td>
                            <td>{{$info->catagory}}</td>
                            <td>{{$info->client}}</td>
                            <td>{{$info->date}}</td>
                            <td>{{$info->website}}</td>
                            
                            <td>
                            <img src="{{ asset('images/gallery/'.$info->image) }}"  width="50px" alt="Image">
                            
                            </td>
                            <td> <a href={{"edit_portsection2/".$info['id']}} class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                            <a href="del_portsection2/{{ $info->id }}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Delete</a>
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