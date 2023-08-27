@extends('layouts.dash')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Room Edit</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit Room</h5>
                <div class="card-body">
                    <form action="{{ route('room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <label for="inputRooType" class="form-label">Room Type</label>
                            <input type="text" name="name" class="form-control" id="inputRooType" placeholder="Luxury"
                                aria-describedby="defaultFormControlHelp" value="{{ old('name', $room->name) }}" />
                        </div>
                        <div class="mb-4">
                            <label for="image" class="form-label">Image</label>
                            <img src="{{ Storage::url($room->image) }}" class="img-preview img-fluid mb-3 col-sm-5"
                                style="border-radius: 5px; display: block">
                            <input type="hidden" name="oldImage" value="{{ old('image', $room->image) }}">
                            <input type="file" class="form form-control @error('image') is-invalid @enderror"
                                id="image" onchange="previewImage()" name="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="inputAmoutOfRoom" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" id="inputAmoutOfRoom"
                                placeholder="Amount of Room" aria-describedby="defaultFormControlHelp"
                                value="{{ old('amount', $room->amount) }}" />
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('addon-js')
        <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endpush
@endsection
