<?php 
require 'includes/views/header_view.php';
require 'includes/views/login_view.php';
?>
<body>
	<div class="form__container">
		<div class="form__card" id="patientLogin">	
			<div class="login__image">
				<i class="fa-solid fa-hospital-user" style="font-size: 62px"></i>
				<p>Patients</p>
			</div>
			<form action="includes/login_inc.php" method="GET">
				<div class="form_email">
					<input type="email" name="user_email" placeholder="EMAIL">
				</div>
				<div class="form__password">
					<input type="text" name="user_pass" placeholder="PASSWORD">
				</div>
				<button>Log in</button>
				
			</form>
		</div>
		<div class="form__card" id="doctorLogin">
			<div class="login__image">
				<i class="fa-solid fa-user-doctor" style="font-size: 62px"></i>
				<p>Doctors</p>
			</div>
			<form action="includes/doctor_login.php" method="GET">
				<div class="form_email">
					<input type="email" name="user_email" placeholder="EMAIL">
				</div>
				<div class="form__password">
					<input type="text" name="user_pass" placeholder="PASSWORD">
				</div>
				<button>Log in</button>
			</form>
		</div>
	</div>
	<div>
	<?php 
		if (isset($_SESSION['error_login'])) {
			displayLoginErrors($_SESSION['error_login']);
			
		}
		unset($_SESSION['error_login']);
	?>
	</div>
</body>