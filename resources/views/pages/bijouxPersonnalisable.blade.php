<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Bijoux Personnalisables</h2>
        <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2">
            @foreach ($bijouxPersonnalisables as $bijouxPersonnalisable)
                <a href="{{ route('bijouxPersonnalisables.show', $bijouxPersonnalisable->id) }}">
                    <x-cards.cardClothes url_img="{{ $bijouxPersonnalisable->url_img }}" title="{{ $bijouxPersonnalisable->name }}" />
                </a>
            @endforeach
        </div>
        <div class="py-10 px-10 flex justify-center">
            {{ $bijouxPersonnalisables->links('pagination::tailwind') }}
        </div>
    </section>
</x-layouts.layout>