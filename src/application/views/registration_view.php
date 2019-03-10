
<div class="container">
<div class="row justify-content-center align-items-center">
	<form class="needs-validation" method="post" action="/registration/signup" novalidate>

		<h1> <font color="blue">Регистрация</font></h1>
		<div class="form-froup">
			<label class="font-weight-bold"  for="FirsName">Имя</label>
			<label class="font-weight-bold text-danger" for="FirsName">*</label>
			<input type="FirstName" class="form-control" name="FirstName" required>
			<small id="FirstName" class="form-text text-muted">Введите ваше имя</small>
			<div class="invalid-feedback">
				Это поле должно быть заполнено!
			</div>
		</div>

		<div class="form-froup">
			<label class="font-weight-bold" for="LastName">Фамилия</label>
			<label class="font-weight-bold text-danger" for="LastName">*</label>
			<input type="LastName" class="form-control required" name="LastName" required>
			<small id="LastName" class="form-text text-muted">Введите вашу фамилию</small>
			<div class="invalid-feedback">
				Это поле должно быть заполнено!
			</div>
		</div>

		<div class="form-froup">
			<label class="font-weight-bold" for="Email">Email</label>
			<label class="font-weight-bold text-danger" for="Email">*</label>
			<input type="email" class="form-control required" name="email" required>
			<small id="Email" class="form-text text-muted">Введите адрес вашей электронной почты</small>
			<div class="invalid-feedback">
				Введите корректный адрес электронной почты!
			</div>
		</div>


		<div class="form-froup">
			<label class="font-weight-bold" for="Password">Пароль</label>
			<label class="font-weight-bold text-danger" for="Password">*</label>
			<input type="password" class="form-control required" name="password" required>
			<div class="invalid-feedback">
				Это поле должно быть заполнено!
			</div>
		</div></br>

		<div class="form-froup">
			<label class="font-weight-bold" for="Gender">Укажите ваш пол</label>
				  <select class="selectpicker" name="gender">
					  <option>не выбран</option>
					  <option>мужской</option>
					  <option>женский</option>
				  </select>
		</div>

		<div class="form-froup">
			<label class="font-weight-bold" for="BirthDate">Дата рождения</label>
			<input type="date" class="form-control" name="BirthDate">
		</div>

		<div class="form-froup">
			<p <span class="font-weight-bold text-danger">*</span>&ensp;- обязательные поля для заполнения</p>
		</div>

		<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
	</form>
    </div>
</div>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>