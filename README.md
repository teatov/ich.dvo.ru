Новый веб-сайт для [Института химии ДВО РАН](http://www.ich.dvo.ru/).

- Docker
- Бэкенд: PHP, Laravel
- Фронтенд: Laravel Blade, TailwindCSS
- База данных: MariaDB
- Сервер: Nginx

## Необходимое для разработки
1. Установить последнюю версию [PHP](https://www.php.net/downloads.php), [Composer](https://getcomposer.org/download/), и [Node с NPM](https://nodejs.org/en/download). PHP и Composer можно установить командой [отсюда](https://laravel.com/docs/11.x/installation#installing-php).
2. Установить [Docker Engine](https://docs.docker.com/engine/install/) (или [Docker Desktop](https://docs.docker.com/desktop/install/windows-install/) для Windows) и настроить [прокси для него](https://help.reg.ru/support/servery-vps/oblachnyye-servery/rabota-s-serverom/kak-podklyuchitsya-k-lokalnomu-proksi-serveru-docker-io#0).
3. Установить [Task](https://taskfile.dev/installation/#get-the-binary).
4. Склонировать себе репозиторий:
``` bash
git clone https://github.com/teatov/ich.dvo.ru.git
```
5. Развернуть проект - установить зависимости, создать `.env` и собрать контейнеры:
```bash
task build
```
6. Запустить контейнеры на фоне:
```bash
task upd
```
7. Выполнить миграции базы данных:
```bash
task migrate
```
8. Опционально наполнить базу данных пробными данными:
```bash
task seed
```
9. Добавить в [hosts](https://en.wikipedia.org/wiki/Hosts_(file)#Location_in_the_file_system) строчку:
```
127.0.0.1 ich.dvo.local
```

После этого, если всё прошло как надо, запущенный сайт можно будет открыть по адресу http://ich.dvo.local/.

---
Для запуска проекта используйте команду:
```bash
task up
```

Для грациозной остановки - прервите процесс, нажав `Ctrl+C` в консоли. Если процесс работает на фоне, используйте:
```bash
task stop
```

### Запуск различных команд
В качестве универсальной запускалки используется [Task](https://taskfile.dev/).

Так как всё работает на Docker, команды по типу `php artisan` или `composer` должны выполняться изнутри контейнеров. Если их запускать просто из своей консоли, толку не будет и возможно даже что-то сломается.

Для взаимодействия со всем что связано с Docker используется [Laravel Sail](https://laravel.com/docs/11.x/sail). Его команды выполняют соответствующие команды внутри контейнеров, например `./vendor/bin/sail artisan` запускает `php artisan` внутри контейнера.

Для выполнения его команд пользуйтесь `task sail`, чтобы не писать каждый раз `./vendor/bin/sail`.

Чтобы передать туда какие-нибудь аргументы, отделите их от команды через `--`, например `task sail -- shell` под капотом запустит `./vendor/bin/sail shell`.

Для часто используемых команд есть алиасы:
- `task up` - запускает `sail up`
- `task down` - запускает `sail down`
- `task start` - запускает `sail start`
- `task stop` - запускает `sail stop`
- `task artisan` - запускает `sail artisan`
- `task migrate` - запускает `sail artisan migrate`

Описание команд Task можно увидеть через команду `task`, без аргументов. Описание команд Sail - через `task sail`, без аргументов.

Для единообразия лучше всегда запускать всяческие команды именно через Task.
