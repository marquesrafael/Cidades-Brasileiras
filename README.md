
# Cidades-Brasileiras
Repositorio para hospedagem de uma SQL com todas as cidades brasileiras

## Para o uso
Foi utilizado nesse sistema:
- PHP
- HTML
- CSS
- BOOTSTRAP
- MYSQL
- FONTAWESOME
- VUE
- JAVASCRIPT 

## Para o uso

Será necessario para o uso correto do sistema:

- PHP 
- Servidor (exemplo APACHE)
- MYSQL

## Para configurar

- Faça upload das bases de dados 
- No arquivo sys/config.php edite:
    - $username = "seu usuario";
    - $password = "sua senha";
    - $linguagem = "linguagem";
        - linguagens disponiveis:
            - pt-BR
            - es-ES
            - en-US
    - host = "seu host mysql";
    - dbname = "nome do seu banco de dados";

## Usando via linha de comando

O uso é simplesmente facil:

- Selecione o estado desejado
- Será mostrado todas as cidades do estado seleciona

> PORTUGUES

Basta fazer um SELECT na tabela CIDADE usando o ID de estado no campo UF

Exemplo:

    ACRE ID 1
    SELECT * FROM cidade WHERE uf = 1
    Irá retornar todas as cidades do acre

    ALAGOAS ID 2
    SELECT * FROM cidade WHERE uf = 2
    Irá retornar todas as cidades do alagoas

> ESPANHOL

Simplemente haga un SELECT en la tabla CIDADE usando el ID del estado en el campo UF.

Ejemplo:

    ACRE ID 1
    SELECT * FROM cidade WHERE uf = 1
    Devolverá todas las ciudades en acre
    
    ALAGOAS ID 2
    SELECT * FROM cidade WHERE uf = 2
    Devolverá todas las ciudades en alagoas
