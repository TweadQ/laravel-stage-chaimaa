<x-layouts.layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Titre : {{ $vetement->title }}</h1>
				<img
						alt="{{ $vetement->title }}"
						class="w-96"
						src="{{ $vetement->url_img }}"
				>
				<div class="pt-5">
						<p>{!! nl2br(e($vetement->description)) !!}</p>
				</div>
				@auth
						<div class="flex space-x-5 pt-8">
								<a
										class="rounded-lg bg-green-600 p-2 text-white"
										href="{{ route('vetements.edit', $vetement->id) }}"
								>Modifier</a>
								<x-btn-delete :item="$vetement" routeItem="vetements.destroy"/>
						</div>
				@endauth
		</div>
</x-layouts.layout>
