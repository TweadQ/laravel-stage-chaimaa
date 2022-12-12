<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Hommes</h2>
        <div class="flex justify-center items-center gap-20">
            @foreach ($vetements as $vetement)
                <a href="{{ route('vetements.show', $vetement->id) }}">
                    <x-cards.cardClothes url_img="{{ $vetement->url_img }}" title="{{ $vetement->name }}" />
                </a>
            @endforeach
        </div>
    </section>
</x-layouts.layout>