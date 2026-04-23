@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
            <i class="mdi mdi-handshake"></i>
        </span> Gestion des Partenaires
    </h3>
</div>

<div class="row">
    <!-- Formulaire d'ajout -->
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter un Partenaire</h4>
                <p class="card-description">Logo + Nom</p>
                
                <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nom du Partenaire</label>
                        <input type="text" name="name" class="form-control" placeholder="Ex: CocaCola" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Logo de l'entreprise</label>
                        <input type="file" name="image" class="file-upload-default" required>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Choisir une image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Parcourir</button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ordre d'affichage</label>
                        <input type="number" name="order" class="form-control" value="0">
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2 btn-block">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Liste des partenaires -->
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Partenaires Actuels</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-light">
                                <th> Logo </th>
                                <th> Nom </th>
                                <th> Ordre </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($partners as $partner)
                            <tr>
                                <td>
                                    @if($partner->image)
                                        <img src="{{ asset($partner->image) }}" style="max-height: 50px; max-width: 100px;">
                                    @else
                                        <span class="text-muted">Pas d'image</span>
                                    @endif
                                </td>
                                <td class="font-weight-bold"> {{ $partner->name }} </td>
                                <td> {{ $partner->order }} </td>
                                <td>
                                    <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Supprimer ce partenaire ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="mdi mdi-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Aucun partenaire trouvé.</td>
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