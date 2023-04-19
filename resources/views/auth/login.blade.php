@extends('base')

@section('content')
<h1 class="text-3xl font-bold mt-10 mb-6 text-center">Se connecter</h1>
<form method="POST" action="{{ route('auth.login') }}" class="max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="email" class="block mb-2 font-bold">Email</label>
        <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-gray @error('email') border-red-500 @enderror" value="{{ old('email') }}">
        @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 font-bold">Mot de passe</label>
        <input type="password" name="password" id="password" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-gray @error('password') border-red-500 @enderror">
        @error('password')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>
    
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Se connecter</button>
</form>
@endsection