@extends('admin.layouts.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif       
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-md-7" style="padding-bottom:50px">
                        <form action="{{ route('users.store')}}" method="POST">
                          	@csrf
                            <div class="form-group">
                                <label>Name<span style="color: red">*</span></label>
                                <input class="form-control" required=""  name="name" value="{{ old('name') }}"
                                    placeholder="Please enter user name" />
                            </div>
                            <div class="form-group">
                                <label>Tel<span style="color: red">*</span></label>
                                <input class="form-control" required=""  name="tel" value="{{ old('tel') }}"
                                    placeholder="Please enter user tel" />
                            </div>
                            <div class="form-group">
                                <label>Email<span style="color: red">*</span></label>
                                <input class="form-control" type="email" required=""  name="email" 
                                    value="{{ old('email') }}"  placeholder="Please enter user email" />
                            </div>
                            <div class="form-group">
                                <label>Password<span style="color: red">*</span></label>
                                <input class="form-control" type="password" required=""  name="password" 
                                    value="{{ old('password') }}"  placeholder="Please enter user password" />
                            </div>
                            <div class="form-group">
                                <label>Type<span style="color: red">*</span></label>
                                <select class="form-control" name="user_type">
                                	<option value="0">Customer</option>
                                	<option value="1">Admin</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop