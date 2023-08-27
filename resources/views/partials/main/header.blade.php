<header
    class="hero text-gray-50 bg-cover bg-fixed bg-no-repeat bg-[url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fblogs-images.forbes.com%2Fpetertaylor%2Ffiles%2F2016%2F11%2FMBH-Architectural-Gardens-Exterior-300DPI-1200x800.jpg&f=1&nofb=1&ipt=022d82b3f073a1a3fcac685c6816c3d8e0cc8a372c2912521689a8d39fd3ae0a&ipo=images')]">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="container mx-auto px-4 lg:max-w-screen-xl py-24 text-center md:text-left">
        <div class="w-100 md:w-1/2">
            <h1 class="text-6xl font-bold mb-5 tracking-tighter">Hotel Hebat</h1>
            <p class="text-2xl font-light max-w-1/2">
                Sajikan pengalaman menginap tak terlupakan dengan gaya yang elegan
                dan modern
            </p>
            <div
                class="{{ isset($data) != null ? 'hidden' : '' }}  mt-20 md:flex flex-row gap-3 justify-center md:justify-start">
                <div class="card shadow-2xl bg-base-100">
                    <form action="{{ route('order') }}" method="POST">
                        @csrf
                        <div class="card-body flex md:flex-row md:items-end">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Check-In</span>
                                </label>
                                <input type="text" name="checkin" placeholder="Select Date"
                                    class="checkInOut flatpickr flatpickr-input input input-bordered @error('checkin') input-error @enderror"
                                    value="{{ $data['checkin'] ?? '' }}" {{ isset($data['checkin']) ? 'disabled' : '' }}
                                    required />
                                @error('checkin')
                                    <label class="label">
                                        <span class="label-text-alt text-red-700">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Check-Out</span>
                                </label>
                                <input type="text" name="checkout" placeholder="Select Date"
                                    class="checkInOut flatpickr flatpickr-input input input-bordered @error('checkout') input-error @enderror"
                                    value="{{ $data['checkout'] ?? '' }}"
                                    {{ isset($data['checkout']) != null ? 'disabled' : '' }} required />
                                @error('checkout')
                                    <label class="label">
                                        <span class="label-text-alt text-red-700">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Amount Room</span>
                                </label>
                                <input type="number" name="amount" placeholder="Rooms"
                                    class="input input-bordered @error('amount') input-error @enderror"
                                    value="{{ $data['amount'] ?? '' }}" min="0"
                                    {{ isset($data['amount']) != null ? 'disabled' : '' }} required />
                                @error('amount')
                                    <label class="label">
                                        <span class="label-text-alt text-red-700">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="form-control mt-6">
                                <button class="btn bg-base-content text-base-100 hover:btn-outline"
                                    {{ isset($data) != null ? 'disabled' : '' }}>Booking</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
@push('addon-js')
    <script>
        flatpickr('.checkInOut', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            minDate: "today",
        });
    </script>
@endpush
