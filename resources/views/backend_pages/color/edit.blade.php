<x-backend.master>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4>Color update</h4>
                <form method="POST" action="{{ route('colors.update', ['color' => $color->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-8">
                        <label for="color"class="col-form-label-lg ">Color Title</label>
                        <input name="color" type="text"
                            class="form-control @error('color') is-invalid @enderror"value="{{ old('color', $color->color) }}"
                            id="color" placeholder="Enter color title">
                        <x-utility.errorfield name='color' />
                    </div>
                    <div class="col-md-8">
                        <label for="code"class="col-form-label-lg ">Color code</label>
                        <input name="code" type="color"
                            class="form-control @error('code') is-invalid @enderror from-control-color"value="{{ old('code',$color->code) }}"
                            id="code" placeholder="Enter color code">
                        <x-utility.errorfield name='color' />
                    </div>
                    <br>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="checkbox" value="1"
                            id="isActiveInput"{{ $color->status ? 'checked' : '' }}>
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
