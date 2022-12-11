<x-layout>
    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf
        @method('patch')

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="mb-6">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    First name
                </label>
                <input type="text" id="first_name" name="first_name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="John"
                       value="{{ old('first_name', $student->first_name) }}"
                       >
                <x-input-error :messages="$errors->get('first_name')"/>
            </div>
            <div class="mb-6">
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Last name
                </label>
                <input type="text" id="last_name" name="last_name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Doe"
                       value="{{ old('last_name', $student->last_name) }}"
                       >
                <x-input-error :messages="$errors->get('last_name')"/>
            </div>
        </div>

        <div class="mb-6">
            <label for="group_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Group number
            </label>
            <input type="text" id="group_number" name="group_number"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="ABC123"
                   value="{{ old('group_number', $student->group_number) }}"
                   >
            <x-input-error :messages="$errors->get('group_number')"/>
        </div>
        <div class="mb-6">
            <label for="points" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Points
            </label>
            <input type="number" id="points" name="points"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="300"
                   value="{{ old('points', $student->points) }}"
                   >
            <x-input-error :messages="$errors->get('points')"/>
        </div>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>
    </form>
</x-layout>
