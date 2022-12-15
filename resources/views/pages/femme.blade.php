<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Femmes</h2>
        <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2">
            @foreach ($vetements as $vetement)
                <a href="{{ route('vetements.show', $vetement->id) }}">
                    <x-cards.cardClothes url_img="{{ $vetement->url_img }}" title="{{ $vetement->name }}" />
                </a>
            @endforeach
        </div>
        <div class="py-10 px-10 flex justify-center">
            {{ $vetements->links('pagination::tailwind') }}
        </div>
    </section>
</x-layouts.layout>