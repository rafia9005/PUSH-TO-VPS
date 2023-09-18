<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>{{ $berita->judul }}</h2>
    <p>{{ $berita->deskripsi }}</p>
    @if ($berita->thumbnail)
        <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="Thumbnail">
    @endif
    <div>{!! $berita->konten !!}</div>

</body>

</html>
