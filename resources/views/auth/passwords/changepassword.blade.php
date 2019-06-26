@extends('layouts.header')

@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-9 offset-3">
            <div class="col-md-4 offset-3">

                <p class="h3">Change Password</p>
            </div>
            <form class="form-horizontal" method="post" action="{{route('update_user_password')}}">
                @csrf

                @if(count($errors->all())>0)
                <div class="alert alert-success">
                    @foreach ($errors->all() as $error)
                    <ul>
                        {{ $error}}
                    </ul>
                    @endforeach
                </div>
                @endif
                <div class="form-group row mt-5">
                        <label for=" password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                                <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" required>
                        </div>

                    </div>


                    <div class="form-group row mt-5">
                            <label for=" password_confirmation" class="col-sm-2 col-form-label">Password Confirmation</label>
                            <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Password Confirmation">
                            </div>
    
                        </div>

                

                        <div class="form-group row">
                                <div class="col-md-4 offset-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
            
                                </div>
                            </div>

                </div>
        </div>
    </div>

    </form>
</div>
</div>
</div>




@endsection
