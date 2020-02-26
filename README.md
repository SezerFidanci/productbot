# Product Bot

![](https://img.shields.io/packagist/v/sezerfidanci/productbot)
![](https://img.shields.io/github/forks/SezerFidanci/productbot)
![](https://img.shields.io/github/stars/SezerFidanci/productbot)

E-Commerce web site data crawler PHP library.

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
