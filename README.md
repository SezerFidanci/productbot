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
### Result
```json
{
  "status": true,
  "message": "success_loaded",
  "data": {
    "title": "adidas 3 Bantlı Tişört - Siyah   adidas Turkey",
    "description": "adidas.com.tr’den 3 Bantlı Tişört - Siyah satın al! 3 Bantlı Tişört - Siyah ürününün adidas’ın Türkiye’deki resmi online shop’unda bulunan tüm stillerine ve renklerine göz at.",
    "keywords": "3 Bantlı Tişört",
    "price": "199",
    "currency": "TRY",
    "images": Array[8][
      "https://www.adidas.com.tr/on/demandware.static/Sites-adidas-TR-Site/-/default/dw08eb76e9/images/country/tr_TR.png",
      "https://www.adidas.com.tr/on/demandware.static/-/Sites-adidas-TR-Library/tr_TR/dwc50a7300/brand/images/2017/09/adi_desktop_usp_2.png",
      "https://www.adidas.com.tr/on/demandware.static/-/Sites-adidas-TR-Library/default/dw49c26e1e/promo-grid-icon_83518.png",
      "https://assets.adidas.com/images/w_320,h_320,f_auto,q_auto:sensitive,fl_lossy/c51dd9a5576841059d31a83500d4d926_9366/3_Bantli_Tisort_Siyah_CW1202_01_laydown.jpg",
      "https://assets.adidas.com/images/w_54,h_54,f_auto,q_auto:sensitive,fl_lossy/c51dd9a5576841059d31a83500d4d926_9366/3_Bantli_Tisort_Siyah_CW1202_01_laydown.jpg",
      "https://assets.adidas.com/images/w_54,h_54,f_auto,q_auto:sensitive,fl_lossy/e4f903879b3d4d3e8188a83500d4e495_9366/3_Bantli_Tisort_Siyah_CW1202_02_laydown.jpg",
      "https://adl-foundation.adidas.com/prod/v26.0.0/assets/flags/tr.svg",
      "https://www.adidas.com.tr/akam/11/pixel_36b71f44?a=dD0zZDI2NzE4NGMzMDQ1OTJhZTQxNjhjYzNkNjc4MDI2OGJiNjdkNmM5JmpzPW9mZg=="
    ]
  }
}
```
