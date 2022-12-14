@if (session('message'))
    <div class="relative">
        <div
            class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 absolute w-full right-0 z-50"
            role="alert"
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"
        >
            {{ session('message') }}
        </div>
    </div>
@endif
