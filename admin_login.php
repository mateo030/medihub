<?php 
require 'includes/views/header_view.php';
require 'includes/views/login_view.php';
?>
<body>
	<div class="form__container">
		<a>
			<div class="form__card">
				<div class="login__image">
                <i class="fa-solid fa-user-tie" style="font-size: 62px"></i>
					<p>Administrator</p>
				</div>
				<form action="includes/login_inc.php" method="GET">
					<div class="form_email">
						<input type="hidden" name="user_email" value="admin@gmail.com" placeholder="EMAIL">
					</div>
					<div class="form__password">
						<input type="text" name="user_pass" placeholder="PASSWORD">
					</div>
					<button>Log in</button>
					<?php 
					if (isset($_SESSION['error_login'])) {
						displayLoginErrors($_SESSION['error_login']);
						
					}
					unset($_SESSION['error_login']);
					?>
				</form>
			</div>
		</a>
	</div>
</body>