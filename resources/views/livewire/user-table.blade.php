<div class="card">
    <div class="card-body">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModal{{$user->id}}">Detail</button>
                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                    <button class="btn btn-danger" wire:click="delete({{$user->id}})">Delete</button>
                </td>
                @include('users.show')
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
