@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                    @foreach($users as $user)
                        <div class="row row-cols-5">
                            <div class="col">{{$user->name}}</div>
                            <div class="col">{{$user->cedula}}</div>
                            <div class="col">{{$user->phone}}</div>
                            <div class="col">{{$user->email}}</div>
                            <div class="col">
                                <tr>
                                    <td>
                                         <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                    <td>
                                    <form action="{{route ('home.destroy', $user)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"
                                             value="Eliminar"
                                             class="btn btn-danger btn-sm"
                                             onclick="return confirm('Deseas eliminar..?')">
                                        </form>
                                    </td>
                                </tr>
                        </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
