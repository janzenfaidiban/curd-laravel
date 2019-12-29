@extends('layouts.master')  
@section('content')
            <h1>Edit data siswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan" id="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                            <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" name="agama" id="agama" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"> {{$siswa->alamat}}</textarea>
                    </div>         
                    <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
@endsection