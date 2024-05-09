@extends('layouts.master')

@section('title', 'Universities')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="">Add Universities</h4>
        </div>

        <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

            <form action="{{ url('admin/add-universities') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">University Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">University Description</label>
                    <textarea name="description" rows="5" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>

        </div>

    </div>
</div>
@endsection
