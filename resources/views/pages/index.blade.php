<x-layouts.layout title="Bienvenue sur notre site">
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Vêtements</h2>
        <div class="flex justify-center items-center gap-20">
            <a href="{{ route('homme') }}">
            <x-cards.cardIndexClothes 
                url_img="https://archzine.fr/wp-content/uploads/2017/03/comment-porter-tee-shirt-blanc-chino-beige-vetements-basiques-idees.jpg" 
                title="homme" 
            />
            </a>
            <a href="{{ route('femme') }}">
            <x-cards.cardIndexClothes 
                url_img="https://shineboutique.fr/wp-content/uploads/2021/05/combishort-boheme-chic-smockee-5-400x400.jpg" 
                title="femme" 
            />
            </a>
            <a href="{{ route('enfant') }}">
            <x-cards.cardIndexClothes 
                url_img="https://e2c6zvk8i3i.exactdn.com/wp-content/uploads/2019/06/top-marques-vetement-enfant.png" 
                title="enfant" 
            />
            </a>
        </div>
    </section>
    <section class="py-[5rem]">
        <h2 class="font-bold uppercase text-3xl mb-10 text-center">Bijoux</h2>
        <div class="flex justify-center items-center gap-20">
            <a href="{{ route('bijouxPret')}}">
                <x-cards.cardIndexClothes url_img="img/alexis-antoine-GBpKfFfJhgw-unsplash.jpg" title="Prêt" />
            </a>
            <a href="{{ route('bijouxPersonnalisable')}}">
                <x-cards.cardIndexClothes url_img="img/ruan-richard-rodrigues-moRYg6k5-Kg-unsplash.jpg" title="Personnalisable" />
            </a>
        </div>
    </section>
</x-layouts.layout>