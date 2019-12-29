@extends('layouts.master')
@section('content')
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            <div class="row">
            <div class="col-6">
                <h1>Data Siswa</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Siswa
                </button>
            </div>
                <table class="table table-hover">
                    <tr>
                        <th>NAMA BELAKANG</th>
                        <th>NAMA BELAKANG</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama_depan}}</td>
                        <td>{{$siswa->nama_belakang}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>
                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
        <form action="/siswa/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" class="form-control" name="nama_depan" id="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option></option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama" aria-describedby="emailHelp" placeholder="Agama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
        </div>
    </div>
@endsection