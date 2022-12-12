<x-layout>
    <x-alert/>

    <div class="mt-20 space-y-5">
        <x-search/>

        <x-table :students="$students"/>
    </div>
</x-layout>
