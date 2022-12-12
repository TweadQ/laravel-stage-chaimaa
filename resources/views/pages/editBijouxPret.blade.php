@php
$style = 'rounded-lg w-full block mb-3';
@endphp
<x-layouts.layout title="Créer un nouveau produits">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Update bijoux</h1>
				<div class="max-w-sm">
						<form
								action="{{ route('bijouxPrets.update', $bijouxPret->id) }}"
								enctype="multipart/form-data"
								method="post"
						>
								@csrf
								@method('PUT')
								<div class="">
										<input
												class="{{ $style }}"
												name="name"
												placeholder="Votre titre"
												type="text"
												value="{{ old('name', $bijouxPret->name) }}"
										>
										<x-error-msg name="name" />
								</div>
								<div class="">
										<textarea
										  class="{{ $style }}"
										  cols="30"
										  id=""
										  name="description"
										  rows="10"
										>{{ old('description', $bijouxPret->description) }}</textarea>
										<x-error-msg name="description" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="price"
												placeholder="Prix"
												type="text"
												value="{{ old('price', $bijouxPret->price) }}"
										>
										<x-error-msg name="price" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="url_img"
												placeholder="Votre image"
												type="file"
										>
										<x-error-msg name="url_img" />

								</div>
								<button
										class="mt-5 rounded-lg bg-indigo-500 p-2 text-white"
										type="submit"
								>Envoyer</button>
						</form>

				</div>

		</div>
</x-layouts.layout>