@extends('layout.head')

@section('container')
    <form action="{{ route('kirim.keluhan') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="keluhan">Keluhan:</label><br>
        <textarea id="keluhan" name="keluhan" rows="4" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
@endsection
