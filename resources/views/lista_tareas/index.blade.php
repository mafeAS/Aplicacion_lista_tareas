@extends('home')


@section('content')




<div class="row" >
    <div class="col-md-2"></div>
    <div class="col-md-8">

    
    <h3 style="font-weight: bold">LISTA DE TAREAS</h3>
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        Añadir tarea a la lista
    </button>
        <br><br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">DESCRIPCIÓN TAREA</th>
                        <th scope="col">OBSERVACIÓN TAREA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lista_tareas as $lista)
                    <tr class="">
                        <td scope="row">{{$lista->id}}</td>
                        <td>{{$lista->descripcion}}</td>
                        <td>{{$lista->observaciones}}</td>
                        <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$lista->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                    </svg>
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$lista->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                            </button>                    
                        </td>
                    </tr>
                    @include('lista_tareas.info')
                    @endforeach
                </tbody>
            </table>
        </div>
    @include('lista_tareas.create')

    </div>
    <div class="col-md-2"></div>
</div>










@endsection