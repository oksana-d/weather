

<div class="container">
<div class="row justify-content-center align-items-center">

        <form class="needs-validation" method="post" action="/main/signin" novalidate>

            <h1> <font color="blue">Авторизация</font></h1>
            <div class="form-froup">
                <label class="font-weight-bold" for="Email">Email</label>
                <input type="email" class="form-control" name="Email" required>
                <small name="Email" class="form-text text-muted">Введите адрес вашей электронной почты</small>
                <div class="invalid-feedback">
                    Введите корректный адрес электронной почты!
                </div>
            </div>

            <div class="form-froup">
                <label class="font-weight-bold" for="Password">Пароль</label>
                <input type="password" class="form-control" name="Password" required>
                <small name="Password" class="form-text text-muted">Введите ваш пароль</small>
                <div class="invalid-feedback">
                    Это поле должно быть заполнено!
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Войти</button>

            <a class="nav-link" href="/registration">Вы не зарегистированы?</a>

        </form>

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
</div>
</div>