<x-backend.master>
    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Size List
            <a class="btn btn-primary" href="{{route('sizes.create')}}">Size Add</a>
        </div>

        <x-utility.massage :message="session('message')" />

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>


                 @foreach ($size as $data )


                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>

                            <td> {{$data->status }}   </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('sizes.edit',['size'=>$data->id])}}">Edit</a>
                            </td>
                            <td>
                                <form method="POST" action="{{route('sizes.destroy',['size'=>$data->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Are you sure want to delete?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('Backend') }}/js/datatables-simple-demo.js"></script>
    @endpush

</x-backend.master>
