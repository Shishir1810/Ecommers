<x-backend.master>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <h4>Product Image</h4>
                                @php
                                    $product['images'] = explode('|', $product->images);
                                @endphp
                                @foreach ($product->images as $images)
                                    <div class=text-justify> <img id="main-image" src="{{ asset('/product image/' . $images) }}"alt="Product"
                                            width="200" /> </div><br>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">

                                <div class="mt-2 mb-3">
                                    <a class="btn btn-outline-primary" href="{{ route('product.list') }}"
                                        role="button">Product List</a>
                                    <h5 class="text-uppercase">Brand: {{ $product->brand->brand }}</h5>
                                    <h6 class="text-uppercase">Product Name: {{ $product->name }}</h6>
                                    <h6 class="text-uppercase">Tag: {{ $product->tag->tag }}</h6>
                                    <h6 class="text-uppercase">Stock: {{ $product->quantity }}</h6>
                                    <h6 class="text-uppercase">Unit Price: {{ $product->price }} BDT</h6>

                                </div>
                                <p class="about">
                                <h5> Product Details</h5>{{ $product->details }}</p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Size :{{ $product->size->name }}</h6>
                                    <h6 class="text-uppercase">Color :{{ $product->color->color }}</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.master>
