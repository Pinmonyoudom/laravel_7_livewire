<div class="container mx-auto mt-12">
    <h3 class="mb-12 text-center text-gray-900 text-4xl font-semibold">Livewire search</h3>

    <!-- Searchbox -->
    <div class="w-full p-6 mb-6 bg-white border rounded shadow-xl">
        <input
            wire:model="search"
            type="text"
            placeholder="Search..."
            class="form-control"
        >
    </div>
    <!-- // Searchbox -->

    <!-- Search Results -->
    <div class="w-full p-6 divide-y bg-white border rounded shadow-xl">
        @foreach($contacts as $contact)
            <div class="p-2">
                <h5 class="text-md font-semibold text-gray-900">{{ $contact->name }}</h5>
                <p class="text-gray-900">
                    {{ $contact->phone_number }}
                </p>
            </div>
        @endforeach

        @if($contacts == '[]')
            <p class="text-gray-900">No contacts found...</p>
        @endif
    </div>
    <!-- // Search Results -->
</div>