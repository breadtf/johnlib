<?php

class johnlib {

    const version = "1.0.0";

    function johnParse($johnContent){
        $dom = new DOMDocument();
        $dom->loadHTML($johnContent, LIBXML_NOERROR);
        $john = $dom->getElementsByTagName('img');
        
        $firstjohn = $john->item(0);
    
        return $firstjohn->getAttribute('src');
    }

    function getJohnURL($johnContent){
        $dom = new DOMDocument();
        $dom->loadHTML($johnContent, LIBXML_NOERROR);
        $john = $dom->getElementsByTagName('a');
        
        $firstjohn = $john->item(0);
    
        return $firstjohn->getAttribute('href');
    }

    function getJohn($domain){
        $johnURL = 'https://john.citrons.xyz/embed?ref=' . $domain;
        $john = file_get_contents($johnURL);
        $johnData = [
            "image" => "https://john.citrons.xyz/" . $this->johnParse($john),
            "url"   => $this->getJohnURL($john)
        ];
        return $johnData;
    }   

    function generateJohn($domain){
        $johnData = $this->getJohn($domain);
        return "<a href='" . $johnData["url"] . "'><img src='" . $johnData["image"] . "' alt='johnvertisement'></a>";
    }
}
