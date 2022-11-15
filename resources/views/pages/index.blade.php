<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Vêtements</h2>
        <div class="flex justify-center items-center gap-20">
            @foreach ($vetements as $vetement)
                <a href="{{ route('vetements.show', $vetement->id) }}">
                    <x-cards.cardIndexClothes url_img="{{ $vetement->url_img }}" title="{{ $vetement->genre }}" />
                </a>
            @endforeach
        </div>
    </section>
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Bijoux</h2>
        <div class="flex justify-center items-center gap-20">
            <x-cards.cardIndexClothes url_img="img/alexis-antoine-GBpKfFfJhgw-unsplash.jpg" title="Prêt" />
            <x-cards.cardIndexClothes url_img="img/ruan-richard-rodrigues-moRYg6k5-Kg-unsplash.jpg" title="Personnalisable" />
        </div>
    </section>
</x-layouts.layout>