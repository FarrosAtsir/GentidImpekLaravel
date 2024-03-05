@php
    $no = 1;
@endphp

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
            <a class="btn btn-ghost text-xl">Karakter Gentid Impek</a>
        </div>
        <div class="flex-none gap-2">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full border-2">
                    <img alt="Tailwind CSS Navbar component" src="/img/icon.png"/>
                </div>
            </div>
        </div>
    </div>

    {{-- table --}}
    <div class="overflow-x-auto p-16">
        <table class="table">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Senjata</th>
                <th>Elemen</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($karakter as $k)
            <tr class="hover">
                <th>{{ $no }}</th>
                <td>{{ $k['nama'] }}</td>
                <td>{{ $k['senjata'] }}</td>
                <td>{{ $k['elemen'] }}</td>
                <td class="flex">
                    <a href="/{{ $k['id'] }}/edit" class="btn btn-outline btn-accent">Edit</a>
                    <form action="/update/{{ $k->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline btn-error ml-2 text-error">Hapus</button>
                    </form>
                </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
          </tbody>
        </table>
    </div>
    <div class="mb-8 text-center">
        <a href="/add" class="btn btn-outline">Tambah</a>
    </div>
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>