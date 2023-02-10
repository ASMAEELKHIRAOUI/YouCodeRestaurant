
{{-- <x-app-layout> --}}
    <link rel="stylesheet" href="../../../public/app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />


    


    {{-- <div id="dashboard"> --}}
        {{-- <div tabindex="-1" aria-hidden="false" class="fixed top-96 z-50 w-full p-4 overflow-y-auto md:inset-0 h-modal md:h-full"> --}}
          {{-- <div class="mt-5 md:col-span-2 md:mt-0"> --}}
            <form action="{{ route('meals.update',$meal->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="shadow sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                  {{-- @if ($errors->any())
                      <div class="text-red">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  @csrf --}}
                  <div class="grid grid-cols-3 gap-6">
                    <div class="grid col-span-3 sm:col-span-2">
                        <label class="col-form-label">Title:</label>
                        <input class="form-input mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="name" value="{{ $meal->name }}"/>
                    </div>
                  </div>
      
                  <div>
                    <label for="about" class="block text-sm font-medium text-gray-700">Description:</label>
                    <div class="mt-1">
                      <textarea rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="" name="description">{{ $meal->description }}</textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Brief description of the meal. URLs are hyperlinked.</p>
                  </div>
                  <div class="relative max-w-sm">
                    <label for="about" class="block text-sm font-medium text-gray-700">Date:</label>
                    {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none mt-5">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div> --}}
                    <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="date" value="{{ $meal->date }}">
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
        {{-- </div> --}}
      {{-- </div> --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
      <script src="../path/to/flowbite/dist/datepicker.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>

{{-- </x-app-layout> --}}
