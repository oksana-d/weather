
<div class="container">
<div class="row justify-content-center align-items-center">

    <form class="needs-validation" method="POST" action="/Feedback/send" novalidate>
        <h1> <font color="blue">Обратная связь</font></h1>

        <div class="form-froup">
            <label class="font-weight-bold" for="Name">Имя</label>
            <input type="Name" class="form-control" name="Name" required>
            <small id="Name" class="form-text text-muted">Введите Имя и Фамилию</small>
            <div class="invalid-feedback">
                Это поле не может быть пустым!
            </div>
        </div>

        <div class="form-froup">
            <label class="font-weight-bold" for="Email">Email</label>
            <input type="Email" class="form-control" name="Email" required>
            <small id="Email" class="form-text text-muted">Введите адрес вашей электронной почты</small>
            <div class="invalid-feedback">
                Введите корректный адрес электронной почты!
            </div>
        </div>

        <div class="form-froup">
            <label class="font-weight-bold" for="Message">Сообщение</label>
            <textarea type="Message" class="form-control" name="Message" required></textarea >
            <small id="Message" class="form-text text-muted">Введите сообщение</small>
            <div class="invalid-feedback">
                Это поле не может быть пустым!
            </div>
        </div>

        <div class="g-recaptcha" data-sitekey="6LcWc4sUAAAAAF2EZfhAUKFWO67KdF8zc209ZUBl"></div>
        <div class="invalid-feedback">
            Это поле не может быть пустым!
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>

    </form>
    <script src='https://www.google.com/recaptcha/api.js'></script>


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