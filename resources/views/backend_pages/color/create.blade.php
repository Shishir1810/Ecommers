<x-backend.master>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4> New color Add</h4>
                <form method="POST" action="{{route('colors.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8">
                        <x-utility.from.input name="color" type="text" placeholder="Enter color Name"
                            :value="old('color')" />

                    </div>
                    <div class="col-md-8">
                        <x-utility.from.input name="code" type="color" placeholder="Enter color code "
                            :value="old('code')" />

                    </div>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="checkbox" value="1"
                            id="isActiveInput" checked>
                        <label class="form-check-label" for="isActiveInput">
                            Active Status
                        </label>
                    </div>
                    <br>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-backend.master>
