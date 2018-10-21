@extends('layout')

@section('content')

    @if(isset(auth()->user()->id))
        <section style="min-height: 500px;">
            <div class="product">
                <div class="container">
                    <div class="row">
                        @if(isset($products) && count($products)>0 )
                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <form action="{{ route('order.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <img src="{{ asset('image/image/'.$product->image) }}"
                                             style="width: 100%;height: 200px;" alt="">
                                        <p>Rs. {{ $product->price }}</p>
                                        <h2>{{ $product->name }}</h2>
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-primary">Order</button>
                                    </form>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @else

        <div class = "main-wrapper">

            <div class="video-overlay" ></div>

            <video class = "video" autoplay muted loop id="myVideo">
                <source src="{{asset('Videos/indexV1.mp4')}}" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>

        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('image/slider/img4.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('image/slider/img3.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('image/slider/img5.jpg') }}" alt="Third slide">
                </div>
            </div>
        </div>
    @endif


@endsection