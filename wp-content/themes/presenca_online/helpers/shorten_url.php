<?php
function shortUrl($bit, $id) {
    $bity = wp_cache_get( 'bitly'.$id );
    if ( false === $bity ) {
        $bity=bit_ly_short_url($bit);
        wp_cache_set( 'bitly'.$id, $bity );
    }

    return $bity;
}


function bit_ly_short_url($url, $format='txt') {
    $login = "signorini";
    $appkey = "R_3cf501e6f0141250cd70618097f87d90";
    $bitly_api = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$bitly_api);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
