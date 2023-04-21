@extends('admin.admin')



@section('content')
<div>
<div class="flex space-y-4 text-right w-full">
<h1 class="text-2xl font-bold mb-4 w-3/4 text-left">@yield('title', 'Gestion des informations client')</h1>
<a href="{{ route('admin.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 justify-self-right">
    Ajouter un client
    </a>
</div>
<div class="flex flex-col md:flex-row">
 
  <div class="w-full md:w-4/5 md:pr-4">
    <table class="w-full border border-gray-200 divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($clients as $client)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $client->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $client->name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $client->mail }}</td>
            <td class="px-3 py-4 whitespace-nowrap text-right text-sm font-small w-200">
                <a href="{{ route('admin.edit', $client->id) }}" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                
                <form action="{{ route('admin.destroy', $client->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                </form><a href="{{ route('admin.login_infos.create', $client->id) }}" class="text-green-600 hover:text-green-900">Ajouter des identifiants</a>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
</div>
@endsection