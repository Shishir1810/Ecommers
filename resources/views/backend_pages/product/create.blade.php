<x-backend.master>
    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4> New Product Add</h4>
                <form method="POST" action="{{ route('product.store') }}"enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between">
                        <div class="form-group col-md-6">
                            <label for="name">Product Name</label>
                            <input name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror"value="{{ old('price') }}"
                                id="name" placeholder="Enter Product name">
                            @error('name')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror

                            <label for="price">Product price</label>
                            <input name="price" type="number"
                                class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                                id="price" placeholder="Enter Product price">
                            @error('price')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror

                            <label for="quantity">Product stock</label>
                            <input name="quantity" type="number"
                                class="form-control @error('quantity') is-invalid @enderror""
                                value="{{ old('price') }}" id="quantity" placeholder="Enter Product stock">
                            @error('quantity')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror

                            <x-utility.from.textarea name="details" :value="old('details')" />

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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category_id" id="category">
                                    <option>select one </option>

                                    @foreach ($categories as $cate)
                                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subcategory">Sub Category</label>
                                <select class="form-control" name="sub_category_id" id="subcategory">
                                    <option>select one</option>
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <select class="form-control" name="brand_id" id="brand">
                                    <option>select one</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tag">Tag</label>
                                <select class="form-control" name="tag_id" id="tag">
                                    <option>select one</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control" name="size_id" id="size">
                                    <option>select one</option>
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <select class="form-control" name="color_id" id="color">
                                    <option>select one</option>
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
