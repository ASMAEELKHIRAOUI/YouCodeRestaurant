
<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />

    <div class="flex justify-end mt-3">
      <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="btn block focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
        + Add Meal
      </button>
    </div>
@if ($message = Session::get('success'))
    <div class="bg-emerald-500/50 w-72 rounded h-8 mx-16 mt-12 text-center text-xl">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="py-12">
        <table class="table-fixed w-11/12 mx-16">
            <thead>
              <tr class="border-b-2 border-stone-900">
                <th>images</th>
                <th>Meal</th>
                <th>Description</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="">
              @foreach ($meals as $meal)
              <tr class="border-b border-stone-900 py-60">
                <td><img src="img/{{ $meal->image }}" alt="" style="height:100px;width:100px"></td>
                <td class="text-center">{{ $meal->name }}</td>
                <td class="text-center">{{ $meal->description }}</td>
                <td class="text-center">{{ $meal->date }}</td>
                <td class="">
                  <form class="flex justify-center space-x-6" action="{{ route('meals.destroy',$meal->id) }}" method="POST">
                    <a href="{{ route('meals.edit',$meal->id) }}">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={0.5} stroke="currentColor" style="width:30px;height:30px" class="mt-1 text-orange-600">
                          <path strokeLinecap="round" strokeLinejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                    </a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" style="width:30px;height:30px" class="mt-1 text-red-800">
                          <path strokeLinecap="round" strokeLinejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                    </button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <div>
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
          <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="{{route('meals.store')}}" method="POST" enctype="multipart/form-data">
              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                  @if ($errors->any())
                      <div class="text-red-600">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  @csrf
                  <div class="grid grid-cols-3 gap-6">
                    <div class="grid col-span-3 sm:col-span-2">
                        <label class="col-form-label">Title:</label>
                        <input class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="name"/>
                    </div>
                  </div>
      
                  <div>
                    <label for="about" class="block text-sm font-medium text-gray-700">Description:</label>
                    <div class="mt-1">
                      <textarea rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="" name="description"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Brief description of the meal. URLs are hyperlinked.</p>
                  </div>
                  <div class="relative max-w-sm">
                    <label for="about" class="block text-sm font-medium text-gray-700">Date:</label>
                    <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="date">
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700">Image</label>
                    <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" type="file" class="sr-only" name="image">
                          </label>
                          <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
      <script src="../path/to/flowbite/dist/datepicker.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
</x-app-layout>