<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Desafio
https://github.com/PicPay/picpay-desafio-backend?tab=readme-ov-file

## Documentação
https://documenter.getpostman.com/view/9163946/2sA3s3JXE8

## Técnicas usadas para desenvolver o projeto
- SOLID, PSR.
- RESTFull.
- Arquitetura em camadas: Controller, Services, Repository e Entity.
- Designer Pattern Adapter.
    * Adapter é um padrão de projeto estrutural que permite objetos com interfaces incompatíveis colaborarem entre si. O Pattern foi usado para criar uma interface padrão de comunicação com os serviços externos.
- No testes unitários desenvolvido com PHPUnit, foi "mockada" a comunicação com os serviços externos pois não era o objetivo do teste unitário testar a comunicação com os serviços.

## Melhorias que podem ser aplicadas
- Serviço externo de notificação pode ser processado em Fila.

## Subindo o ambiente local

A api foi desenvolvida utilizando laravel 11 e laravel Sail.

#### Passos
- Clone o projeto. `git clone git@github.com:pabloortolani/desafio.git --config core.autocrlf=input`
- Rode o comando `composer install`
- Renomeie o arquivo `.env.example` para `.env` e altere/crie as seguintes variáveis.
    * DB_CONNECTION=mysql
    * DB_HOST=mysql
    * DB_PORT=3306
    * DB_DATABASE=desafio_backend
    * DB_USERNAME=pabloortolani
    * DB_PASSWORD=123456
    * SERVICE_AUTHORIZING_BASE_URL=https://util.devi.tools/api/v2/authorize
    * SERVICE_NOTIFY_BASE_URL=https://util.devi.tools/api/v1/notify
    * WWWGROUP=1000
    * WWWUSER=1000
- Rode o comando `php artisan key:generate`
- Rode o comando `bash ./vendor/laravel/sail/bin/sail up`
- Rode o comando `docker exec -it api-main bash` para entrar no container da aplicação.
- Rode o comando `php artisan migrate` para criar as tabelas necessárias para o sistema funcionar.
- Rode o comando `php artisan db:seed` para criar os registros necessários na tabela de tipos de usuários.

## Executar os testes
- Rode o comando `docker exec -it api-main bash` para entrar no container da aplicação.
- Rode o comando `php artisan test --filter WalletControllerTest`
