@extends('layouts.inc.home-navbar')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <h1>Universities</h1>
    <div class="row">
        @foreach ($universities as $university)
            <div class="col-md-4">
                <div class="card" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $university->name }}</h5>
                        
                        <img src="{{ asset('uploads/universities/'.$university->image) }}" class="card-img-top" alt="University Image" style="height: 215px;">
                        <a href="{{ route('details', ['universities_id' => $university->id]) }}" >Voir les détails</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
