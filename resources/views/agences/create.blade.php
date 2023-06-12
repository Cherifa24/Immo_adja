@extends('layouts.base')
@section('content')

    
        
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    
                    <form action=" {{route('agence.store')}}" method="post" onsubmit="">
                        @csrf
                        
                        <div class="form-group form-row">
                            @include("components.input_field", ["label" => "nom", "name" => "raison_sociale","class"=>"col-6"])
                            @include("components.input_field", ["label" => "email", "name" => "email","class"=>"col-6"])
                            
                        </div>
                        <div class="form-group form-row">
                            @include('components.input_field',["label" => "telephone","name"=>"contact","class"=>"col-6"])
                            @include('components.input_field',["label" => "adresse","name"=>"adresse","class"=>"col-6"])
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
@stop