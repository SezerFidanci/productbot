<?php


use ProductBot\ProductBot;

require_once __DIR__ . '/autoload.php';



    $product = new ProductBot();
    //$data = $product->crawPage("https://www.nike.com/tr/t/air-max-270-react-eng-ayakkab%C4%B1s%C4%B1-KP30mK/CK2595-001");
   // $data = $product->crawPage("https://www.trendyol.com/trendyolmilla/siyah-yuksek-bel-basic-orme-tayt-twoaw20ta0047-p-30560409");
    //$data = $product->crawPage("https://www.adidas.com.tr/tr/3-bantli-tisort/CW1202.html");
    $data = $product->crawPage("https://www.decathlon.com.tr/mh100-polar-id_8492976.html");

   // $data = $product->crawPage("https://www.davidyurman.com/products/mens/mens-bracelets/spiritual-bead-bracelet-8mm-b05375mss.pdp.html?swatchCode=B05375MSSBBO");
    echo json_encode($data) ;

