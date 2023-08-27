@extends('layouts.main')

@section('content')
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="card w-full shadow-2xl bg-base-100">
            <div class="card-header text-center">
                <h1 class="text-3xl font-bold">
                    Form Order
                </h1>
            </div>
            <div class="card-body">
                <form action="{{ route('confirmation.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="checkin" value="{{ $data['checkin'] ?? '' }}">
                    <input type="hidden" name="checkout" value="{{ $data['checkout'] ?? '' }}">
                    <input type="hidden" name="amount" value="{{ $data['amount'] ?? '' }}">
                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Order Name</span>
                        </label>
                        <input type="text" name="name" placeholder="order name" class="input input-bordered">
                    </div>
                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="email" class="input input-bordered">
                    </div>

                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Phone</span>
                        </label>
                        <input type="text" name="phone" placeholder="number phone" class="input input-bordered">
                    </div>

                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Guest Name</span>
                        </label>
                        <input type="text" name="guest_name" placeholder="guest name" class="input input-bordered">
                    </div>

                    <div class="form-control mb-4">
                        <label class="label">
                            <span class="label-text">Room Type</span>
                        </label>
                        <select class="select select-bordered w-full" name="room_type">
                            <option disabled="disabled" selected="selected">Choose your room type...</option>
                            @foreach ($roomTypes as $roomType)
                                <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="{{ route('home') }}" class="btn btn-active mt-5">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
