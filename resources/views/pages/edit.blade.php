@php
$style = 'rounded-lg w-full block mb-3';
$sizeToArray = explode("|", $vetement->size);
// dd($sizeToArray);
@endphp
<x-layouts.layout title="Créer un nouveau produits">
		<div class="px-20 py-20">
				<h1 class="py-5 text-xl font-black">Update products</h1>
				<div class="max-w-sm">
						<form
								action="{{ route('vetements.update', $vetement->id) }}"
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
												value="{{ old('name', $vetement->name) }}"
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
										>{{ old('description', $vetement->description) }}</textarea>
										<x-error-msg name="description" />

								</div>
								<div class="">
									<fieldset>
										<legend>Selectionne la/les tailles:</legend>
										<div>
											<input
													class=""
													name="size[]"
													id="XS"
													type="checkbox"
													value="XS"
											>
											<label class="capitalize" for="XS">XS</label>
										</div>
										<div>
											<input
													class=""
													name="size[]"
													id="S"
													type="checkbox"
													value="S"
													checked
											>
											<label class="capitalize" for="S">S</label>
										</div>
										<div>
											<input
													class=""
													name="size[]"
													id="M"
													type="checkbox"
													value="M"
													checked
											>
											<label class="capitalize" for="M">M</label>
										</div>
										<div>
											<input
													class=""
													name="size[]"
													id="L"
													type="checkbox"
													value="L"
													checked
											>
											<label class="capitalize" for="L">L</label>
										</div>
										<div>
											<input
													class=""
													name="size[]"
													id="XL"
													type="checkbox"
													value="XL"
													checked
											>
											<label class="capitalize" for="XL">XL</label>
										</div>
										<div>
											<input
													class=""
													name="size[]"
													id="XXL"
													type="checkbox"
													value="XXL"
											>
											<label class="capitalize" for="XXL">XXL</label>
										</div>
										<x-error-msg name="size" />
									</fieldset>
								</div>
								<div class="">
										<input
												class="{{ $style }}"
												name="price"
												placeholder="Prix"
												type="text"
												value="{{ old('price', $vetement->price) }}"
										>
										<x-error-msg name="price" />

								</div>
								<div class="">
									<fieldset>
										<legend>Selectionne le genre:</legend>
										<div>
											<input
													class=""
													name="genre"
													id="homme"
													type="radio"
													value="{{ old('homme', $vetement->genre) }}"
													checked
											>
											<label class="capitalize" for="homme">homme</label>
										</div>
										<div>
											<input
													class=""
													name="genre"
													id="femme"
													type="radio"
													value="{{ old('femme', $vetement->genre) }}"
											>
											<label class="capitalize" for="femme">femme</label>
										</div>
										<div>
											<input
													class=""
													name="genre"
													id="enfant"
													type="radio"
													value="{{ old('enfant', $vetement->genre) }}"
											>
											<label class="capitalize" for="enfant">enfant</label>
										</div>
										<x-error-msg name="genre" />
									</fieldset>
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