@extends('layouts.base')

@section('content')
<div class="container">

    <form action="{{route('bien.update',$bien)}}" method="get" nctype="multipart/form-data" class="m-5">
        
<div class="from-row d-flex">
        <div class="mb-3">
            <label for="type_offre" class="form-label text-capitalize">type d'offre</label>
            <select name="type_offre" id="type_offre" class="form-select">
                <option value="0" selected>Choisir</option>
                <option value="vendre">A vendre</option>
                <option value="louer">A louer</option>
            </select>
        </div>
        <div class="mb-3 m-auto">
            <label for="etat" class="form-label text-capitalize">etat</label>
            <select name="etat" id="etat" class="form-select">
                <option value="0" selected>Choisir</option>
                <option value="nouveau">nouveau</option>
                <option value="user">usé</option>
                <option value="second hand">secobd hand</option>
            </select>
        </div>
</div>

        <div class="mb-3">
            <label for="prix_vente" class="form-label text-capitalize">prix</label>
            <input class="form-control" type="text" name="prix_vente" id="prix_vente">
        </div>
        <div class="mb-3">
            <label for="date_publication" class="form-label text-capitalize">date</label>
            <input class="form-control" type="date" name="date_publication" id="date_publication">
        </div>
        <div class="mb-3">
            <label for="localisation" class="form-label text-capitalize">localisation</label>
            <input class="form-control" type="text" name="localisation" id="localisation">
        </div>
        <div class="mb-3">
            <label for="image">Sélectionnez une image :</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="mb-3">
            <!--label for="description">description </label-->
            <textarea name="description" class="form-control" id="description" cols="30" rows="3" placeholder="Description"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Enregistrer</button>
    </form>
</div>
@stop