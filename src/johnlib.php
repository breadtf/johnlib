<?php

namespace breadtf\johnlib;

class johnlib {

    const version = "1.0.1";

    private function johnParse($johnContent){
        $dom = new DOMDocument();
        $dom->loadHTML($johnContent, LIBXML_NOERROR);
        $john = $dom->getElementsByTagName('img');
        
        $firstjohn = $john->item(0);
    
        return $firstjohn->getAttribute('src');
    }

    private function getJohnURL($johnContent){
        $dom = new DOMDocument();
        $dom->loadHTML($johnContent, LIBXML_NOERROR);
        $john = $dom->getElementsByTagName('a');
        
        $firstjohn = $john->item(0);
    
        return $firstjohn->getAttribute('href');
    }

    public function getJohn($domain){
        $johnURL = 'https://john.citrons.xyz/embed?ref=' . $domain;
        $john = file_get_contents($johnURL);
        $johnData = [
            "image" => "https://john.citrons.xyz/" . $this->johnParse($john),
            "url"   => $this->getJohnURL($john)
        ];
        return $johnData;
    }   

    public function generateJohn($domain){
        $johnData = $this->getJohn($domain);
        return "<a href='" . $johnData["url"] . "'><img src='" . $johnData["image"] . "' alt='johnvertisement'></a>";
    }
}
