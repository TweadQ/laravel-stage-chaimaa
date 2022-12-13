<x-layouts.layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">{{ $vetement->name }}</h1>
				<img
						alt="{{ $vetement->name }}"
						class="w-96"
						src="{{ asset('storage/' . $vetement->url_img) }}"
				>
				<div class="pt-5">
						<p>{!! nl2br(e($vetement->description)) !!}</p>
				</div>
				<div class="pt-5 font-bold">
					<p>{{ $vetement->price }} €</p>
				</div>
				<div>
					<span class="pt-5 font-bold">Taille disponible : {{ $vetement->size }}</span>
				</div>
				@auth
					@if(Auth::user()->admin === 1)
						<div class="flex space-x-5 pt-8">
								<a
									class="rounded-lg bg-green-600 p-3 text-white"
									href="{{ route('vetements.edit', $vetement->id) }}"
								>Modifier
								</a>
								<x-btn-delete :item="$vetement" routeItem="vetements.destroy"/>
						</div>
					@else
					<div class="pt-8">
						<a
							class="rounded-lg bg-green-600 p-3 text-white"
							href=""
							>Ajouter au panier
						</a>
					</div>
					@endif
				@endauth
		</div>
</x-layouts.layout>
