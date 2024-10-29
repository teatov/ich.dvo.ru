Новый веб-сайт для [Института химии ДВО РАН](http://www.ich.dvo.ru/).

- Бэкенд: PHP, Laravel
- Фронтенд: TailwindCSS
- База данных: MariaDB

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
task up -- -d
```
7. Выполнить миграции базы данных:
```bash
task migrate
```
8. Добавить в [hosts](https://en.wikipedia.org/wiki/Hosts_(file)#Location_in_the_file_system) строчку:
```
127.0.0.1 ich.dvo.local
```
