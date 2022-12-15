<x-layouts.layout title="Bienvenue sur notre site">
    <section class="pt-28 md:pt-24">
        <div class="flex flex-col md:flex md:flex-row justify-center items-center gap-2">
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
                url_img="img/A063P01J2.webp" 
                title="enfant" 
            />
            </a>
        </div>
    </section>
    <section class="pt-2 pb-28 sm:pt-4 sm:pb-24">
        <div class="flex flex-col md:flex md:flex-row justify-center items-center gap-2">
            <a href="{{ route('bijouxPret')}}">
                <x-cards.cardIndexClothes2 
                url_img="img/alexis-antoine-GBpKfFfJhgw-unsplash.jpg" 
                title="Bijoux" 
            />
            </a>
            <a href="{{ route('bijouxPersonnalisable')}}">
                    <x-cards.cardIndexClothes2 
                    url_img="img/ruan-richard-rodrigues-moRYg6k5-Kg-unsplash.jpg" 
                    title="Bijoux Personnalisables" 
                />
            </a>
        </div>
    </section>
</x-layouts.layout>