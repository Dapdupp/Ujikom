<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>D'nov Food - Selamat Datang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

    <script>
        function toggleMenu() {
            const nav = document.getElementById('navLinks');
            nav.classList.toggle('hidden');
        }
    </script>
</head>

<body class="font-poppins bg-white text-gray-800">


    <x-nav-bar></x-nav-bar>

    <main>

        <div class="bg-orange-400 container mx-auto px-4 py-10 text-center max-w-7xl rounded-b-lg shadow-lg mb-6">
            <h1 class="text-xl text-orange-200 mb-2">~Selamat Datang di~</h1>
            <p class="text-6xl font-bold text-white">D'nov Food</p>
        </div>


        <div class="bg-green-400 container mx-auto px-4 py-10 text-center max-w-7xl space-y-4 rounded-t-lg shadow-inner mb-6">
            <p class="text-4xl font-semibold text-white">Kamu nyari restoran yang lengkap makanan enakkk ?!?</p>
            <p class="text-3xl text-white">Yaaaa ke D'nov Food ajaaaaaa!!</p>
            <p class="text-2xl text-white max-w-2xl mx-auto">
                Disini kami menyediakan berbagai macam makanan dan berbagai macam minuman
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-xl p-6 text-center hover:shadow-lg transition ">
                <div class="w-60 mx-auto">

                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#000000" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21.68,42.22H37.17a1.68,1.68,0,0,0,1.68-1.68L44.7,19.12A1.68,1.68,0,0,0,43,17.44H17.61a1.69,1.69,0,0,0-1.69,1.68l-5,21.42a1.68,1.68,0,0,0,1.68,1.68h2.18"></path><path d="M41.66,42.22H38.19l5-17.29h8.22a.85.85,0,0,1,.65.3l3.58,6.3a.81.81,0,0,1,.2.53L52.51,42.22h-3.6"></path><ellipse cx="18.31" cy="43.31" rx="3.71" ry="3.76"></ellipse><ellipse cx="45.35" cy="43.31" rx="3.71" ry="3.76"></ellipse><line x1="23.25" y1="22.36" x2="6.87" y2="22.36" stroke-linecap="round"></line><line x1="20.02" y1="27.6" x2="8.45" y2="27.6" stroke-linecap="round"></line><line x1="21.19" y1="33.5" x2="3.21" y2="33.5" stroke-linecap="round"></line></g></svg>
                </div>
                    <h3 class="font-bold text-lg">Cepat & Mudah</h3>
                    <p class="text-sm text-gray-500">Pesan produk D'nov Food tanpa ribet.</p>
            </div>
            <div class="bg-white shadow rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-40 mb-7 mt-13 mx-auto">
                    <svg fill="#000000" viewBox="0 -3.84 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 115.21" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M29.03,100.46l20.79-25.21l9.51,12.13L41,110.69C33.98,119.61,20.99,110.21,29.03,100.46L29.03,100.46z M53.31,43.05 c1.98-6.46,1.07-11.98-6.37-20.18L28.76,1c-2.58-3.03-8.66,1.42-6.12,5.09L37.18,24c2.75,3.34-2.36,7.76-5.2,4.32L16.94,9.8 c-2.8-3.21-8.59,1.03-5.66,4.7c4.24,5.1,10.8,13.43,15.04,18.53c2.94,2.99-1.53,7.42-4.43,3.69L6.96,18.32 c-2.19-2.38-5.77-0.9-6.72,1.88c-1.02,2.97,1.49,5.14,3.2,7.34L20.1,49.06c5.17,5.99,10.95,9.54,17.67,7.53 c1.03-0.31,2.29-0.94,3.64-1.77l44.76,57.78c2.41,3.11,7.06,3.44,10.08,0.93l0.69-0.57c3.4-2.83,3.95-8,1.04-11.34L50.58,47.16 C51.96,45.62,52.97,44.16,53.31,43.05L53.31,43.05z M65.98,55.65l7.37-8.94C63.87,23.21,99-8.11,116.03,6.29 C136.72,23.8,105.97,66,84.36,55.57l-8.73,11.09L65.98,55.65L65.98,55.65z"></path> </g> </g></svg>
                </div>
                <h3 class="font-bold text-lg">Menu Lezat</h3>
                <p class="text-sm text-gray-500">Pilihan lengkap & menggugah selera.</p>
            </div>
            <div class="bg-white shadow rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-30 mb-7 mt-13 mx-auto">
                    <svg fill="#000000" height="150px" width="150px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 314.758 314.758" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 314.758 314.758"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <circle cx="96.555" cy="25.907" r="25.907"></circle> <path d="m272.613,75.379h-8.798c5.632-4.833 9.089-11.338 9.089-18.5 0-14.912-14.961-27-33.416-27-0.254,0-0.504,0.011-0.756,0.015-2.353-8.946-10.049-15.515-19.202-15.515-11.023,0-19.958,9.514-19.958,21.25 0,2.574 0.451,5.029 1.239,7.313-0.412-0.025-0.82-0.063-1.239-0.063-11.322,0-20.5,9.178-20.5,20.5 0,4.487 1.458,8.624 3.904,12h-7.747c-4.636,0-8.661,3.573-8.818,8.206-0.106,3.141 1.497,5.909 3.947,7.466l-9.1,9.123-1.518-11.562c-0.552-15.818-13.632-28.542-29.563-28.542h-67.242c-16.229,0-29.498,13.203-29.581,29.434v91.832c-0.034,6.903 5.073,12.527 11.977,12.563 0.021,0 0.042,0 0.063,0 6.874,0 12.464-5.556 12.499-12.438v-93.68c0-1.497 1.213-2.71 2.71-2.71 1.497,0 2.71,1.213 2.71,2.71l.006,211.977c0,8.525 7.111,15.389 15.725,14.983 8.068-0.38 14.275-7.33 14.275-15.407v-116.234c0-1.788 1.45-3.238 3.238-3.238 1.788,0 3.238,1.45 3.238,3.238v116.234c0,8.077 6.207,15.027 14.275,15.407 8.614,0.406 15.725-6.458 15.725-14.983l-.269-211.974c-0.002-1.498 1.212-2.714 2.71-2.714h0.102c1.377,0 2.535,1.032 2.692,2.4l4.743,41.141c0.62,4.723 3.87,8.683 8.381,10.212 1.314,0.445 2.668,0.661 4.011,0.661 3.268,0 6.468-1.282 8.852-3.673l43.32-43.433h68.566c4.882,0 8.802-4.116 8.482-9.066-0.292-4.517-4.245-7.933-8.772-7.933z"></path> </g> </g></svg>
                </div>
                <h3 class="font-bold text-lg">Support Pelanggan</h3>
                <p class="text-sm text-gray-500">Layanan bantu kamu 24/7.</p>
            </div>
        </div>
    </main>
    <footer class="text-center text-sm py-4 bg-white mt-8 border-t">
        © {{ date('Y') }} D'nov Food. Semua Hak Dilindungi.
    </footer>
</body>

</html>