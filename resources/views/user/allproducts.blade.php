@include('user.menu')


<div class="page-heading about-heading header-text " style="background-image:none!important;">
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>All Products</h2>
          <form action="{{ url('search') }}" method="get" class="form-inline" style="float:right; padding:10px;">
         @csrf
            <input class="form-control" type="search" name="search" placeholder="search">

          <input class="btn btn-success" type="submit" value="Search">

          </form>

          </div>
        </div>
  @foreach($data as $product)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{ $product->title }}</h4></a>
              <h6>{{ $product->price }}</h6>
              <p>{{ $product->description }}</p>


<form action="{{ url('addcart' , $product->id) }}" method="POST">
  @csrf
  <input type="number" value="1" min="1" class="form-control" style="width: 100px;" name="quantity">
  <br>
  <input class="btn btn-primary" type="submit" value="Add Cart">

</form>

            </div>
          </div>
        </div>
        @endforeach


@if(method_exists($data, 'links'))
        <div class="d-flex justify-content-center mx-auto">

          {{ $data->links()  }}

        </div>
        @endif

      </div>
    </div>
  </div>



  @include('user.footer')
