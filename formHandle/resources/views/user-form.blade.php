<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md">
      <h1 class="text-2xl mb-4 text-center font-bold">User Form</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your input.</span>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <form action="/submit-user" method="POST" class="space-y-4">
          @csrf
          <div>
              <label for="name" class="block mb-2 font-semibold">Name:</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 {@error('name') border-red-500 @enderror}">
                  @error('name')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
          </div>
          <div>
              <label for="email" class="block mb-2 font-semibold">Email:</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}"
                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 {@error('email') border-red-500 @enderror}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
          </div>
          <!-- Checkbox -->
          <div>
            <label class="inline-flex items-center">
              <input type="checkbox" name="accept_terms" class="form-checkbox text-blue-600 rounded focus:ring-blue-500" />
              <span class="ml-2 text-gray-700">Accept Terms</span>
            </label>
          </div>
      
          <!-- Radio Buttons -->
          <div>
            <span class="text-gray-700">Choose an option:</span>
            <div class="mt-2 space-x-4">
              <label class="inline-flex items-center">
                <input type="radio" name="option" value="option1" class="form-radio text-blue-600 focus:ring-blue-500"
                  {{ old('option') == 'option1' ? 'checked' : '' }} />
                <span class="ml-2">Option 1</span>
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="option" value="option2" class="form-radio text-blue-600 focus:ring-blue-500"
                  {{ old('option') == 'option2' ? 'checked' : '' }} />
                <span class="ml-2">Option 2</span>
              </label>
            </div>
          </div>
      
          <!-- Range Slider -->
          <div>
            <label class="block text-gray-700 mb-2" for="range">Volume</label>
            <input id="range" name="volume" value="{{ old('volume') }}" type="range" min="0" max="100" class="w-full accent-blue-600" />
          </div>
      
          <!-- Dropdown -->
          <div>
            <label class="block text-gray-700 mb-2" for="dropdown">Select an item</label>
            <select id="dropdown" name="dropdown_item" class="block w-full mt-1 rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
              <option value="item1" {{ old('dropdown_item') == 'item1' ? 'selected' : '' }}>Item 1</option>
              <option value="item2" {{ old('dropdown_item') == 'item2' ? 'selected' : '' }}>Item 2</option>
              <option value="item3" {{ old('dropdown_item') == 'item3' ? 'selected' : '' }}>Item 3</option>
            </select>
          </div>

          <!-- Multiple Checkboxes -->
          <div>
            <span class="text-gray-700">Select your hobbies:</span>
            <div class="mt-2 space-y-2">
              <label class="inline-flex items-center">
                <input type="checkbox" name="hobbies[]" value="reading" class="form-checkbox text-blue-600 rounded focus:ring-blue-500"
                  {{ is_array(old('hobbies')) && in_array('reading', old('hobbies')) ? 'checked' : '' }} />
                <span class="ml-2 text-gray-700">Reading</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="hobbies[]" value="sports" class="form-checkbox text-blue-600 rounded focus:ring-blue-500"
                  {{ is_array(old('hobbies')) && in_array('sports', old('hobbies')) ? 'checked' : '' }} />
                <span class="ml-2 text-gray-700">Sports</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="hobbies[]" value="music" class="form-checkbox text-blue-600 rounded focus:ring-blue-500"
                  {{ is_array(old('hobbies')) && in_array('music', old('hobbies')) ? 'checked' : '' }} />
                <span class="ml-2 text-gray-700">Music</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="hobbies[]" value="travel" class="form-checkbox text-blue-600 rounded focus:ring-blue-500"
                  {{ is_array(old('hobbies')) && in_array('travel', old('hobbies')) ? 'checked' : '' }} />
                <span class="ml-2 text-gray-700">Travel</span>
              </label>
            </div>
          </div>
          <button type="submit"
              class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Submit</button>
      </form>
  </div>
