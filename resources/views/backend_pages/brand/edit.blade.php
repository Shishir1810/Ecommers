<x-backend.master>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4> New Brand Add</h4>
                <form method="POST" action="{{ route('brands.update', ['brand' => $brand->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="subcategory">Sub Category</label>
                            <select class="form-control"
                                name="sub_category_id"id="subcategory"value="{{ old('sub_category_id') }}">
                                @foreach ($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <label for="brand">Brand Name</label>
                        <input name="brand" type="text"
                            class="form-control @error('brand') is-invalid @enderror"value="{{ old('brand', $brand->brand) }}"
                            id="brand">
                        @error('name')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror

                        <br>

                        <div class="form-check">
                            <input name="status" class="form-check-input" type="checkbox" value="1"
                                id="isActiveInput"{{ $brand->status ? 'checked' : '' }}>
                            <label class="form-check-label" for="isActiveInput">
                                Active Status
                            </label>
                        </div>
                    </div>
                    <br>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

</x-backend.master>
