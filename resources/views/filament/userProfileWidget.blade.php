<div class="w-full">

    <div class="flex flex-row justify-start items-center w-full p-3 shadow-lg text-white">
        <img src="{{ asset('assets/images/testOrang.jpg') }}" alt=""
            class="w-fit h-24 md:w-40 md:h-40 ml-10 mr-10 rounded-full shadow-lg"
            style="border: 4px solid black !important;">


        <div class="flex flex-row justify-between items-center w-full">


            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-semibold text-black">{{ Auth::user()->name }}</h1>
                <p class="text-md w-11/12 line-clamp-3 text-black">Joined Since: {{ Auth::user()->created_at }}</p>
            </div>
            <div class="flex flex-col gap-2 mr-10">
                <a href="{{ route('profile') }}" class="text-white rounded-md flex justify-center gap-2 items-center"
                    style="padding:7px 10px 5px 10px; background-color: purple; ">
                    <ion-icon name="create-outline" style="margin-bottom: 4.5px;"></ion-icon>
                    <p>Edit data diri</p>
                </a>
                <a href="#" class="text-white rounded-md flex justify-center gap-2 items-center"
                    style="padding:7px 10px 5px 10px; background-color: rgb(216, 21, 21); ">
                    <ion-icon name="trash-outline" style="margin-bottom: 4px;"></ion-icon>
                    <p>Hapus Akun</p>
                </a>
            </div>
        </div>


    </div>
</div>
