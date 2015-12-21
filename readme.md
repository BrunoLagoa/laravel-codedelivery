## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

<hr>

## laravel-codedelivery
Curso Laravel 5.1 + Ionic + Cordova - Code Education [Laravel 5.1 + ionic + cordova](http://sites.code.education/laravel-ionic-cordova/)

## Fase 1 do Projeto Laravel 5.1 + Ionic + Cordova - Área Administrativa

Agora que você já possui uma base para trabalharmos em nossa área administrativa, faça:

- Crie uma administração de Clientes (CRUD)
- Crie uma área de gerenciamento de pedidos (Listagem dos pedidos (e itens), edição de status e atribuição do entregador)

## Fase 2 do Projeto Laravel 5.1 + Ionic + Cordova - Checkout

Nessa fase, você deverá completar toda a área administrativa, bem como o checkout de um pedido, da mesma forma como foi apresentada no curso.

## Fase 3 do Projeto Laravel 5.1 + Ionic + Cordova - Criando autenticação para API

Nesta fase você deve criar a autenticação realizada no capítulo. Além disto, você deve criar também o agrupamento para as rotas da API e uma rota com URL /api/teste, sendo que esta rota deve estar protegida pelo OAuth.

Crie também um seeder com nome OAuthClientSeeder. Este seeder deve criar um registro na tabela oauth_clients, adicionando:

* client_id: appid01
* client_secret: secret
* app: Minha App Mobile
* created_at e updated_at com a data atual.

## Fase 4 do Projeto Laravel 5.1 + Ionic + Cordova - Criando API de client

Agora que já criamos a API que o client usará no aplicativo mobile, você deve reproduzir o mesmo e ainda criar um endpoint com a rota api/authenticated que retornará os dados do usuário autenticado.

Para não mostrar o password na serialização, use na entidade User:

* protected $hidden = ['password'];

## Fase 5 do Projeto Laravel 5.1 + Ionic + Cordova - Trabalhando com validações e presenters

Nesta fase você terá que fazer um OrderTransformer semelhante ao que fizemos nas aulas.
 - Na order teremos os seguintes dados:

 * total, status e created

 Todos relacionamentos serão atribuídos como "availableIncludes", então teremos:

  * items (OrderItemTransformer)
  * cupom (CupomTransformer), dados: code
  * client (ClientTransformer), dados: name, email, phone, address, zipcode, city, state
  * deliveryman (DeliverymanTransformer), dados: id, name, email

 - Para o OrderItemTransformer, teremos:

  price, qtd,
  
  O relacionamento com product deve ser atribuído com "defaultIncludes" e deve
  retornar o id, o name e o price do product

 - No endpoint de retorno do usuário autenticado devemos usar o UserTransformer que será responsável por retornar:

 * id, name, email e role

Atribua o UserTransformer ao UserRepositoryEloquent. Faça a validação que fizemos para o cadastro de Order



------------------------------------------------------------------------------------------
[Bruno Castro](http://www.bhzautomacao.com.br) - Development