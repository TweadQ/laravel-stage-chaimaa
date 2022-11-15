<div class="bg-indigo-500 text-gray-100">
		<div class="flex justify-between items-center px-20 py-7">
				<div class="">
						<span class="font-black uppercase text-2xl"><a href="/">Chai Maa Store</a></span>
				</div>
				<div class="space-x-4">
					<ul class="menu menu-horizontal p-0">
						<li tabindex="0">
						  <a>
							Vêtements
							<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
						  </a>
						  <ul class="p-2 bg-indigo-500">
							<li><a>Homme</a></li>
							<li><a>Femme</a></li>
							<li><a>Enfant</a></li>
						  </ul>
						</li>
						<li tabindex="0">
							<a>
							  Bijoux
							  <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
							</a>
							<ul class="p-2 bg-indigo-500">
							  <li><a>Prêt</a></li>
							  <li><a>Personnalisable</a></li>
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
