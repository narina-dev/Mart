@extends('layouts.header')

@section('content')



<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-9 offset-3">
            <div class="col-md-4 offset-3">

                <p class="h3">Upload Products</p>

            </div>
            <form name="form" class="" action="{{ Route('product.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group row mt-5">
                    <label for="product Name" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="product Price" class="col-sm-2 col-form-label">Product Price</label>
                    <div class="input-group col-sm-6">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ksh</div>
                        </div>
                        <input type="number" id="price"
                            class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                            value="{{ old('price') }}" required autofocus>
                    </div>
                    @if ($errors->has('price'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group row">
                        <label for="product Location" class="col-sm-2 col-form-label">Product Location</label>
                        <div class="col-sm-6">
                            <input type="text" id="name" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                name="location" value="{{ old('name') }}" required autofocus>
                        </div>
                        @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                        @endif
                    </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label"> Category</label>
                    <div class="col-sm-6">
                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('category_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                    @endif
                </div>



                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label"> Description</label>
                    <div class="col-sm-6">
                        <textarea name="description"
                            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                            name="description" value="{{ old('description') }}" required autofocus id="description"
                            cols="30" rows="5"></textarea>
                    </div>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>

                    <div class="col-sm-6">
                        <input type="file" id="image" name="img[]" class="form-control-file" multiple>
                    </div>

                    @if ($errors->has('img'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('img') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-md-4 offset-4">
                        <button class="btn btn-primary">Upload</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</form>

@if(Session::has('msg'))
{{ Session::get('msg') }}

@endif
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
@endsection
