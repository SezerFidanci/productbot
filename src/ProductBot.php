<?php

namespace ProductBot;

use DOMDocument;

class ProductBot
{
    public function crawPage($url="")
    {
        // Verify URL Start
        if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
            $response = array(
                'status'=>false,
                'message'=>"url_invalid",

            );
            return $response;
        }
        // Verify URL End


        $title="";
        $description="";
        $keywords="";
        $pageimages = array();


        $data =$this->url_get_contents($url);

        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML('<?xml version="1.0" encoding="UTF-8"?>' .$data);
        libxml_clear_errors();


        // Page Title Start
        $titles = $doc->getElementsByTagName('title');
        if ($titles->length > 0)
        {
            $title = $titles->item(0)->textContent;
        }
        // Page Title End


        // Page Description,Keywords Start
        $metas = $doc->getElementsByTagName('meta');
        for ($i = 0; $i < $metas->length; $i++)
        {
            $meta = $metas->item($i);
            if($meta->getAttribute('name') == 'description')
                $description = $meta->getAttribute('content');
            if($meta->getAttribute('name') == 'keywords')
                $keywords = $meta->getAttribute('content');
        }

        // Page Description,Keywords End

        // Page Images Start
        $images = $doc->getElementsByTagName('img');
        foreach ($images as $image) {

            array_push($pageimages,$image->getAttribute('src'));


        }
        // Page Images End


        $pageData = array(
            'title'=>$title,
            'description'=>$description,
            'keywords'=>$keywords,
            'images'=>$pageimages,
        );

        $response = array(
            'status'=>true,
            'message'=>"page_success_loaded",
            'data'=>$pageData,
        );

        return $response;
    }


    private function url_get_contents($url) {

        $cookie = tempnam ("/tmp", "CURLCOOKIE");
        $ch = curl_init();
        $header=array(
            'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-us,en;q=0.5',
            'Accept-Encoding: gzip,deflate',
            'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7',
            'Keep-Alive: 115',
            'Connection: keep-alive',
        );

        curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_ENCODING, "" );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );    # required for https urls
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 20 );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 20 );
        curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.com/');
        curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

        $content = curl_exec( $ch );


        curl_close ( $ch );

        return $content;
    }

}