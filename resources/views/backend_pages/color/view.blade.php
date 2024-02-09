<x-backend.master>

    <div class="mt-5">
    <div class="mx-auto" style="width: 40%;">
        <div class="card bg-light mb-3">
            <div class="card-header">Color Title</div>
            <div class="card-body">
            <td>
                    <div style="width:25% ; height: 25px; background-color:{{$color->code}}">

                    </div>
                </td>
                <p class="text-success">
                <h2>COLOR NAME :{{$color->color }}</h2>
                </p>
                <p>
                <h2>COLOR CODE :{{$color->code }}</h2>
                </p>

                <a href="{{ route('colors.index') }}" class="btn btn-primary">color list</a>

            </div>
        </div>


    </div>

</div>
</x-backend.master>
