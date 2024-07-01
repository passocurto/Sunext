
# Desafio de Demonstração de Habilidades com Next.js e Laravel

Este repositório contém um desafio criado para demonstrar minhas habilidades com Next.js e Laravel. O objetivo é integrar uma API desenvolvida em Laravel com um frontend em Next.js, 
utilizando Redux para gerenciar o estado da aplicação.

## Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas em seu sistema:

- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/) ou [Yarn](https://yarnpkg.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [PostgreSQL](https://www.postgresql.org/)

## Clonando o Repositório

```bash
git clone https://github.com/passocurto/Sunext.git
cd Sunext
```

## Configuração do Backend (Laravel)

1. Navegue até a pasta do backend:

    ```bash
    cd api
    ```

2. Instale as dependências do Laravel:

    ```bash
    composer install
    ```

3. Copie o arquivo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

4. Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

5. Configure o arquivo `.env` com as credenciais do seu banco de dados PostgreSQL. Aqui está um exemplo de configuração:

    ```env
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nome_do_seu_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

6. Execute as migrações e seeders para configurar o banco de dados:

    ```bash
    php artisan migrate --seed
    ```

7. Inicie o servidor do Laravel:

    ```bash
    php artisan serve
    ```

## Configuração do Frontend (Next.js)

1. Navegue até a pasta do frontend:

    ```bash
    cd client
    ```

2. Instale as dependências do Next.js:

    ```bash
    npm install
    # ou
    yarn install
    ```

3. Inicie o servidor de desenvolvimento do Next.js:

    ```bash
    npm run dev
    # ou
    yarn dev
    ```

4. Acesse a aplicação no navegador:

    ```
    http://localhost:3000
    ```
    

## Estrutura do Projeto

- **api/**: Contém a aplicação Laravel.
- **client/**: Contém a aplicação Next.js.





#Banco de Dados
![image](https://github.com/passocurto/Sunext/assets/1081320/27126e91-ea07-4074-bd70-87fd0900ec4b)

#login
![image](https://github.com/passocurto/Sunext/assets/1081320/edf3ecde-f51a-4f60-bec1-f024974c2ed9)

#Registrar usuário
![image](https://github.com/passocurto/Sunext/assets/1081320/8e721803-42d1-4ddc-a66d-5a248b54c96a)

Dashbord
![image](https://github.com/passocurto/Sunext/assets/1081320/7c91e37e-579e-4e03-ab4d-9067db60d4a1)








Sinta-se à vontade para explorar o código e me enviar qualquer feedback ou dúvida!
