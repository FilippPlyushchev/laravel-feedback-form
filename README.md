# Форма обратной связи сделанная с помощью фреймворка Laravel

## Установка
Инструкция для запуска приложения.

### Клонирование
В первую очередь нужно клонировать проект к себе на компьютер
```
git clone https://github.com/FilippPlyushchev/laravel-feedback-form.git
```

### Настройка
Установка зависимостей
```
composer install
```
Установка дополнительных пакетов
```
npm install
npm run dev
```

Переименуйте .env.example в .env, измените значения данных полей
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=marketica
DB_USERNAME=root
DB_PASSWORD="пароль от базы данных"

MAIL_MAILER=smtp
MAIL_HOST=smtp.mail.ru
MAIL_PORT=587
MAIL_USERNAME="email адрес"
MAIL_PASSWORD="пароль от email адреса"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="email адрес"
MAIL_FROM_NAME=FeedbackForm
```

## Авторизация

Для того чтобы можно было авторизовываться через логин, нужно в тейте AuthenticatesUsers изменить функцию username, так чтобы она возвращала `name`.
К нему можно обраться из LoginController.
### Запуск
Создайте ключ шифрования
```
php artisan key:generate
```
Инициализируем миграции
```
php artisan migrate
```

Запускаем сиды (заполнение базы данных)
```
php artisan db:seed
```
## Данные менеджера
```
Login: grisha
Password: secret
```
