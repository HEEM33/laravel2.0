@extends('layouts.app')

@section('title', 'Liste des Commentaires')

@section('content')
<div class="container">
    <div align="right"><a href="{{ url('admin/dashboard/') }}"  class="btn btn-primary mt-3">Retour</a></div>
    <h1>Liste des Commentaires</h1>
    <div class="row">
        <div class="col-md-8">
            @if(count($comments) > 0)
                @foreach($comments as $comment)
                    <div class="card mt-3">
                        <div class="card-body">
                        @if ($comment->user)
                            <h5 class="card-title">{{ $comment->user->name }}</h5>
                        @else
                            <h5 class="card-title">Utilisateur inconnu</h5>
                        @endif

                            <p class="card-text">{{ $comment->comment }}</p>
                            <p><small>Posté le {{ $comment->created_at->format('d/m/Y H:i') }}</small></p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('admin/delete-comments/'.$comment->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Aucun commentaire disponible pour le moment.</p>
            @endif
        </div>
    </div>
</div>
@endsection
