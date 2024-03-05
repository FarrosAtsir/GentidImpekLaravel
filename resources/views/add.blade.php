<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Websitre CRUD Laravel</title>
</head>
<body>
    {{-- navbar --}}
    <div class="navbar bg-primary text-primary-content">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">Tambah Karakter</a>
        </div>
        <div class="flex-none gap-2">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full border-2">
                    <img alt="Tailwind CSS Navbar component" src="/img/icon.png"/>
                </div>
            </div>
        </div>
    </div> 

    {{-- add data --}}
    <div class="max-w-md mx-auto relative overflow-hidden z-10 bg-gray-800 p-8 rounded-lg shadow-md before:w-24 before:h-24 before:absolute before:bg-purple-600 before:rounded-full before:-z-10 before:blur-2xl after:w-32 after:h-32 after:absolute after:bg-sky-400 after:rounded-full after:-z-10 after:blur-xl after:top-24 after:-right-12 mt-8">
        <h2 class="text-2xl font-bold text-white mb-6">Tambahkan Data Karakter</h2>
        <form action="/store" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-300" for="name">Nama</label>
                <input class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" name="nama" type="text" required/>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-300 mb-1" for="senjata">Senjata</label>
                <select class="select select-bordered w-full" name="senjata" required>
                    <option disabled selected>Senjata</option>
                    <option>Polearm</option>
                    <option>Sword</option>
                    <option>Bow</option>
                    <option>Claymore</option>
                    <option>Catalyst</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-300 mb-1" for="elemen">Elemen</label>
                <select class="select select-bordered w-full mb-4" name="elemen" required>
                    <option disabled selected>Element</option>
                    <option>Anemo</option>
                    <option>Geo</option>
                    <option>Electro</option>
                    <option>Dendro</option>
                    <option>Hydro</option>
                    <option>Pyro</option>
                    <option>Cryo</option>
                </select>
            </div>

            <div class="flex justify-end">
                <button class="bg-gradient-to-r from-purple-600 via-purple-400 to-blue-500 text-white px-4 py-2 font-bold rounded-md hover:opacity-80" type="submit">
                    Tambah
                </button>
            </div>
        </form>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>