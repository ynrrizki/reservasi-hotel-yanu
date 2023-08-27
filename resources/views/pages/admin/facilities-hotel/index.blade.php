@extends('layouts.dash')

@section('content')
    @push('addon-css')
        <!-- Vendor Styles -->
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">



        <!-- Page Styles -->

        <!-- Include Scripts for customizer, helper, analytics, config -->
        <!-- laravel style -->
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/helpers.js">
        </script>
    @endpush
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard /</span> Facilities Hotel List
    </h4>
    @if (session()->has('notif'))
        <div class="alert alert-success">
            <h6 class="alert-heading fw-bold mb-1">{{ session('notif') }}</h6>
        </div>
    @endif
    <!-- Rooms List Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end">
            <a class="btn btn-primary text-white" tabindex="0" aria-controls="DataTables_Table_0" fdprocessedid="5z1rd8"
                href="{{ route('facilitiesHotel.create') }}">
                <span>
                    <i class="bx bx-plus me-md-1"></i>
                    <span class="d-md-inline-block d-none">Create</span>
                </span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($facilitiesHotel as $key => $room)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $room->id }}</strong>
                                </td>
                                <td>
                                    {{ $room->name }}
                                </td>
                                <td>
                                    {{ $room->description }}
                                </td>
                                <td>
                                    <img src="{{ Storage::url($room->image) }}" class="rounded img-fluid"
                                        style="height: 150px; object-fit: cover; width: 100%;">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('facilitiesHotel.edit', $room->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit
                                            </a>
                                            <a class="dropdown-item"
                                                href="{{ route('facilitiesHotel.destroy', $room->id) }}"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">No records found</td>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('addon-js')
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js">
        </script>
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/app-invoice-list.js">
        </script>
    @endpush
@endsection
