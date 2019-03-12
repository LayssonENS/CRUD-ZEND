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

2. DENTRO DA PASTA src CRIAR ARQUIVO module.php.
