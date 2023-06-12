@extends('layouts.base')

@section('content')
<div class="container">
    <form action="" method="post" nctype="multipart/form-data">
        <div class="mb-3">
            <label for="type_offre" class="form-label text-capitalize">type d'offre</label>
            <select name="type_offre" id="type_offre" class="form-select">
                <option value="0" selected>Choisir</option>
                <option value="vendre">A vendre</option>
                <option value="louer">A louer</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label text-capitalize">etat</label>
            <select name="etat" id="etat" class="form-select">
                <option value="0" selected>Choisir</option>
                <option value="nouveau">nouveau</option>
                <option value="user">usé</option>
                <option value="second hand">secobd hand</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label text-capitalize">prix</label>
            <input class="form-control" type="text" name="prix" id="prix">
        </div>
        <div class="mb-3">
            <label for="date_publication" class="form-label text-capitalize">date</label>
            <input class="form-control" type="date" name="date_publication" id="date_publication">
        </div>
        <div class="mb-3">
            <label for="localisation" class="form-label text-capitalize">localisation</label>
            <input class="form-control" type="date" name="localisation" id="localisation">
        </div>
        <div class="mb-3">
            <label for="image">Sélectionnez une image :</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="description">description </label>
            <input type="file" id="description" name="description" accept="image/*">
        </div>
        <button class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@stop