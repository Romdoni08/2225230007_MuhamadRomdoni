@extends('layouts.master')

@section('content')

    <div class="container,", style="
    background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.webp');
    height: 100vh;
  ">
        <a class="btn btn-primary" href="/calis/create">Registration</a>
        <table class="table table-hover", style="color: white;">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Alasan</th>
                <th>AKSI</th>
            </tr>
            @foreach($calis as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->Nama}}</td>
                <td>{{$c->Jenis_Kelamin}}</td>
                <td>{{$c->Alamat}}</td>
                <td>{{$c->Alasan}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/calis/{{$c->id}}/edit">Edit</a>
                        <form action="/calis/{{$c->id}}" method="POST">
                            @csrf
                            @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
    </table>
    </div>
@endsection
