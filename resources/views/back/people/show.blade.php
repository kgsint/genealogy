@section('title')
    &vert; {{ __('person.profile') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        {{ __('person.profile') }}
    </x-slot>

    <div class="w-full p-2 space-y-5 overflow-x-auto">
        <livewire:people.heading :person="$person" />

        <div class="flex flex-wrap gap-5">
            <div class="flex flex-col flex-grow gap-5 md:max-w-max">
                <livewire:people.profile :person="$person" />
            </div>

            <div class="flex flex-col flex-grow gap-5 md:max-w-max">
                <livewire:people.family :person="$person" />
                <livewire:people.partners :person="$person" />
                <livewire:people.children :person="$person" />
                <livewire:people.siblings :person="$person" />
                <livewire:people.files :person="$person" />
            </div>

            <div class="flex flex-col flex-grow gap-5 overflow-x-auto md:max-w-max">
                <livewire:people.ancestors :person="$person" />
                <livewire:people.descendants :person="$person" />
            </div>
        </div>
    </div>
</x-app-layout>
