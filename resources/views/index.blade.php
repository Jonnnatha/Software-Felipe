@include('template.header')

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-15 p-b-20">
				<form class="login100-form validate-form" method="post" action="{{url('autenticar')}}">
           {!! csrf_field() !!}
					<span class="login100-form-avatar">
						<img src="{{asset('img/logo-felipe.png')}}" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Autenticar
						</button>
					</div>

					<ul class="login-more p-t-40">
						<li class="m-b-8">
							<span class="txt1">
								Esqueceu
							</span>

							<a href="#" class="txt2">
								Usuario / Senha?
							</a>
						</li>

						<li>
							<span class="txt1">
								Como conseguir cadastro?
							</span>

							<a href="#" class="txt2">
								Entre em contato
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('plugins/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('plugins/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('plugins/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
