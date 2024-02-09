<x-backend.master>
    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Color List
            <a class="btn btn-primary" href="{{ route('colors.create') }}">Color Add</a>
        </div>

        <x-utility.massage :message="session('message')" />

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Code</th>
                        <th>Color</th>
                        <th>status</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($color as $color)
                        <tr>
                            <td>{{$color->id}}</td>
                            <td>{{$color->color}}</td>
                            <td>{{$color->code}}</td>

                            <td>
                                <div style="width:100% ; height: 25px; background-color: {{$color->code}}">

                                </div>
                            </td>
                            <td>{{$color->status }} </td>

                            <td>
                                <a class="btn btn-success" href="{{route('colors.show',['color'=>$color->id])}}">View</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('colors.edit',['color'=>$color->id])}}">Edit</a>
                            </td>
                            <td>
                                <form method="POST" action="{{route('colors.destroy',['color'=>$color->id])}}">
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
