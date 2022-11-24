# php
 introdução ao básico do PHP


# PHP (Hypertext Prepocessor)

Uma linguagem server-side, roda ao lado do servidor. è uma linguagem de programação back-end, pois ela realiza a comunicação com banco de dados. Ele é um processador no servidor e o resultado do processamento é enviado ao cliente(quem requisitou).

Ex: Arquivo PHP: 2+2
Cliente: 4
Todo arquivo php usa uma extensão: nome.php

# Requisitor para funcionar:

Xampp
https://www.apachefiends.org/pt_br/index.html

# Onde gravado os arquivos:

`c:\xampp\htdocs`

Exemplo:

`c:xampp\htdocs\site\index.php`

# Acesso ao site:

`http://localhost/`

host - Máquina - PC - Computador

Exemplo: 

`http://localhost/site/index.php`

# Variáveis:

- Variável é um espaço na memória que damos um nome para armazenar algum valor.
- O PHP é case-sensitive, significa que ele diferencia maiúscula, ou seja, Nome é diferente de nome.
- O nome de uma variável deve ser significativo de acordo com o valor. EX: para uma variável que vai armazenar a idade de uma pessoa eu coloco o nome da variável $idade.
- No PHP toda variável inicia com $
Não utilize caracteres especiais , espaços ou acentos para o nome das variáveis. Alguns deles até funcionam, porém é recomendado escrever nomes de variáveis de forma simples.

EX:

$endereço ----   errado
$endereco ----   correto
$Endereco ----   errado
$EndeReco ----   errado
$endereco_do_Cliente --- errado
$end89567 --  errado
$endChico  --  errado
$chocolate -- errado
$1 - errado


## Tipos de dados:

- os valores em php podem ser divididos entre os tipos:
- string : todos os valores que estiver entre aspas é um string, ou seja, um texto. EX: 'Higor'
- integer: todo número inteiro. EX: 41
- float ou double: todo número decimal . EX: 1.78
- Boolen: valor verdadeiro (true) ou falso (false)
 
# operadores aritiméticos:

+ : adição
- : subtração
* : multiplicação
/ : divisão
** : exponenciação
% : resto de divisão, operador de módulo