<x-layouts.layout title="Bienvenue sur notre site">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">{{ $bijouxPersonnalisable->name }}</h1>
				<img
						alt="{{ $bijouxPersonnalisable->name }}"
						class="w-96"
						src="{{ asset('storage/' . $bijouxPersonnalisable->url_img) }}"
				>
				<div class="pt-5">
						<p>{!! nl2br(e($bijouxPersonnalisable->description)) !!}</p>
				</div>
				<div class="pt-5 font-bold">
					<p>{{ $bijouxPersonnalisable->price }} €</p>
				</div>
				@auth
						<div class="flex space-x-5 pt-8">
								<a
										class="rounded-lg bg-green-600 p-3 text-white"
										href="{{ route('bijouxPersonnalisables.edit', $bijouxPersonnalisable->id) }}"
								>Modifier</a>
								<x-btn-delete :item="$bijouxPersonnalisable" routeItem="bijouxPersonnalisables.destroy"/>
						</div>
				@endauth
		</div>
</x-layouts.layout>
