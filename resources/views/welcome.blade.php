@extends('layouts.master')
@section('content')
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            <div class="row">
            <div class="col-12">
                <h1>Welcome!</h1>
                <p>Aplikasi CRUD sederhana menggunakan Framework Laravel ini dibuat berdasarkan video tutorial dibawah ini. <br> 
                Semoga Bermanfaat!</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FHQG0NR7XPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr>
                <p>Created by <a href="https://github.com/janzenfaidiban" target="_blank">Janzen Faidiban (github)</a></p>
            </div>
            </div>
        </div>

@endsection