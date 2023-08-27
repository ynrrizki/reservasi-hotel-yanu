@extends('layouts.dash')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Facilities Room Create</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Facilities Room</h5>
                <div class="card-body">
                    <form action="{{ route('facilitiesRoom.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="exampleFormControlSelect1" class="form-label">Room Type</label>
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="room_type_id">
                                <option selected disabled>Choose room type...</option>
                                @foreach ($roomTypes as $roomType)
                                    <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="inputName" class="form-label">Facility Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Tv"
                                aria-describedby="defaultFormControlHelp" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
