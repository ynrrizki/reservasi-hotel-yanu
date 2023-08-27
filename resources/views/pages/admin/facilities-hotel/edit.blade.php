@extends('layouts.dash')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Facilities Room Hotel</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Facilities Hotel</h5>
                <div class="card-body">
                    <form action="{{ route('facilitiesHotel.update', $facilityHotel->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="inputName" class="form-label">Facility Name</label>
                            <input type="text" name="name" class="form-control" id="inputName"
                                placeholder="Kolam Renang" aria-describedby="defaultFormControlHelp"
                                value="{{ old('name', $facilityHotel->name) }}" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="inputName" class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control" id="inputDescription"
                                aria-describedby="defaultFormControlHelp">{{ old('description', $facilityHotel->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="image" class="form-label">Image</label>
                            <img src="{{ Storage::url(old('image', $facilityHotel->image)) }}"
                                class="img-preview img-fluid mb-3 col-sm-5" style="border-radius: 5px; display:block">
                            <input type="file" class="form form-control @error('image') is-invalid @enderror"
                                id="image" onchange="previewImage()" name="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
