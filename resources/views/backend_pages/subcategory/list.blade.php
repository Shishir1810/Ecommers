<x-backend.master>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Sub Category List
            <a class="btn btn-primary" href="{{ route('sub_categories.create') }}">Sub Category Add</a>
        </div>
        <x-utility.massage :message="session('message')" />
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategory as $subcategory)
                        <tr>
                            <td>{{ $subcategory->id }}</td>
                            <td>{{ $subcategory->name }}</td>
                            <td>{{ $subcategory->subcategory->name }}</td>
                            <td>{{ $subcategory->details }}</td>
                            <td>{{ $subcategory->status }}</td>

                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('sub_categories.edit', ['sub_category' => $subcategory->id]) }}">Edit</a>
                            </td>
                            <td>
                                <form method="POST"
                                    action="{{ route('sub_categories.destroy', ['sub_category' => $subcategory->id]) }}">
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
