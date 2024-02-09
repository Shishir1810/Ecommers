<x-backend.master>

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4>Size Update</h4>
                <form method="POST" action="{{route('sizes.update',['size'=>$size->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-8">
                        <label for="size"class="col-form-label-lg ">Size</label>
                        <input name="name" type="text"
                            class="form-control @error('name') is-invalid @enderror"value="{{ old('name',$size->name) }}"
                            id="size" placeholder="Enter size">
                        <x-utility.errorfield name='name' />
                    </div>
                    <br>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="checkbox" value="1"
                            id="isActiveInput"{{ $size->status ? 'checked' : '' }}>
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
