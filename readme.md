index.php -проверяет аутефецирован ли пользователь. Если нет, кидает на форму аутентиф. Если да, кидает его в админку
if_authenticated -на каждой странице проверяет аутефецирован ли пользователь. Если нет, кидает на форму аутентиф.

///////////////////////////////////////////////////////////////////////////////////////////
Авторизация:
Authentication/authentication_form.php(обработчик формы)=>
execute_form_authentication.php{
    сравнивает вводимые значения с БД таблицей confirmed_users_adminca,
    если совпало, записывает в куки и пускает дальше в админку
}
///////////////////////////////////////////////////////////////////////////////////////////
Регистрация:
registration/registration_form.php(форма регистрации)=>
registration/execute_form_registration.php(обработчик формы){
    берет значения post из формы регистр и записывает их в БД (users_adminca) для дальнейшего подтверждения
    }
///////////////////////////////////////////////////////////////////////////////////////////
confirm_reg.php {
    выводит из БД (users_adminca) пользователей ожидающих подтверждения регистрации
    нажимая кнопку подтвердить, переходиим в execute_confirm_reg.php,
    где добавляется запись с логином и паролем в БД таблицу confirmed_users_adminca
    }
///////////////////////////////////////////////////////////////////////////////////////////
Добавления товара:
adminka/add_product/add_product.php (форма добавления товара)=>
execute_add_product(обработчик формы){
    берет значения post из формы и записывает их в БД (products)
    }
///////////////////////////////////////////////////////////////////////////////////////////
Показать все товары:
adminka/show_all_products.php (выводит все товары из БД products циклом)=>
    нажимая на кнопку Изменить, попадаем в adminka/execute_show_all_products.php{
        перезаписываются данные в таблице products}
    нажимая на кнопку Удалить,  попадаем в adminka/execute_show_all_products.php{
        удаляется запись о продукте}

///////////////////////////////////////////////////////////////////////////////////////////
БД таблицы:
    имя БД: admin_template_php {
        таблицы:        
        users_adminca [ id (pprimary key,autoincrement),
                        name (string),
                        surname (string),
                        login (string),
                        pass (string),
                        ]
        confirmed_users_adminca [ id (pprimary key,autoincrement),
                                  login (string),
                                  pass (string),
                                ]
        products [  id (pprimary key,autoincrement),
                    id_of_prod  (string),
                    name (string),
                    price (string),
                    descr (string),
                    ]