<x-backend.master>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category List
            <a class="btn btn-primary" href="{{ route('category.create') }}">Category Add</a>
        </div>
        <x-utility.massage :message="session('message')" />
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->details }}</td>
                            <td><img id="main-image" src="{{ url('storage/categories/'.$category->image)}}"alt="CATEGORY"
                                width="200" /></td>
                            <td>{{ $category->status }}</td>

                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('category.edit', ['categori' => $category->id]) }}">Edit</a>
                            </td>
                            <td>
                                <form method="POST"
                                    action="{{ route('category.destroy', ['categori' => $category->id]) }}">
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
