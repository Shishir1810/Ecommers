<x-backend.master>

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4>Tag Upadte</h4>
                <form method="POST" action="{{route('tags.update',['tag'=>$tag->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-8">

                        <label for="tag"class="col-form-label-lg ">Tag </label>
                        <input name="tag" type="text"
                            class="form-control @error('tag') is-invalid @enderror"value="{{ old('tag',$tag->tag) }}"
                            id="tag" placeholder="Enter tag">
                        <x-utility.errorfield name='tag' />
                    </div>
                    <br>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="checkbox" value="1"
                            id="isActiveInput"{{ $tag->tag ? 'checked' : '' }}>
                        <label class="form-check-label" for="isActiveInput">
                            Active Status
                        </label>
                    </div>
                    <br>
                    <button type="reset" class="btn btn-warning">reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

</x-backend.master>
