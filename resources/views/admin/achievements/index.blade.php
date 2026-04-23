@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-warning text-white mr-2">
            <i class="mdi mdi-trophy"></i>
        </span> Gestion des Réalisations (Boîtes Header)
    </h3>
</div>

<div class="row">
    <!-- Formulaire d'ajout -->
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter une Réalisation</h4>
                <form action="{{ route('admin.achievements.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Titre Principal (Ex: Accompagnement)</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sous-titre (Ex: Systèmes & Certifications)</label>
                        <input type="text" name="subtitle" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Classe Icone FontAwesome (Ex: fa fa-lightbulb-o)</label>
                        <input type="text" name="icon" class="form-control" placeholder="fa fa-check" required>
                        <small class="text-muted">Tu peux copier les icônes depuis <a href="https://fontawesome.com/v4/icons/" target="_blank">FontAwesome 4</a></small>
                    </div>
                    <div class="form-group">
                        <label>Ordre d'affichage</label>
                        <input type="number" name="order" class="form-control" value="1">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary btn-block">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Liste des réalisations -->
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Réalisations</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-light">
                                <th> Icône </th>
                                <th> Titre </th>
                                <th> Description </th>
                                <th> Ordre </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($global_achievements as $item)
                            <tr>
                                <td class="text-center"><i class="{{ $item->icon }} text-primary"></i></td>
                                <td class="font-weight-bold"> {{ $item->title }} </td>
                                <td> {{ $item->subtitle }} </td>
                                <td> {{ $item->order }} </td>
                                <td>
                                    <form action="{{ route('admin.achievements.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Supprimer cette réalisation ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Aucune réalisation trouvée.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection