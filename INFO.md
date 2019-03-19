INSTALAÇÕES NECESSÁRIAS
- PHP (Última versão)
- Composer 
- VS Code (EXTENSÔES:)

COMANDOS UTEIS
- $ composer dump-autoload  (Insere um novo módulo nas configurações)
- $ composer update   (Atualizada a pasta vendor)
- $ composer serve    (Iniciar servidor com localhost:8080)

MVC
Padrão de projeto que divide em 3 camadas:
Model: camada dos dados 
Controler: Responsável pelas transações, indicar o que vai ser chamado.
View: Está à frente do usuário, (a partir dessa interação ele faz a requisição para o controler que faz a gerencia dos models e retorna para a view o resultado da requisição.

ZEND 
Passo 1: Instalar Skeleton
$ composer create-project zendframework/skeleton-application ./Nome PASTA


ZEND PASTAS
- config: toda configuração geral da aplicação fica dentro da pasta config.
- data: tudo relacionado a dados fica na pasta data.
- public: raiz da aplicação, onde se encontra o index.php, onde guarda o css, imagens, js.
- module: onde estará o fonte da aplicação, como padrão vem o application. Dentro da pasta do modulo vem a estrutura. view: parte visual para o usuário, - src: código fonte dos formulários controle e outros.



CRIANDO MÓDULO ZEND
- CRIAR PASTA DENTRO DE module
1. DENTRO DA PASTA CRIADA CRIAR 4 PASTAS: config, test, src, view
    1.1 DENTRO DA PASTA config CRIAR ALQUIVO module.config.php (Retorna array no momento da execução podendo subscrever algumas configurações)
    
    1.2 DENTRO DA PASTA src CRIAR ARQUIVO Module.php. (Arquivo que é chamado quando o módulo é chamado pelo ZEND).
        1.2.1 DENTRO DA PASTA src CRIAR PASTA CHAMADA Controller.
            1.2.1.1 DENTRO DA PASTAS Controller CRIAR ARQUIVO PessoaController.php.
    
    1.3 DENTRO DA PASTA view CRIAR UMA PASTA CHAMADA pessoa
        1.3.1 DENTRO DE pessoa CRIAR UMA NOVA PASTA CHAMADA pessoa
            1.3.1.1 DENTRO DA SEGUNDA PASTA pessoa CRIAR index.phtml

2. Dentro da pasta autoload no arquivo modules.config.php incluir o nome do novo módulo criado.

3. Dentro do arquivo composer.json incluir no autoload PSR4 o modulo novo.

4. Utilizar o comando  $composer update


ROTAS
- A rota do tipo Segment direciona para determinada ação dentro de um controler.
- Para criar uma rota declaramos no router, e depois colocamos sua configuração. Se casar a configuração com o que for informado na rota é direcionado para o console. 
- Action é o metodo do console que vai ser acionado. INDEX é o padrão. O que pode passar no action é configurado embaixo. 
- Id vai ser usado quando preisar editar elemento ou excluir.
- O dafaults é configurado caso não seja informado algum parametro, por padrão o action é o index, o id tbm pode ser especificado.
- Todo novo método que for adicionado precisa ser configurado no controller. Como padrão é metodoAction. E precisa ser criado uma view com o conteúdo.


ERROS POSSÍVEIS 
- 404 The requested URL could not be matched by routing.
Apagar arquivos .php da pasta cache.

- Connect Error: SQLSTATE[HY000] [2054] The server requested authentication method unknown to the client
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password
BY 'root';  


ZEND DB 
$ composer require zendframework/zend-db