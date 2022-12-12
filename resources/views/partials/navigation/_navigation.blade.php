<div class="bg-green-300 text-gray-100">
		<div class="flex justify-between items-center md:px-10 lg:px-20 py-1">
				<div class="">
					<a href="/"><img src="img/logo-rawan.png" alt="logo rawan" class="w-40"></a>
				</div>
				<div class="space-x-8 md:space-x-4">
					<ul class="menu menu-horizontal p-0">
						<li tabindex="0">
						  <a>
							Vêtements
							<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
						  </a>
						  <ul class=" bg-green-300">
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
							<ul class="p-2 bg-green-300">
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
		</div>
</div>
