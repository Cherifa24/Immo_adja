@extends('layouts.base')
@section('content')

        
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    
                    <form action="{{route('acquereur.update',$acquereur)}} " method="POST" onsubmit="">
                        @csrf
                        @method('put')
                        <div class="form-group form-row">
                            @include("components.input_field", ["label" => "nom", "name" => "nom","class"=>"col-6","value"=>$acquereur->nom])
                            @include("components.input_field", ["label" => "prénom", "name" => "prenom","class"=>"col-6","value"=>$acquereur->prenom])
                            
                        </div>
                        <div class="form-group form-row">
                            @include('components.input_field',["label" => "email","name"=>"email","class"=>"col-6","value"=>$acquereur->email])
                            @include('components.input_field',["label" => "contact","name"=>"contact","class"=>"col-6","value"=>$acquereur->contact])
                        </div>
                        <div class="form-group form-row">
                            @include('components.input_field',["label" => "adresse","name"=>"adresse","class"=>"col-12","value"=>$acquereur->adresse])
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
@stop