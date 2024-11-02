@extends('layouts.app')


@section('konten')
    <h4>Tambah Siswa</h4>

    <form action="{{ route('siswa.submit') }}" method="POST">
        @csrf
        <label for="">NIS</label>
        <input type="number" name="nis" class="form-control mb-2">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control mb-2">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control mb-2">
        <label for="">No hp</label>
        <input type="text" name="no_hp" class="form-control mb-2">
        <label for="">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control mb-2">
        <label for="">Hobi</label>
        <input type="text" name="hobi" class="form-control mb-2">

        <button class="btn btn-primary">Tambah</button>
    </form>
@endsection
