<x-layout>
    <x-categoryType category="Communications">
        @foreach ($inventoryItems as $item)
            <x-inventorycard name="{{ $item->book->name}}" publisher="{{ $item->user->first_name}}" price="${{ $item->price}}" edition="4" date="23/23/2" />
        @endforeach
    </x-categoryType>
</x-layout>
