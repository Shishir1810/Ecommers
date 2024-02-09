<x-backend.master>
    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User List
            
        </div>

        <x-utility.massage :message="session('message')" />

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Role</th>
                        <th>Edit</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->Name }}</td>
                            
                            <td>
                                <a class="btn btn-primary" href="{{route('users.edit',['id'=>$user->id ])}}">Edit</a>
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
