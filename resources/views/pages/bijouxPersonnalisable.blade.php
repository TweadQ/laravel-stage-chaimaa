<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Bijoux Personnalisables</h2>
        <div class="flex justify-center items-center gap-20">
            @foreach ($bijouxPersonnalisables as $bijouxPersonnalisable)
                <a href="{{ route('bijouxPersonnalisables.show', $bijouxPersonnalisable->id) }}">
                    <x-cards.cardClothes url_img="{{ $bijouxPersonnalisable->url_img }}" title="{{ $bijouxPersonnalisable->name }}" />
                </a>
            @endforeach
        </div>
    </section>
</x-layouts.layout>