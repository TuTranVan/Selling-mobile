@extends('admin.layouts.master')
@section('content')            
<div class="container">
   <div class="panel panel-default">
        <div class="panel-heading">List Categories</div>
        <div class="panel-body">
            <div>            
                @if (session('success'))
                    <div class="alert" style="background:#dff0d8; color:#4f844f" role="alert">
                        {{ session('success') }}
                    </div>
                @endif     
            </div>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="col-md-7">
                        <button class="btn btn-info btn-md" type="button">
                            <a href="{{route('categories.list')}}" style="color:white; font-weight: bold;">LIST ALL</a>                                
                        </button> 
                    </div>
                    <div class="col-md-5">
                        <form action="{{route('categories.search')}}" method="GET">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    @csrf
                                    <input type="text" class="form-control input-md" placeholder="Search..." name="keyword" />
                                    <span class="input-group-btn">
                                    <button class="btn btn-info btn-md" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                    </span>                                                                
                                </div>
                            </div>
                        <form> 
                    </div>
                </div>
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                   <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td class="center">
                                    <a href="{{ route('categories.destroy',$category)}}">
                                        <i class="fa fa-trash-o  fa-fw" style="color:black"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('categories.edit',$category)}}">
                                        <i class="fa fa-pencil fa-fw" style="color:black"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach                  
                    </tbody>      
                </table>
                {{ $categories->links()}}
            </div>
        </div>    
   </div>
</div>          
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

});
</script>
@stop
