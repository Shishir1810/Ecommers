<x-backend.master>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h4> User edit</h4>
                <form method="POST" action="{{ route('users.update',['id'=>$user->id ])}}" >
                    @csrf
                    @method('PUT')
                    <div class="col-md-8">
                        <x-utility.from.input name="name" type="text" :value="old('name',$user->name)" />
                        <x-utility.errorfield name='name' />

                        <x-utility.from.input name="email" type="email" :value="old('email',$user->email)" />
                        <x-utility.errorfield name='email' />

                        <div class="form-group">
                            <label for="role">role</label>
                            <select class="form-control" name="role_id" id="role">
                                <option>select one</option>
                                @foreach ($role as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->Name }}</option>
                                @endforeach
                            </select>
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
