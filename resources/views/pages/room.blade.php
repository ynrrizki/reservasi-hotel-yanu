@extends('layouts.main')
@section('content')
@section('header')
    @include('partials.main.header')
@endsection
<div class="container mx-auto px-4 lg:max-w-7xl">
    <h2 class="text-3xl font-bold tracking-tight mb-2">Room Hotel 🏨</h2>
    <p class="text-lg mb-8 text-slate-500 dark:text-slate-300">Ruangan hotel yang nyaman dan tentram.</p>
    <div class="grid grid-cols-1 gap-10">
        @forelse($rooms as $room)
            <div class="flex flex-col">
                <div class="overflow-hidden w-full rounded-xl">
                    <img src="{{ $room->image }}"
                        class="h-80 w-full object-cover hover:scale-125 duration-300 hover:brightness-50">
                </div>
                <h1 class="mt-4 mb-2 text-4xl font-bold">{{ $room->name }}</h1>
                <p class="text-xl font-bold text-primary">
                    Facility:
                <ul>
                    @forelse ($room->roomFacilities as $facility)
                        @forelse ($facility->itemRoomFacilities as $item)
                            <li>
                                <p>{{ $item->name }}</p>
                            </li>
                        @empty
                            <li>
                                <p>Facility Not Found</p>
                            </li>
                        @endforelse

                    @empty
                        <p>Facility Not Found</p>
                    @endforelse
                </ul>
                </p>
            </div>
        @empty
            <h4 class="text-2xl text-center text-primary-content my-20">
                room not available
            </h4>
        @endforelse
    </div>
</div>
@endsection
