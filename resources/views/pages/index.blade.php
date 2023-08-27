@extends('layouts.main')

@section('content')
    @push('addon-css')
        <style>
            .flex {
                animation: gerak 2s infinite;
            }

            @keyframes gerak {
                from {
                    left: 0px;
                }

                to {
                    left: 100px;
                }
            }
        </style>
    @endpush
    <section id="about" class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full" data-aos="zoom-in-left">
                <img alt="Party"
                    src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="absolute inset-0 h-full w-full object-cover" />
            </div>

            <div class="lg:py-24" data-aos="zoom-in-right">
                <h2 class="text-3xl font-bold sm:text-4xl">About</h2>

                <p class="mt-4 text-inherit-600">
                    Selamat datang di hotel kami, di mana kami menawarkan pengalaman menginap mewah yang tak tertandingi.
                    Hotel kami adalah sebuah hotel bintang lima yang dirancang dengan desain yang elegan dan modern, serta
                    menawarkan berbagai fasilitas yang lengkap untuk memenuhi kebutuhan tamu kami yang paling menuntut.
                </p>

                <a href="#"
                    class="mt-8 inline-flex items-center rounded border border-orange-300 bg-orange-300 px-8 py-3 text-black hover:bg-transparent hover:text-orange-300 focus:outline-none focus:ring active:text-indigo-500">
                    <span class="text-sm font-medium"> Get Started </span>

                    <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section id="content" class="bg-base-200 py-16 mt-36 flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="xl:w-1/2 w-11/12">
            <h1 role="heading" tabindex="0" class="text-6xl font-bold 2xl:leading-10 leading-0 text-center">Touching
                hundreds of lives</h1>
            <h2 role="contentinfo" tabindex="0" class="text-base leading-normal text-center  mt-5">Lorem Ipsum is simply
                dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                Lorem Ipsum is simply dummy text of the printing</h2>
        </div>
        <div class="2xl:px-20 lg:px-12 px-4 flex flex-wrap items-start mt-4">
            <div class="mt-24">
                <div class="flex items-end">
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1522798514-97ceb8c4f1c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                        alt="girl with blue background" class=" w-20 h-20 rounded-lg mr-6" />
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="guy winking" class="w-48 h-36 rounded-lg" />
                </div>
                <div class="flex items-center justify-end my-6">
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1629140727571-9b5c6f6267b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80"
                        alt="guy smiling" class="w-48 h-48 rounded-lg object-cover" />
                </div>
                <div class="flex items-start">
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="girl with bluw background" class="w-48 h-48 rounded-lg object-cover" />
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1584132869994-873f9363a562?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="guy with glasses" class="w-20 h-20 rounded-lg ml-6 flex-shrink-0 object-cover object-fit" />
                </div>
            </div>
            <div class="ml-6 mt-32">
                <img tabindex="0" data-aos="fade-up"
                    src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    class="w-72 h-80 rounded-lg object-cover" alt="guy with sunglasses" />
                <div class="flex items-start mt-6">
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1589785277274-59448e840ac7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                        alt="girl  laughing" class="w-48 h-48 rounded-lg" />
                    <img tabindex="0" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1557127275-f8b5ba93e24e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="guy with glasses" class="w-20 h-20 rounded-lg ml-6 object-cover object-fit" />
                </div>
            </div>
            <div class="mt-14 ml-6">
                <div class="lg:flex">
                    <div>
                        <img tabindex="0" data-aos="fade-up"
                            src="https://images.unsplash.com/photo-1582719508461-905c673771fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1025&q=80"
                            alt="group of friends" class="gambar w-96 h-72 rounded-lg object-center object-fit" />
                    </div>
                    <div>
                        <div class="flex ml-6">
                            <img tabindex="0" data-aos="fade-up"
                                src="https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                                class="w-20 h-20 rounded-lg mt-14" alt="man" />
                            <img tabindex="0" data-aos="fade-up"
                                src="https://images.unsplash.com/photo-1569335468885-d7d1a41e570c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                class="w-20 h-24 rounded-lg ml-6" alt="woman" />
                        </div>
                        <img tabindex="0" data-aos="fade-up"
                            src="https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            alt="boy with blonde hair" class="ml-6 mt-6 w-48 h-32 rounded-lg" />
                    </div>
                </div>
                <div class="mt-6 flex">
                    <img tabindex="0" class="w-48 h-48 rounded-lg" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1605651531144-51381895e23d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        alt="young girl with red hair" />
                    <img tabindex="0" class="w-72 h-56 rounded-lg ml-6" data-aos="fade-up"
                        src="https://images.unsplash.com/photo-1561501878-aabd62634533?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                        alt="young girl with red hair" />
                </div>
            </div>
        </div>
    </section>
    <section class="border-base-300">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-base-content">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center sm:text-xl">Got a technical
                issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium ">Your
                        email</label>
                    <input type="email" id="email" class="input input-bordered w-full"
                        placeholder="name@hotelhebat.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium ">Subject</label>
                    <input type="text" id="subject" class="input input-bordered w-full"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium ">Your
                        message</label>
                    <textarea id="message" rows="6" class="textarea textarea-bordered w-full" placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="btn bg-base-content btn-active text-base-100 hover:btn-outline">Send
                    message</button>
            </form>
        </div>
    </section>
@endsection
