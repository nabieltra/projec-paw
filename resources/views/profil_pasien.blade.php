<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#338C8B] flex flex-col items-stretch pr-36 h-screen">
    <div id="main-card" class="flex flex-col flex-grow bg-[#FFFCFC] rounded-br-3xl">
        <div class="flex flex-row space-x-8">
            @include('svg.logo')
            <button class="flex items-center">
                @include('svg.back_hijau')
            </button>
        </div>
        <div class="flex flex-row px-12 pb-12 space-x-28">
            <div class="flex flex-col">
                <div class="flex flex-[2] flex-col space-y-1 ">
                    @foreach ($user_data as $data => $value)
                        <div class="flex flex-row items-center space-x-16">
                            <p class="w-80 text-4xl text-[#338C8B]">{{ $data }}</p>
                            <p class="bg-[#338C8B] w-full text-4xl font-bold py-2 px-4 rounded-full text-white">
                                {{ $value }}
                            </p>
                        </div>
                    @endforeach
                </div>
                <div class="p-28">
                    <p class="text-[#338C8B] text-6xl font-bold">Cek Vaksinasi & Sertifikat</p>
                </div>
            </div>
            <div class="flex flex-col flex-[1] items-center  space-y-28">
                @include('svg.prof_pict')

                <div class="flex flex-col space-y-2">
                    <x-button onclick="toggleOverlay()">Change Person</x-button>
                    <x-button>Add Person</x-button>
                    <x-button>Log Out</x-button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center px-24 h-48">
        <x-bottom-bar />
    </div>
    <div id="overlay" class="flex fixed bg-[#38C0BE] bottom-0 w-full rounded-t-4xl p-16 flex-col items-center space-y-8 transform translate-y-full opacity-0 pointer-events-none
            transition-transform duration-300 ease-in-out">
        <div class="flex flex-row items-center self-start space-x-4">
            <button onclick="toggleOverlay()" class="flex items-center">
                @include('svg.back')
            </button>
            <p class="text-4xl font-bold text-white">Add Person</p>
        </div>

        <div class="grid grid-cols-3 gap-4 place-content-evenly">
            <x-text-input id="nama" name="Nama" type="text"></x-text-input>
            <x-text-input id="gender" name="Gender"></x-text-input>
            <x-text-input id="telephon" name="Telephone" type="tel"></x-text-input>
            <x-text-input id="email" name="Email" type="email"></x-text-input>
            <x-text-input id="birthdate" name="Date of Birth" type="date"></x-text-input>
        </div>
        <x-button inverse="true" onclick="toggleOverlay()">Konfirm</x-button>
    </div>
</body>

<script>
    function toggleOverlay() {
        const overlay = document.getElementById('overlay');
        const isHidden = overlay.classList.contains('translate-y-full');

        if (isHidden) {
            overlay.classList.remove('translate-y-full', 'opacity-0', 'pointer-events-none');
            overlay.classList.add('translate-y-0', 'opacity-100');
        } else {
            overlay.classList.add('translate-y-full', 'opacity-0', 'pointer-events-none');
            overlay.classList.remove('translate-y-0', 'opacity-100');

            setTimeout(() => {
                overlay.classList.add('pointer-events-none');
            }, 300);
        }
    }
</script>

</html>