@extends('layouts.dash')

@section('content')
@section('layout-style')
    style="padding-left: 0px;"
@endsection
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
    <span class="text-muted fw-light">Dashboard /</span> Reservation
</h4>

<!-- Rooms List Table -->
<div class="card shadow mb-4">
    <div class="card-header py-3 flex flex-between">
        <div class="d-flex justify-content-between">
            <form action="{{ route('receptionist.sortDate') }}" method="post">
                @csrf
                <label>
                    <input type="date" name="date" class="form-control" aria-controls="DataTables_Table_0">
                </label>
                <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z">
                        </path>
                        <path
                            d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z">
                        </path>
                    </svg>
                </button>
            </form>
            <form action="{{ route('receptionist.sortName') }}" method="post">
                @csrf
                <label>
                    <input type="search" name="name" class="form-control" placeholder="Search Guest"
                        aria-controls="DataTables_Table_0">
                </label>
                <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                        </path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Guest Name</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Guest Name</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->order->name }}</td>
                            <td>{{ $reservation->checkin }}</td>
                            <td>{{ $reservation->checkout }}</td>
                            <td>
                                <form action="{{ route('receptionist.update', $reservation->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-primary"
                                        {{ $reservation->confirm != 'TRUE' ? '' : 'disabled' }}>CheckIn</button>
                                </form>
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
