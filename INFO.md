$ composer server    Iniciar servidor com localhost:8080


Zend PASTAS
- config : toda configurtação geral da aplicação fica dentro da pasta config.

- data : tudo relacionado a dados fica na pasta data.

- public : raiz da aplicação, onde se encotra o index.php, onde guarda o css, imagens, js.

- module : onde estará o fonte da aplicação, como padrao vem o application. Dentro da pasta do modulo vem a estrutura. View: parte visual para o usuário, - src> código fonte dos formulário controle e outros.


Criando Módulo ZEND
- CRIAR PASTA DENTRO DE module
- DENTRO DA PASTA CRIADA CRIAR 4 PASTAS: config, test, src, view
    - DENTRO DA PASTA config CRIAR ALQUIVO module.config.php (Retorna array no memomento da execução podendo sobscrever alguamas configurações)
        - DENTRO DO ARQUIVO module.config.php: namespace NOME DO MODULO; return[];
    - DENTRO DA PASTA src CRIAR ARQUIVO Module.php
