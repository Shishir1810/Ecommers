<x-backend.master>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4> New Tag Add</h4>
                <form method="POST" action="{{route('tags.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8">
                        <x-utility.from.input name="tag" type="text" placeholder="Enter tag"
                            :value="old('tag')" />
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
