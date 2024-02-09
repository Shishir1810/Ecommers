<x-backend.master>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4>Category Update</h4>


                <form method="POST" action="{{ route('category.update', ['categori' => $categori->id]) }}"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="col-md-8">

                        <x-utility.from.input name="name" type="text" :value="old('name', $categori->name)" />
                        <x-utility.from.textarea name="details" :value="old('details', $categori->details)" />
                            <img src="{{ asset('storage/categories/'.$categori->image) }}" alt="{{$categori->name}} Image" height="200">
                            <x-utility.from.input name="image" type="file" />
                    </div>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="checkbox" value="1"
                            id="isActiveInput"{{ $categori->status ? 'checked' : '' }}>
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
