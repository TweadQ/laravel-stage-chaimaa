<div class="bg-indigo-500 text-gray-100">
		<div class="flex justify-between px-20 py-7">
				<div class="">
						<span class="font-black uppercase"><a href="/">Chai Maa Store</a></span>
				</div>
				<div class="space-x-4">
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
