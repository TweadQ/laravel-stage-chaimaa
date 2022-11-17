<x-layouts.layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Titre : {{ $bijouxPret->title }}</h1>
				<img
						alt="{{ $bijouxPret->title }}"
						class="w-96"
						src="{{ $bijouxPret->url_img }}"
				>
				<div class="pt-5">
						<p>{!! nl2br(e($bijouxPret->description)) !!}</p>
				</div>
				@auth
						<div class="flex space-x-5 pt-8">
								<a
										class="rounded-lg bg-green-600 p-3 text-white"
										href="{{ route('bijouxPrets.edit', $bijouxPret->id) }}"
								>Modifier</a>
								<x-btn-delete :item="$bijouxPret" routeItem="bijouxPrets.destroy"/>
						</div>
				@endauth
		</div>
</x-layouts.layout>
