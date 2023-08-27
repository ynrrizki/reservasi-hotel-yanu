@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 lg:max-w-7xl">
        <h2 class="text-3xl font-bold tracking-tight mb-2">Facilities Hotel 🏊‍♂️</h2>
        <p class="text-lg mb-8 text-slate-500 dark:text-slate-300">Beragam Fasilitas Hotel.</p>

        @empty(count($facilities))
            <h4 class="text-2xl text-center text-primary-content my-20">
                facility not available
            </h4>
        @endempty
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">

            @foreach ($facilities as $facility)
                <div class="wrapper bg-current-400 antialiased">
                    <div>
                        <img src="{{ $facility->image }}" alt=" random imgee"
                            class="h-72 w-full object-cover object-center rounded-lg shadow-md">
                        <div class="relative px-4 -mt-16">
                            <div class="bg-base-100 p-6 rounded-lg shadow-xl border-gray-600 border">
                                <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">
                                    {{ $facility->name }}</h4>

                                <div class="mt-1 text-gray-300">
                                    {{ $facility->description }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    @endsection
