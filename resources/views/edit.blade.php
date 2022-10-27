@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('home.update', $user) }}"
                            method="POST"
                            enctype="multipart/form-data">
                        <div class="form-group">
                            <label >Name *</label>
                            <input type="text" name="name" required value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="form-group">
                            <label >ID *</label>
                            <input type="text" name="cedula" required value="{{ old('phone', $user->cedula) }}" disabled>
                        </div>
                        <div class="form-group">
                            <label >Celular *</label>
                            <input type="text" name="phone" required value="{{ old('phone', $user->phone) }}">
                        </div>
                        <div class="form-group">
                            <label >Email *</label>
                            <input type="email" name="email" required value="{{ old('email', $user->email) }}" disabled>
                        </div>

                        <div>
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
