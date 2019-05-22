@extends('layouts.header')


@section('content')


<div class="container" id="content_area">


    <div class="row">
        <div class="col-md-3 my-2">
            <h6 class="ml-1">Categories</h6>
            <div class="list-group">
                @foreach($categories as $category)

                <a href="{{url('welcome/'.$category->id)}}"
                    class="list-group-item list-group-item-action">{{$category->name}}</a>

                @endforeach

            </div>
        </div>
        <div class="col-md-9 mt-4">
            <form class="form-inline my-2" method="POST" action="{{route('welcome.search')}}">
                @csrf

                <input class="form-control mr-sm-2 w-75" type="search" name="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>

            </form>
            <div class="card-group">
                {{--  <div class="row">  --}}
                @foreach($products as $product)

                <div class="col-md-4 mb-2">
                    <div class="card m-0 p-0">
                        <a href="{{url('productView/'.$product->id)}}">
                            <img src="{{ '/images/'.$product->images[0]->url }}" class="card-img-top" alt="..."
                                height="200">
                        </a>
                        <div class="m-0 p-2" style="background-color:#2f353a;">
                            <div class="m-0 pb-0 d-inline-block" style="color:white">{{ $product->name}}</div>
                            <div class="m-0 pb-0 float-right"><span
                                    class="badge badge-success p-2 ">{{ $product->price}}</span></div>
                        </div>
                    </div>
                </div>

                @endforeach



                {{--  </div>  --}}
            </div>
        </div>
    </div>

</div>
</div>
{{-- <script src="{{ asset('plugins/vue/vue.min.js') }}" ></script> --}}


@endsection
