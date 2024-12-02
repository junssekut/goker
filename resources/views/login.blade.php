<x-html>

    <body class="bg-gradient-to-b from-white to-[#F7CE55] h-100">
        {{-- <x-navAfter></x-navAfter> --}}
        <x-navBefore></x-navBefore>
        {{-- <x-navWhile></x-navWhile> --}}
        <div class="relative flex items-center justify-center h-screen">
            <!-- Lingkaran dekoratif -->
            <div
                class="absolute w-[30vw] h-[30vw] bg-green-500 bg-opacity-20 rounded-full top-[15vh] left-[10vw] z-[-2 ]">
            </div>
            <div
                class="absolute w-[35vw] h-[35vw] bg-green-500 bg-opacity-20 rounded-full top-[10vh] right-[5vw] z-[-2]">
            </div>
            <div
                class="absolute w-[25vw] h-[25vw] bg-green-500 bg-opacity-20 rounded-full top-[30vh] left-[35vw] z-[-2]">
            </div>

            <div
                class="flex flex-col md:flex-row w-full max-w-6xl items-center justify-center md:justify-between px-4 sm:px-10 md:px-20 mt-10 md:mt-0 ">
                <!-- Gambar -->
                <div class="w-full md:w-[50%] hidden md:flex justify-center">
                    <img src="{{ asset('assets/images/logo/login-image.png') }}" alt="" class="max-w-full">
                </div>
                <!-- Form -->
                <div
                    class="w-full md:w-[40%] max-w-md p-8 rounded-3xl bg-[#00AA13] flex flex-col items-center shadow-[-20px_20px_0_rgba(0,0,0,0.2)]">
                    <h2 class="text-xl text-center font-bold text-white mt-4 mb-6">Selamat datang, Gokers!</h2>

                    <form action="#" method="post" class="w-full">
                        <div class="flex flex-col gap-5">
                            <!-- Input Username -->
                            <div class="flex flex-row items-center w-full h-[60px] bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-user"></i>
                                <input type="text" id="username" name="username" placeholder="Nama pengguna"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3">
                            </div>
                            <!-- Input Password -->
                            <div class="flex flex-row items-center w-full h-[60px] bg-[#F7CE55] rounded-full px-4">
                                <i class="text-[#DA8500] fas fa-lock"></i>
                                <input type="password" id="password" name="password" placeholder="Kata sandi"
                                    class="flex-1 bg-transparent outline-none text-[#C06100] placeholder-[#EF9334] ml-3">
                            </div>
                        </div>

                        <div class="flex flex-row justify-between items-center px-2 my-4 text-white">
                            <!-- Kotak Centang -->
                            <!-- Kotak Centang -->
                            <div class="flex items-center">
                                <input type="checkbox" name="remember" id="remember-me" class="custom-checkbox" />
                                <label for="remember-me" class="ml-2 text-white">Ingat saya</label>
                            </div>
                            <!-- Lupa Kata Sandi -->
                            <label class="hover:underline cursor-pointer">Lupa kata sandi?</label>
                        </div>

                        <!-- Tombol Masuk dengan Google -->
                        <button type="button"
                            class="w-full py-3 bg-white text-black font-medium rounded-full mb-4 hover:bg-green-600 flex items-center justify-center">
                            <img src="{{ asset('assets/images/logo-google.png') }}" alt="Google logo" class="h-4 mr-2">
                            Masuk dengan Google
                        </button>

                        <!-- Tombol Masuk -->
                        <button type="submit"
                            class="w-full py-3 bg-white text-black font-medium rounded-full hover:bg-green-700">
                            Masuk
                        </button>

                        <div class="text-center mt-4 text-white">
                            <p>Gokers belum punya akun? <a href="" class="text-[#F7CE55] underline">Daftar</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</x-html>
