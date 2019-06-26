@extends ('layouts.header')

@section ('content')
<style>
    

    .text-default {
        color: #2f353a;
    }

</style>

<div class="container py-3">
    <div class="row">
        <div class="col-md-4 ">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($product->images as $image)

                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                            class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        @foreach($product->images as $key=> $image)

                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ '/images/'.$product->images[$key]->url }}" class="card-img-top "
                                alt="some image" height="200">




                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-md-8 ">
            <h4 class="text-default">Product Name</h4>
            
            <p>
                {{$product->name}}
            </p>

            <!-- product description -->
            <h4 class="text-default">Product Description</h4>
            <p>
                {{$product->description}}
            </p>
            <!-- sellers contact information -->
            <h4 class="text">Seller Contact Information:</h4>
            <p>
                <h5 class="text-default">Phone Number:</h5>
                <p>
                    {{ Auth::user()->phone_number}}
                </p>
                <h5 class="text-default">Name:</h5>
                <p>
                    {{ Auth::user()->name}}
                </p>
                <h5 class="text-default">Location:</h5>
                <p>
                    {{ $product->location}}
                </p>
            </p>
            <div>
            <a href="{{url('home')}}">
                <i class="fa fa-2x fa-commenting" aria-hidden="true"></i>
                chat

            </i>
        </a>
            </div>
        </div>
    </div>
</div>




@endsection
