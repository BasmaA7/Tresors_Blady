@extends('layout.dashboard')
@section('content')
<div class="text-gray-900 bg-gray-200">
  <div class="p-4 flex">
      <h1 class="text-3xl">
          Catégorie
      </h1>
  </div>
  <div class="p-4 flex">
    <button id="openPopup" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ouvrir la popup</button>

    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
      <div class="bg-white p-8 rounded shadow-lg">
        <button id="closePopup" class="absolute top-0 right-0 p-4">&times;</button>
        <div>
          <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
              <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
              <input type="text" name="title"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
              <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
              <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="px-3 py-4 flex justify-center">
      <table class="w-full text-md bg-white shadow-md rounded mb-4">
          <tbody>
              <tr class="border-b">
                  <th class="text-left p-3 px-5">ID</th>
                  <th class="text-left p-3 px-5">Titre</th>
                  <th class="text-left p-3 px-5">Image</th>
                  <th class="text-left p-3 px-5">Action</th>
                  <th></th>
              </tr>
              <tr class="border-b hover:bg-orange-100 bg-gray-100">
                  <td class="p-3 px-5"><input type="text"  value="cte.id"  class="bg-transparent"></td>
                  <td class="p-3 px-5"><input type="text"  value="cte.id" class="bg-transparent"></td>
                  <td class="p-3 px-5"><input type="text" value="cte.id" class="bg-transparent"></td>
                  <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
              </tr>
            
          </tbody>
      </table>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('openPopup').addEventListener('click', function () {
    document.getElementById('popup').classList.remove('hidden');
  });

  window.addEventListener('click', function(event) {
            var editModal = document.getElementById('popup');
            if (event.target == popup) {
                editModal.classList.add('hidden');
            }
        });
});
</script>

@endsection
