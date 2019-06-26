@extends('layouts.header')


@section('content')


<div class="container" id="content_area">


    <div class="row" class="list-group-item list-group-item-action active">
       
        <div class="col-md-3 my-2">
            <ul>

            </ul>
            <div class="list-group">
                <ul class = "categories-menu" style="list-style-type:none">
                    <li class="list-group-item list-group-item-dark">Categories</li>
                    @foreach($categories as $category)

                    <a href="{{url('welcome/'.$category->id)}}" 
                        class="list-group-item list-group-item-action "><li>{{$category->name}}</li> </a>

                       
                    @endforeach

            </div>
            </ul>
        </div>

        <script>
        $function(){
            $('.categories-menu > li').click(function(){
                $('.categories-menu > li').removeClass('active');
                $(this).addClass('active');
            });
        };
        </script>


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


