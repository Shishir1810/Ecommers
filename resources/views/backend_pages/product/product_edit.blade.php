<x-backend.master>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h4> Product Update</h4>
                <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row justify-content-between">
                        <div class="form-group col-md-6">

                            <label for="name">Product Name</label>
                            <input name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror"value="{{ old('name', $product->name) }}"
                                id="name" placeholder="Enter Product name">
                            @error('name')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                            <label for="price">Product price</label>
                            <input name="price" type="number"
                                class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price', $product->price) }}" id="price"
                                placeholder="Enter Product price">

                            @error('price')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror

                            <label for="quantity">Product stock</label>
                            <input name="quantity" type="number"
                                class="form-control @error('quantity') is-invalid @enderror""
                                value="{{ old('quantity', $product->quantity) }}" id="quantity"
                                placeholder="Enter Product stock">
                            @error('quantity')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror


                            <label for="details">Product details</label>
                            <input name="details" type="text"
                                class="form-control @error('details') is-invalid @enderror"
                                value="{{ old('details', $product->details) }}" id="details"
                                placeholder="Enter Product details">
                            @error('details')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="form-label" for="inputImage">Select Images:</label>
                                <input type="file" name="images[]" id="inputImage" required multiple
                                    class="form-control @error('images') is-invalid @enderror">

                                @error('images')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>

                            <button type="reset" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category_id"id="category"value="{{ old('category_id') }}">
                                    @foreach ($categories as $cate)
                                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subcategory">Sub Category</label>
                                <select class="form-control"
                                    name="sub_category_id"id="subcategory"value="{{ old('sub_category_id') }}">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select class="form-control" name="brand_id"
                                    id="brand"value="{{ old('brand_id') }}">

                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Tag</label>
                                <select class="form-control" name="tag_id"
                                    id="tag"value="{{ old('tag_id') }}">

                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control" name="size_id"
                                    id="size"value="{{ old('size_id') }}">

                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <select class="form-control" name="color_id"
                                    id="color"value="{{ old('color_id') }}">

                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->color }}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


</x-backend.master>
