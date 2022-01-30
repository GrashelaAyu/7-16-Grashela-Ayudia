@extends('layouts.main')

@section('container')
    <h3> Halaman About </h3>
    <h5><?php echo $nama; ?></h5>
    <p><?php echo $email; ?></p>
    <img src="image/{{ $gambar }}" alt="{{ $nama }}" width="200px">
@endsection
