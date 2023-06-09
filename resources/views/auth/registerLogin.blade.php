<x-layout>
<div class="contenitore" id="contenitore">
	<div class="form-contenitore sign-up-contenitore">
		<form class="compila" action="#">
			<h1 class="testo1">Create Account</h1>
			<div class="social-contenitore">
				<a href="#" class="social encore"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social encore"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social encore"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span class="spann">or use your email for registration</span>
			<input class="insert" type="text" placeholder="Name" />
			<input class="insert" type="email" placeholder="Email" />
			<input class="insert" type="password" placeholder="Password" />
			<button class="bottone">Sign Up</button>
		</form>
	</div>
	<div class="form-contenitore sign-in-contenitore">
		<form class="compila" action="#">
			<h1 class="testo1">Sign in</h1>
			<div class="social-contenitore">
				<a href="#" class="social encore"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social encore"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social encore"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span class="spann">or use your account</span>
			<input class="insert" type="email" placeholder="Email" />
			<input class="insert" type="password" placeholder="Password" />
			<a  class="encore" href="#">Forgot your password?</a>
			<button class="bottone">Sign In</button>
		</form>
	</div>
	<div class="overlay-contenitore">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 class="testo1">Welcome Back!</h1>
				<p class="paragrafo">To keep connected with us please login with your personal info</p>
				<button class="ghost bottone" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 class="testo1">Hello, Friend!</h1>
				<p class="paragrafo">Enter your personal details and start journey with us</p>
				<button class="ghost bottone" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

{{-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> --}}



</x-layout>