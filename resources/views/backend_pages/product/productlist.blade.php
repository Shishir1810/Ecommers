<x-backend.master>
    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Product List
            <a class="btn btn-primary" href="{{ route('product.create') }}">Product Add</a>
        </div>

        <x-utility.massage :message="session('message')" />

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Name</th>
                        <th>Catagory</th>
                        <th>Sub_Category</th>
                        <th>Brand</th>
                        <th>Tag</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->subcategory->name }}</td>
                            <td>{{$product->brand->brand}}</td>
                            <td>{{ $product->tag->tag }}</td>
                            <td>{{ $product->size->name }}</td>
                            <td>{{ $product->color->color }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('product.view', ['product' => $product->id]) }}">View</a>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('product.edit', ['product' => $product->id]) }}">Edit</a>
                            </td>
                            <td>
                                <form method="POST"
                                    action="{{ route('product.destroy', ['product' => $product->id]) }}">
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
