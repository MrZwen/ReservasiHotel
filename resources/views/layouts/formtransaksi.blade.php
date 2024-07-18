@extends('layouts/main')

@section('title', 'Transaksi Hotel')

@section('content')
    <!-- Navbar -->
    @include('layouts.navbar')


    <!-- List kamar -->
    <section>
        <div class="container mx-auto mt-24 lg:mt-28 px-4">
            <div class="flex gap-2">
                <img class="h-1/6 bg-cover object-cover"
                    src="https://img.freepik.com/free-photo/3d-rendering-beautiful-luxury-dark-wood-european-classic-bedroom-suite-hotel_105762-2164.jpg?t=st=1721314117~exp=1721317717~hmac=c04c51b4823a7f8c3af860d4251c01c5fa83ed6deb421305c680c84c72082334&w=1060"
                    alt="">
                <div class="flex flex-col gap-2">
                    <img class="h-3/6 bg-cover object-cover"
                        src="https://img.freepik.com/free-photo/3d-rendering-beautiful-luxury-dark-wood-european-classic-bedroom-suite-hotel_105762-2164.jpg?t=st=1721314117~exp=1721317717~hmac=c04c51b4823a7f8c3af860d4251c01c5fa83ed6deb421305c680c84c72082334&w=1060"
                        alt="">
                    <img class="h-3/6 bg-cover object-cover"
                        src="https://img.freepik.com/free-photo/3d-rendering-beautiful-luxury-dark-wood-european-classic-bedroom-suite-hotel_105762-2164.jpg?t=st=1721314117~exp=1721317717~hmac=c04c51b4823a7f8c3af860d4251c01c5fa83ed6deb421305c680c84c72082334&w=1060"
                        alt="">
                </div>
            </div>
            <div class="lg:mt-8">
                <h1 class="font-bold text-4xl">Deluxe Hotel Room</h1>
                <span class="text-sm mt-2">Room Available</span>
                <p class="max-w-7xl mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptatibus
                    provident, est dolor quae quos corrupti quo ex ducimus et ullam iure, vitae, enim ratione recusandae
                    facilis. Vero nobis fugiat enim atque odio qui soluta ipsa autem, veniam vitae similique in est, labore
                    nihil rerum et, doloremque temporibus hic incidunt repudiandae? Quis ipsam eveniet sapiente corporis,
                    eligendi animi rerum magnam beatae. Perspiciatis autem eius rerum officia vitae unde, dolor facilis
                    quidem voluptatem quis, quibusdam at nostrum tenetur error deserunt animi. Necessitatibus nostrum
                    tenetur quam nobis nesciunt blanditiis, dolores praesentium? Quas illo hic ad porro odio ea deserunt
                    non. Error, vitae deleniti. Et architecto magnam ipsum, fugit corrupti modi ea facilis impedit, voluptas
                    ipsam ab alias, sequi qui! Iusto ullam porro nulla eius accusantium id fugit in assumenda sapiente
                    similique asperiores odio totam.</p>
                <p class="max-w-7xl mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium ipsam
                    error consequuntur ab similique doloribus aut impedit nemo, esse necessitatibus culpa! Atque ea facere
                    officia voluptatem accusamus quasi temporibus quia dolorem minima recusandae? Optio odio iusto eveniet?
                    Et quas doloremque quibusdam unde deserunt. Ab commodi beatae ad exercitationem optio repudiandae quod
                    tempora ducimus labore deleniti praesentium, temporibus repellendus, a totam vel provident reiciendis
                    eaque consequatur laudantium aperiam nam illo molestiae ut. Non beatae voluptates, necessitatibus iure
                    perferendis distinctio voluptas nostrum ipsam cupiditate hic sequi, iusto quo dolor velit modi?</p>
                <p class="mt-6">Rate 4.5/5 out of 125 Reviews</p>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="block text-white bg-yellow-500 hover:bg-yellow-700 font-medium rounded-lg text-sm px-8 py-2 text-center mt-4"
                    type="button">
                    Book Now
                </button>
                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Sign in to our platform
                                </h3>
                                <button type="button"
                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <form class="space-y-4" action="#">
                                    <div>
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            email</label>
                                        <input type="email" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="name@company.com" required />
                                    </div>
                                    <div>
                                        <label for="password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                            password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            required />
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="remember" type="checkbox" value=""
                                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                                    required />
                                            </div>
                                            <label for="remember"
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                                me</label>
                                        </div>
                                        <a href="#"
                                            class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                                            Password?</a>
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                                        to your account</button>
                                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                        Not registered? <a href="#"
                                            class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="mt-36">
        <form action="/transaksi" method="POST" class="container max-w-3xl ">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kamar</label>
                <select name="id" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($data as $d)
                        <option value="{{ $d->id }}">
                            {{ $d->no_kamar }}&nbsp;{{ $d->tipe_kamar }}&nbsp;{{ $d->harga }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bukti Pembayaran</label>
                <div class="mb-3">
                    <input name="bukti_pembayaran" class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pembayaran</label>
                <input name="tgl_pembayaran" type="date" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Submit</button>
        </form>
    </div> --}}




    <!-- Footer Section -->
    @include('user.layouts.footer')
@endsection
