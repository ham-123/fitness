@extends('layouts.admin')

@section('content')
<h1>Liste des entraineurs</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Cours</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entraineurs as $entraineur)
        <tr>
        <td scope="row">{{ $loop->iteration }}</td>
            <td>
            @if($entraineur->image)
            <!-- J'ai remplacé la balise img par une div avec la classe team-item -->
            <div class="team-item mb-md-30">
                <div class="team-member">
                    <div class="thumb">
                        <!-- J'ai ajouté un lien vers la page de détails de l'entraineur -->
                        <a href="{{ route('admin.entraineurs.show', $entraineur->id) }}">
                            <!-- J'ai utilisé la fonction url pour générer l'URL de l'image -->
                            <img src="{{ url('storage/' . $entraineur->image)  }}" alt="Image" width="100" style="border-radius: 50%;">
                        </a>
                    </div>
                    <div class="content">
                        <div class="member-info">
                            <!-- J'ai affiché le nom et le prénom de l'entraineur -->
                            <h4 class="name">{{ $entraineur->user->nom }} {{ $entraineur->user->prenom }}</h4>
                            <!-- J'ai affiché le nom du cours de l'entraineur -->
                            <h6 class="designation">{{ $entraineur->cours->nom_cours }}</h6>
                            <!-- J'ai ajouté des icônes de réseaux sociaux (à modifier selon vos besoins) -->
                            
                            <!-- J'ai ajouté un bouton pour voir le profil de l'entraineur -->
                            <div class="team-footer">
                                <a class="btn" href="{{ route('admin.entraineurs.show', $entraineur->id) }}">VOIR LE PROFIL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @else
            Pas d'image
            @endif
        </td>

 
    
        <td>
            <div class="btn-group">
                <a href="{{ route('admin.entraineurs.edit', $entraineur->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                <form action="{{ route('entraineurs.destroy', $entraineur->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet entraineur?')">Supprimer</button>
                </form>
            </div>
        </td>

    </tr>
    @endforeach
</tbody>
</table>

<a href="{{ route('admin.entraineurs.create') }}" class="btn btn-success">Ajouter un entraineur</a>
@endsection
