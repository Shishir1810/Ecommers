<x-backend.master>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4> New Brand Add</h4>
                <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8">
                        <x-utility.from.input name="brand" type="text" placeholder="Enter Brand Name"
                            :value="old('brand')" />
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

                        <div class="form-check">
                            <input name="status" class="form-check-input" type="checkbox" value="1"
                                id="isActiveInput" checked>
                            <label class="form-check-label" for="isActiveInput">
                                Active Status
                            </label>
                        </div>
                    </div>
                    <br>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-backend.master>
