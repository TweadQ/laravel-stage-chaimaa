<div class="bg-[#7AAEA5] text-gray-100">
		<div class="flex justify-between items-center md:px-10 lg:px-20 py-1">
				<div class="">
					<a href="/"><img src="{{ asset ('img/logo-rawan.png') }}" alt="logo rawan" class="w-40"></a>
				</div>
				<div class="hidden md:block space-x-8 md:space-x-4">
					<ul class="menu menu-horizontal p-0">
						<li tabindex="0">
						  <a>
							Vêtements
							<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
						  </a>
						  <ul class=" bg-[#7AAEA5]">
							<li><a href="{{ route('homme')}}">Homme</a></li>
							<li><a href="{{ route('femme')}}">Femme</a></li>
							<li><a href="{{ route('enfant')}}">Enfant</a></li>
						  </ul>
						</li>
						<li tabindex="0">
							<a>
							  Bijoux
							  <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
							</a>
							<ul class="p-2 bg-[#7AAEA5]">
							  <li><a href="{{ route('bijouxPret')}}">Prêt</a></li>
							  <li><a href="{{ route('bijouxPersonnalisable')}}">Custom</a></li>
							</ul>
						</li>
					</ul>
						@guest
								<a href="{{ route('login') }}">Connexion</a>
								<a href="{{ route('register') }}">Inscription</a>
						@endguest
						@auth
								<a href="{{ route('dashboard') }}">Dashboard</a>
								<a href="{{ route('logout') }}">
									<form class="inline" method="POST" action="/logout">
									  @csrf
									  <button type="submit">
										<i>Déconnexion</i>
									  </button>
									</form>
								  </a>
						@endauth
				</div>
				<div class="md:hidden absolute z-50 right-10">
					<ul class="menu menu-horizontal px-1">
					<li tabindex="0">
						<a>
							<button class="btn btn-square btn-ghost">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
							</button>
						</a>
						<ul class="p-2 bg-[#7AAEA5]">
							<p class="bg-gray-500 pl-2">Vêtements</p>
							<li><a href="{{ route('homme')}}">Homme</a></li>
							<li><a href="{{ route('femme')}}">Femme</a></li>
							<li><a href="{{ route('enfant')}}">Enfant</a></li>
							<p class="bg-gray-500 pl-2">Bijoux</p>
							<li><a href="{{ route('bijouxPret')}}">Prêt</a></li>
							<li><a href="{{ route('bijouxPersonnalisable')}}">Custom</a></li>
							<p class="bg-gray-500 pl-2">Se Connecter</p>
						@guest
							<li><a href="{{ route('login') }}">Connexion</a></li>
							<li><a href="{{ route('register') }}">Inscription</a></li>
						@endguest
						@auth
							<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
							<li><a href="{{ route('logout') }}">
								<form class="inline" method="POST" action="/logout">
									@csrf
									<button type="submit">
										<i>Déconnexion</i>
									</button>
								</form>
							</a></li>
						@endauth
						</ul>
					  </li>	
					</ul>
				</div>
		</div>
</div>
