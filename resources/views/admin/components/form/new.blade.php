<form action="{{ $client ? route('admin.update', $client->id) : route('admin.store') }}" method="POST">
  @csrf
  @if ($client)
  @method('PUT')
  @endif
  <div class="mb-4">
    <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
    <input type="text" id="name" name="name" value="{{ old('name',  $client->name) }}" class="form-input mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required autofocus>
    @error('name')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-4">
    <label for="mail" class="block text-gray-700 font-bold mb-2">Email</label>
    <input type="email" id="mail" name="mail" value="{{ old('mail', $client->mail) }}" class="form-input mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
    @error('mail')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
  </div>

  <div class="flex justify-end">
    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      @if($client->id)
      Modifier
      @else
        Créer
      @endif
    </button>
  </div>
</form>
