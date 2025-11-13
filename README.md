<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

### Тестовое API на фреймворке Laravel

#### Реализована выдача сущностей 
* Продажи (sales)
* Заказы (orders)
* Склады (stocks)
* Доходы (incomes)

### Описание API

* Авторизация происходит посредством передачи секретного токена в строке запроса с параметром **key**
* Формат даты **Y-m-d**
* Формат дата + время **Y-m-d H:i:s**
* Все эндпоинты выдают ответ в **json** с пагинацией
* Лимит на количество возвращаемых записей за запрос - **500** (по умолчанию выдает по **500** строк)
* Если нужно меньше, то передавать в параметре **limit** в строке запроса
* Перебор данных происходит по параметру **page** в строке запроса

_**Пример запроса:** /api/orders?dateFrom={Дата выгрузки ОТ}&dateTo={Дата выгрузки ДО}}&page={номер страницы}&limit={количество записей}key={ваш токен}_

#### Продажи

Параметры:

- dateFrom
- dateTo

`Путь: GET /api/sales`

#### Заказы

Параметры:

- dateFrom
- dateTo

`Путь: GET /api/orders`

#### Склады 
_Выгрузка только за текущий день_

Параметры:

- dateFrom

`Путь: GET /api/stocks`

#### Доходы

Параметры:

- dateFrom
- dateTo

`Путь: GET /api/incomes`

### Стек
* PHP 8.1
* Laravel 8, 
* Laravel Octane (Server Swoole)
* MySQL
* Docker, Docker-compose

### Настройка
* Переименуйте файл .env.example в .env

### Запуск
1) docker compose up
2) Введите любой из указанных API по адресу 127.0.0.1:8000 (key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie)

### Доступ к БД
#### root доступ
* Хост: 188.225.78.31
* Порт: 3306
* БД: retail_db
* User: root
* Password: sRqP284!
#### Только чтение
* Хост: 188.225.78.31
* Порт: 3306
* БД: retail_db
* User: retail_app
* Password: @Hr29T8b
#### Названия таблиц
* sales (продажи)
* orders (заказы)
* stocks (склады)
* incomes (доходы)

### Доп. информация
Если с данными в БД что-то не так или они отсутствуют, то свяжитесь, пожалуйста, со мной и я восстановлю из бэкапа

### Контакты
Email - almaz.mukhamadyev2017@yandex.ru<br>
Телефон - 89922118918<br>
Телеграм - @mukhamadyev