@extends ('layouts.master')

@section ('content')
    
    <div class="container", style="
    background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/011.webp');
    height: 100vh;
  ">
        <h1 style= "color:aliceblue" class="text-center">Edit Data</h1>
        
        <form action="/calis/{{$calis->id}}" method="POST" style= "color:aliceblue">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$calis->Nama}}">
            </div>
            <select class="form-select" name="Jenis Kelamin">
                    <option value="">Pilih jenis Kelamin</option>
                    <option value="L" @if($calis->Jenis_Kelamin == "L") selected @endif>Laki-laki</option>
                    <option value="P" @if($calis->Jenis_Kelamin == "P") selected @endif>Perempuan</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat:</label>
                <textarea class="form-control" name="Alamat">{{$calis->Alamat}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alasan:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$calis->Alasan}}">
            </div>
                <input type="submit" name="submit" class="btn btn-info" value="save">
    </div>
    </form>
@endsection