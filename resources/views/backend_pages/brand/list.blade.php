<x-backend.master>
    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Brand List
            <a class="btn btn-primary" href="{{ route('brands.create') }}">Brand Add</a>
        </div>

        <x-utility.massage :message="session('message')" />

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Sub_Category</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brand as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->brand }}</td>
                            <td>{{ $brand->subcategory->name }}</td>
                            <td>{{ $brand->status }} </td>
                            <td>
                                <a class="btn btn-primary" href="{{route('brands.edit',['brand'=>$brand->id])}}">Edit</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('brands.destroy', ['brand' => $brand->id]) }}">
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
