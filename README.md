<h1 align="center"> Agenda de Contatos com Laravel 8</h1>

<p align="center"><img src="https://laravelnews.imgix.net/images/jetstream.png?ixlib=php-3.3.0" width="500"></p>

<img src="https://img.shields.io/static/v1?label=Status&message=Concluido&color=54CD26&style=for-the-badge&logo=ghost"/>

## Descrição do Projeto
<p align="justify"> Desenvolver uma plataforma para agendar tarefas de implementação dentro do time de desenvolvimento do SETRANS - PA, possibilitando a organização do time Dev.</p>

## Tópicos

<!--ts-->
   * [Instalação](#instalacao)
      * [Pré Requisitos](#pre_requsito)
      * [Preparando aplicação](#preparando_aplicacao)
   * [Demo da aplicação](#demo)
<!--te-->

<h2 id="instalacao">Instalação</h2>

<h3 id="pre_requsito" >Pré Requisitos</h3>

- Php 7.3 ou superior
- Banco de dados mysql
- Composer
- Node

<h3 id="preparando_aplicacao" >Preparando aplicação</h3>

- Clone este repositório para um repositório local com comando:

    ` git clone <repositorio>`

- Após isso entre no repositório raiz da aplicação e execute o seguinte comando:

    ` composer install`

- Altere o arquivo `.env.example` para somente `.env` e abra ele,
  crie um banco de dados vazio e o configure neste bloco:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_agenda
    DB_USERNAME=root
    DB_PASSWORD=
    ```
- Apos isso execute o comando `php artisan key:generate` para gerar um código criptografado do APP_KEY

- Fazendo isso use o comando `php artisan migrate` para gerar todas as tabelas no banco que a aplicação utilizará

- Execute a aplicação com o comando:

    `php artisan serve`

- Por padrão, ele irá executar a aplicação em `localhost:8000`, abra o navegador e digite o caminho que ficará assim `localhost:8000/books`.

<!-- <h2 id="demo">Demo da aplicação</h2>
 
 - <a href="">Veja aqui o demo da aplicação</a> -->