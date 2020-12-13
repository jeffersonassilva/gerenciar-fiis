Sobre o Gerenciador de FII's
================

Esse projeto está sendo construído com o intuito de ajudar investidores a controlarem seus investimentos em Fundos Imobiliários (FII). Em breve eu o disponibilizarei na web com acesso gratuito.

Mas, caso você tenha um pouco de conhecimento em desenvolvimento de software e deseja rodar na sua máquina ou servidor local, deixarei aqui o passo-a-passo, basta seguir as instruções abaixo.

## Requisitos mínimos

- [PHP] >= 7.1
- [Composer]
- [npm]
- [Docker]

## Instalação

Execute os comandos abaixo para instalar as dependências do projeto.

```
$ composer install
```

```
$ npm install
```

A partir daqui vou assumir que você prefere usar o docker, porque não precisamos inventar a roda e instalar o [MySQL] localmente somente para isso.

```
$ docker-compose up --build
```

Lembrando que variável de ambiente `APPLICATION_ENV` tem o valor `development` por default, para que erros fiquem visíveis ao desenvovedor.

Caso seja necessário trocar, basta editar essa variável no arquivo `docker-compose.yml`.

Para que seu ambiente fiquei mais próximo do real, é aconselhável adicionar a linha abaixo no arquivo `hosts` da sua máquina.

```
0.0.0.0  localhost.agricultura.gov.br
```

As configurações de Banco de Dados estão no arquivo `configs/application.ini`.

Author
-------

* Jefferson Alessandro Santos da Silva - [@jeffersonassilva]

Contribute
----------

Contributions to the package are always welcome!

* Report any bugs or issues you find on the [issue tracker].
* You can grab the source code at the package's [Git repository].

Support
-------

If you are having problems, send a mail to jeffersonassilva@gmail.com.


[PHP]: https://www.php.net/
[Composer]: https://getcomposer.org
[npm]: https://www.npmjs.com/get-npm
[Docker]: https://www.docker.com/products/docker-desktop
[MySQL]: https://www.mysql.com/downloads/
[issue tracker]: https://github.com/jeffersonassilva/vcs-php/issues
[Git repository]: https://github.com/jeffersonassilva/vcs-php
[@jeffersonassilva]: https://instagram.com/jeffersonassilva/
