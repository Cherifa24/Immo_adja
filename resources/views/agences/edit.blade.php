@extends('layouts.base')
@section('content')

    
        
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    
                    <form action=" {{route('agence.update',$agence)}}" method="post" onsubmit="">
                        @csrf
                        @method('put')
                        <div class="form-group form-row">
                            @include("components.input_field", ["label" => "nom", "name" => "raison_sociale","class"=>"col-6","value"=>$agence->raison_sociale])
                            @include("components.input_field", ["label" => "email", "name" => "email","class"=>"col-6","value"=>$agence->email])
                            
                        </div>
                        <div class="form-group form-row">
                            @include('components.input_field',["label" => "telephone","name"=>"contact","class"=>"col-6","value"=>$agence->contact])
                            @include('components.input_field',["label" => "adresse","name"=>"adresse","class"=>"col-6","value"=>$agence->adresse])
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
@stop