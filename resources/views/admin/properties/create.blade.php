@extends('admin.admin')

@yield('title', 'Créer un utilisateur')

@section('content')
    @include('admin.components.form.new')
@endsection