<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Laravel Blog</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="{{ route('blog.index') }}">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
				@if(Auth::user())
				<li><a href="/admin">Admin</a></li>
				@endif
				<!-- Authentication Links -->
				@guest
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>


				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endguest
			</ul>
		</div>
	</nav>
</div>
