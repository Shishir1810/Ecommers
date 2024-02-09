<x-backend.master>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4>Sub Category Update</h4>


                <form method="POST" action="{{ route('sub_categories.update', ['sub_category'=> $subCategory->id]) }}"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="col-md-8">
                        <div class="form-group">

                            <label for="category">Category</label>

                            <select class="form-control" name="category_id" id="category" value="{{old('category_id')}}">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <x-utility.from.input name="name" type="text" :value="old('name', $subCategory->name)" />
                        <x-utility.from.textarea name="details" :value="old('details', $subCategory->details)" />
                    </div>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="checkbox" value="1"
                            id="isActiveInput"{{ $subCategory->status ? 'checked' : '' }}>
                        <label class="form-check-label" for="isActiveInput">
                            Active Status
                        </label>
                    </div>

                    <br>
                    <button type="reset" class="btn btn-warning">Reset</button>

                    <button type="submit" class="btn btn-primary">Update</button>

                </form>


            </div>
        </div>
    </div>
</x-backend.master>
