@php
$style = 'rounded-lg w-full block mb-3';
@endphp
<x-layouts.layout title="Créer un nouveau produits">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Create new bijoux personnalisable</h1>
				<div class="max-w-sm">
						<form
								action="{{ route('bijouxPersonnalisables.store') }}"
								enctype="multipart/form-data"
								method="post"
						>
								@csrf
								<div class="">
										<input
												class="{{ $style }}"
												name="name"
												placeholder="Votre titre"
												type="text"
												value="{{ old('name') }}"
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
										>{{ old('description') }}</textarea>
										<x-error-msg name="description" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="price"
												placeholder="Prix"
												type="text"
												value="{{ old('price') }}"
										>
										<x-error-msg name="price" />

								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="gravure"
												placeholder="Gravure"
												type="text"
												value="{{ old('gravure') }}"
										>
										<x-error-msg name="gravure" />

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