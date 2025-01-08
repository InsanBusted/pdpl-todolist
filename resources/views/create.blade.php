@extends('layouts.main')

@push('head')
<title>Add Todo</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.create")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Name Work</label>
                <input type="text" name="name" class="form-control">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>

                <label for="" class="form-label mt-4">Skala Priority</label>
                <select class="form-select" aria-label="Default select example" name="prioritas">
                    <option selected>Choose Priority</option>
                    <option value="1">HIGH</option>
                    <option value="2">MEDIUM</option>
                    <option value="3">LOW</option>
                  </select>
               
                <select class="form-select d-none" aria-label="Default select example" name="status">
                    <option selected value="0">HIGH</option>
                  </select>
               
                
                

                <label for="" class="form-label mt-4">Work Description</label>
                <textarea type="text" name="work" class="form-control"></textarea>
                <div class="text-danger">
                    @error('work')
                        {{$message}}
                    @enderror
                </div>

                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="dueDate" class="form-control">


                <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
            </form>
        </div>
    </div>
</div>

@endsection
