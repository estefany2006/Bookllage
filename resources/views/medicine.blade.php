<x-layout>
    <x-categoryType category="Medicine">
        @foreach ($inventoryItems as $item)
            <x-inventorycard id="{{ $item->id }}"
                name="{{ $item->book->name}}" publisher="{{ $item->user->first_name}}" price="${{ $item->price}}" edition="4" date="23/23/2" />
        @endforeach
    </x-categoryType>
</x-layout>
