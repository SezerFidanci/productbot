# Product Bot

[!]https://img.shields.io/packagist/v/sezerfidanci/productbot

E-Commerce web site data crawler library.

### Installation
```sh
$ composer require sezerfidanci/productbot
```
### Usage
```sh
$ <?php
$ use ProductBot\ProductBot;
...
...
$ $product = new ProductBot();
$ $response = $product->crawPage("https://www.decathlon.com.tr/mh100-polar-id_8492976.html");
$ echo json_encode($response);
```
