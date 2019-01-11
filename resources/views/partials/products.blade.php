@section('css')
  <link rel="stylesheet" href="{{ URL::to('css/product.css') }}">
@endsection
@section('content')
<div class="section">
        <div class="container">
    <h1> {{ $title }}</h1>
    <hr>


        <div class="row">

        @foreach($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href= {{ route('product.show', ['id' => $product->id]) }}>
                            <img class="pic-1" src="{{ asset('storage/'.$product->images[0]) }}" >

                            <img class="pic-2" src="{{ asset('storage/'.$product->images[1]) }}" >

                        </a>
                        <ul class="social">
                            <li><a href={{ route('product.addToCart', ['id' => $product->id]) }} data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href={{ route('product.show', ['id' => $product->id]) }}>{{ $product->name }}</a></h3>
                        <div class="price">
                            ${{ $product->price }}
                        </div>
                        <a class="add-to-cart" href={{ route('product.addToCart', ['id' => $product->id]) }} role="button">+ Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
            </div>
        </div>
    </div>
</div>

@endsection