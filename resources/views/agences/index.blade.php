@extends('layouts.base')
@section('content')
    <div class="block block-rounded">
        <div class="block-header">
            <!--div>
                <a href="" class="btn btn-outline-primary">
                    <i class="fa fa-2x fa-file-export"></i> Exporter
                </a>
            </div-->
            <a href="{{ route('agence.create') }}" class="btn btn-outline-primary">
                <i class="fas fa-plus"></i> Ajout
            </a>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">Id</th>
                        <th class="d-none d-sm-table-cell text-center" >Nom</th>
                        <th class="d-none d-sm-table-cell text-center" >Email</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Contact</th>
                        
                        <th class="d-none d-sm-table-cell text-center" >Adresse</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($agences as $item)
                    <tr>
                        <td class="text-center font-size-sm"> {{$item->id}}</td>
                        <td class="text-center font-size-sm text-uppercase"> {{$item->raison_sociale}} </td>
                        <td class="d-none d-sm-table-cell text-center text-capitalize"> {{$item->email}}</td>
                        <td class="text-center d-none d-sm-table-cell font-size-sm"> {{$item->contact}}</td>
                        <td class="text-center d-none d-sm-table-cell font-size-sm">{{$item->contact}} </td>
                        <td class="text-center d-none d-sm-table-cell font-size-sm">{{$item->adresse}} </td>
                        <td class="text-center"> 
                            <form action=" " method="GET">
                                <button type="submit" class="btn btn-sm btn-success">
                                    <span><i class="far fa-eye fa-lg"></i></span>                                
                                </button> 
                            </form>      
                            <form action="{{route('agence.edit',$item)}}" method="GET">
                                <button type="submit" class="btn btn-sm btn-warning">
                                    <span><i class="far fa-edit fa-lg"></i></span>
                                </button> 
                            </form>                                      
                            <form action=" {{route('agence.delete',$item)}}" method="POST">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-sm btn-danger">
                                        <span><i class="fa fa-fw fa-times mr-1"></i></span>
                                </button> 
                            </form>                                 
                        </td> 
                    </tr>
                    @empty
                        <div class="my-auto">
                            <h3 class="text-center">Aucune Agence.</h3>
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop



