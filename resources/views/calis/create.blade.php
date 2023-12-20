@extends('layouts.master')

@section('content')

    <div class="container", style="
    background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/018.webp');
    height: 100vh;
  ">
        <h1 style= "color:aliceblue" class="text-center";>Registration Now!</h1>
        <form action="/calis/store" method="POST", style= "color:aliceblue">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select class="form-select" name="Jenis Kelamin">
                    <option value="">Pilih jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat:</label>
                <textarea class="form-control" name="Alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alasan:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
                <input type="submit" name="submit" class="btn btn-info" value="save">

        </form>
    </div>
    
@endsection