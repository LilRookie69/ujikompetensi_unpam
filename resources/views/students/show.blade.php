@extends('layout/main')
@section('title','Student Details')

@section('container')
<div class="container bg-white h-auto my-lg-5 rounded shadow pt-2 pb-4">
    <div class="row">
        <div class="col-md-5">
            <h1 class="mt-3">Students List</h1>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                    <p class="card-text">{{ $student->email }}<br>{{ $student->jurusan }}</p>
                    <a href="{{url('/students')}}" class="btn btn-outline-info float-right ml-1">Kembali</a>
                    <a href="{{url('/students/'.$student->id)}}/edit"
                        class="btn btn-outline-success float-right ml-1">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
