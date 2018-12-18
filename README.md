# Sistema de coleta IFAL #

Projeto desenvolvido em PHP, utilizando o framework Laravel. Atualmente o principal framework dessa linguagem.
Foram utilizados grande parte dos recursos providos pelo framework.
- Migrações
- Validações Através de FormRequest.
- MVC

Banco de dados
- Foi utilizado o **Eloquent** que é o ORM provido pelo framework. Facilitando nas consultas e elementos de bancos de dados

Segurança da Informação

Gestao de projetos

Interface Humano Computador
- Implementação de design baseando-se nas heuristicas de nielsen para aprimorar a usabilidade do sistema.
- Validações
- funçoes basicas do sistema semelhantes o que permite que o usuario lembre-se com mais facilidade do uso.

Limitações
- Não conseguimos realizar a implementaçao de graficos para melhorar a experiencia do usuario com relação a visualização das coletas.

# Instalação.
Requerimentos 
- PHP 7+
- Mysql 

- Baixe e instale o composer no windows. https://getcomposer.org/Composer-Setup.exe
- Clone o projeto para o diretorio **htdocs** no xampp.
- git clone https://github.com/jalvesmesquita/coleta.git
- Execute o comando **composer install**
- Crie o banco de dados com o nome **coleta** [obs: minusculo]
- Edite o arquivo .env com as informações
  - DB_DATABASE=coleta
  - DB_USERNAME='usuario do banco'
  - DB_PASSWORD='senha do banco'
- Execute os respectivos comandos
  - php artisan migrate
  
# Funcionalidades do sistema.
- Gerenciar motoristas
- Gerenciar Ajudantes
- Gerenciar Veiculos
- Gerenciar Usuarios
- Gerenciar Coletas

- Realize o cadastro do usuario do sistema. [Rota: localhost/cadastro]
- Realize o cadastro dos motoristas.
- Realize o cadastro dos ajudantes
- Realize o cadastro dos veiculos
- Realize o cadastro dos usuarios [**Clique no botao Mapa para exibir o mapa e ao clicar no mapa ele seleciona aquela coordenada**]
- Realize o cadastro de uma coleta selecionando todos os elementos necessarios para a coleta.
