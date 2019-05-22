@extends('layouts.header')
<style>

</style>

@section('content')
<link href="{{asset('plugins/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" />



<?php
$user=Auth::user();

?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                                <img   alt="..."   src="{{asset('images/user/'. $user->avatar)}}" class="img img-thumbnail">
                        </div>

                        <h3 class="profile-username text-center">{{$user->name}}</h3>

                        <p class="text-muted text-center">{{$user->email}}</p>
                        <p class="text-muted text-center">{{$user->phone_number}}</p>



                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            
                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#picture_tab" data-toggle="tab">Picture</a></li>

                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                              
                            <div class="tab-pane active" id="settings">
                                <form class="form-horizontal" method="POST" action="{{route('user.update_user_data')}}">

                                   @csrf 
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" name="username" value="{{$user->name}}"  placeholder="Name">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" name="email"  value="{{$user->email}}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName2" class="col-sm-2 control-label">Phone Number</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2" name="phone_number" value="{{$user->phone_number}}"  placeholder="Phone Number">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success" >Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="tab-pane " id="picture_tab">

                                <div class="box-body">
                                    @if(count($errors->all())>0)
                                        <div class="alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </div>

                                    @endif

                                    <form role="form" method="post" action="{{route('user.upload_avatar')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" >
                                                    <img   alt="..."   src="{{asset('images/user/'. $user->avatar)}}" class="img img-responsive">

                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"  ></div>
                                                <div id="image_btn">
                                                                        <span class="btn btn-primary btn-file">
                                                                            <span class="fileinput-new">Select image</span>
                                                                            <span class="fileinput-exists">Change</span>
                                                                            <input type="file"  class="img img-responsive" name="img" ></span>
                                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    <input type="submit"  class="btn btn-success fileinput-exists">

                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>


                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>

       


                </div>

               
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->



</form>
</div>

{{-- @if(Session::has('msg'))
{{ Session::get('msg') }}

@endif --}}
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="{{asset('plugins/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>
<script src="{{asset('plugins/holder-master/holder.js')}}" type="text/javascript"></script>

@endsection
