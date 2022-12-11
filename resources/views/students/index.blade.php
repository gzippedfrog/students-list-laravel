<x-layout>
    <x-alert/>

    <x-search class="mb-3"/>

    <div class="overflow-x-auto relative rounded-md">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    First name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last name
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Group number
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Points
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/>
                            </svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr class="bg-white border-b last:border-b-0 dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{ $student->first_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->last_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ strtoupper($student->group_number) }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->points }}
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href={{ "/students/$student->id/edit" }}
                                class="font-medium text-blue-600 dark:text-blue-500">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $students->links() }}
    </div>
</x-layout>
