@extends('layout/main')
@section('title','Student List')

@section('container')
<div class="container bg-white h-auto my-lg-5 rounded shadow pt-2 pb-4">
    <div class="row">
        <div class="col-md-10">
            <div class="mt-4 clearfix m-0 p-0">
                <h2 class="float-left">Edit Students Data</h2>
                <a href="{{url('/students/'.$student->id)}}" class="btn btn-outline-danger float-right">Return</a>
            </div>

            <form method="post" action="{{url('/students/'.$student->id)}}">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">
                    @error('nama')
                    <div class="is-invalid text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                        placeholder="Masukan NIM" name="nim" value="{{$student->nim}}">
                    @error('nim')
                    <div class=" is-invalid text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Masukan Email" name="email" value="{{$student->email}}">
                    @error('email')
                    <div class=" is-invalid text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        placeholder="Masukan Jurusan" name="jurusan" value="{{$student->jurusan}}">
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                    </select>
                    @error('jurusan')
                    <div class="is-invalid text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-outline-success float-right">Save Data!</button>
            </form>

        </div>
    </div>
</div>
</div>
@endsection
