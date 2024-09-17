# AppEstacionamento

## Pré-requisitos
PHP 7+
MySQL 8+
Composer
Laravel 11+
Apache server
Git

## Estrutura do projeto
app
|..Http
|..|..Controllers
|..|..Middleware
|..Models
|..Providers
bootstrap
|..app.php
|..providers.php
config
database
|..factories
|..migrations
|..seeders
public
resources
routes
|..api.php
|..console.php
storage
tests
vendor
.env

## Copiando para o ambiente local
Na pasta local execute os seguintes comandos:

$ git clone https://gitlab.com/AnthonyBraga/appestacionamento.git

$ cd app_estacionamento

## Realizando commit das alterações no projeto
Após o clone do projeto, sempre que for disponibilizar alguma alteração, siga os seguintes passos:
1 - crie uma branch com a seguinte estrutura feature/nome_da_atividade.
    * Para criar uma nova branch basta executar o seguinte comando:
    $ git checkout -b feature/nome_da_atividade
2 - após realizadas as alterações do projeto basta realizar os seguintes comandos para enviar as mudanças para o repositório:
    Comando para adicionar todas as mudanças realizadas no projeto:
    $ git add . 
    Crie um comentário descrevendo de forma breve o que foi realizado:
    $ git commit -m "descrição breve da atividade"
    Agora execute o comando para disponibilizar no repositório:
    $ git push origin feature/nome_atividade.

## Inicialização do projeto
Para executar o projeto deve ser executado os seguintes passos após a instalação dos pré-requisitos:
1 - Crie um schema de banco de dados no MySql com o nome app_estacionamento. O arquivo .env do projeto estará configurado para a estrutura padrão do MySql. Caso o seu banco tenha um outro nome de usuário e senha. Deixe com o padrão root e sem senha.;

2 - Dentro do projeto execute o seguinte comando:
    $ php artisan migrate --seed

3 - Verifique se todas as tabelas foram criadas e se algumas delas tem informações carregadas, conforme o arquivo localizado no ./database/seeders/DatabaseSeeder.php

4 - Após a criação do banco de dados para inicializar o projeto basta executar o seguinte comando:
    $ php artisan serve
