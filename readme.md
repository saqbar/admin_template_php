index.php (форма входа в админку)
registration/registration_form.php(форма регистрации)=>
registration/execute_form_registration.php(обработчик формы){
    берет значения post из формы регистр и записывает их в БД (users_adminca) для дальнейшего подтверждения
    }
confirm_reg.php {
    выводит из БД (users_adminca) пользователей ожидающих подтверждения регистрации
    нажимая кнопку подтвердить, переходиим в execute_confirm_reg.php,
    где добавляется запись с логином и паролем в БД таблицу confirmed_users_adminca
    }