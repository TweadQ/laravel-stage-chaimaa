<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Bijoux Prêt</h2>
        <div class="flex justify-center items-center gap-20">
            @foreach ($bijouxPrets as $bijouxPret)
                <a href="{{ route('bijouxPrets.show', $bijouxPret->id) }}">
                    <x-cards.cardIndexClothes url_img="{{ $bijouxPret->url_img }}" title="{{ $bijouxPret->name }}" />
                </a>
            @endforeach
        </div>
    </section>
</x-layouts.layout>