@extends('layouts.dash')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> User Edit</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit User</h5>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->update) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Fulan"
                                aria-describedby="defaultFormControlHelp" value="{{ old('name', $user->name) }}" />
                        </div>
                        <div class="mb-4">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="inputEmail"
                                placeholder="name@example.com" aria-describedby="defaultFormControlHelp"
                                value="{{ old('email', $user->email) }}" />
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlSelect1" class="form-label">Role</label>
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="room_type_id">
                                <option selected disabled>Choose role type...</option>
                                <option value="ADMIN" {{ $user->role == 'ADMIN' ? 'selected' : '' }}>Admin</option>
                                <option value="RECEPTIONIST" {{ $user->role == 'RECEPTIONIST' ? 'selected' : '' }}>
                                    Receptionist</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
