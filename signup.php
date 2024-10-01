<?php
require 'includes/views/header_view.php';
require 'includes/views/signup_view.php';
?>

<div class="form__container">
	<div class="form__card">
		<h1>Sign up</h1>
		<form action="includes/signup_inc.php" method="POST">
			<div class="form__names">
				<input type="text" name="first_name" placeholder="FIRST NAME">
				<input type="text" name="last_name" placeholder="LAST NAME">
			</div>
			<div class="form__email">
				<input type="email" name="user_email" placeholder="EMAIL">
			</div>
			<div class="form__password">
				<input type="text" name="user_pass" placeholder="PASSWORD">
			</div>
			<div class="form__address">
				<input type="text" name="user_address" placeholder="ADDRESS">
			</div>
			<div class="form__contact">
				<input type="tel" name="user_contact" placeholder="Phone Number">
			</div>
			<div class="form__birthdate">
				<div>
					<small>Birth Date</small>
				</div>
				<div class="select__container">
					<select class="select__box" name="year">
						<option value="">Year</option>
						<?php displayOptions(2024, 1900) ?>
					</select>
					<select class="select__box" name="month">
						<option value="">Month</option>
						<?php displayOptions(12, 1) ?>
					</select>
					<select class="select__box" name="day">
						<option value="">Day</option>
						<?php displayOptions(30, 1) ?>
					</select>
				</div>
			</div>
			<div class="form__gender">
				<div class="radio_container">
					<input type="radio" name="gender" value="Male">
					<p>Male</p>
				</div>
				<div class="radio_container">
					<input type="radio" name="gender" value="Female">
					<p>Female</p>
				</div>
			</div>
			<?php
			if (isset($_SESSION['error_signup'])) {
				displayErrorMessage($_SESSION['error_signup']);
			}
			?>
			<button>Sign Up</button>
		</form>
	</div>
</div>

</body>

</html>