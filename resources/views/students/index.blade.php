@extends('layout/main')
@section('title','Student List')

@section('container')
<div class="container bg-white h-auto my-lg-5 rounded shadow pt-2 pb-4">
    <div class=" row">
        <div class="col-md-12">
            <div class="mt-4 m-0 p-0 clearfix">
                <h1 class="float-left">Students List</h1>
                <a href="{{url('/students/create')}}" class="btn btn-outline-success float-right mt-1">Add New Data</a>
            </div>

            <ul class="list-group mt-2">
                @foreach ($student as $s)
                <li class="list-group-item">
                    {{ $s->nama }}
                    <div class="d-inline-block float-right">
                        <form action="{{url('/students/'.$s->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="badge btn btn-outline-danger float-right ml-1">Delete</button>
                        </form>
                        <a href="{{url('/students/'.$s->id)}}"
                            class="badge btn btn-outline-info float-right">Details</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
