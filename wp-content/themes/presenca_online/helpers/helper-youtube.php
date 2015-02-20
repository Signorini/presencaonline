<?php
/* --- functions youtube --- */
function youtube_videoID($url) {
   preg_match( '/(youtube\.com|youtu\.be)\/(watch\?)[A-Za-z0-9=_&-]*v=([A-Za-z0-9-_]*)/', $url, $matches );
 
  if ( empty($matches) || empty($matches[3]) ) return false;
  
  $videoid = $matches[3];
   return $videoid;
}

function is_youtube($file) {
  if (preg_match('/(youtube\.com|youtu\.be)\/(watch\?)[A-Za-z0-9=_&-]*v=([A-Za-z0-9-_]*)/',$file)) {
    return true;
  } else {
    return false;
  }
}

function isYoutubeEmbed($file) {
  if (preg_match('/(youtube\.com|youtu\.be)/',$file)) {
    return true;
  } else {
    return false;
  }
}

function getImgYoutube($id, $size=0) {
    return 'http://img.youtube.com/vi/'.$id.'/'.$size.'.jpg';
}

function getEmbedLinkYoutube($url) {
    $id=youtube_videoID($url);

	if(!empty($id)) {
    $tag='<iframe class="youtube-player embedSingle" type="text/html" src="http://www.youtube.com/embed/'.$id.'" allowfullscreen frameborder="0">
</iframe>';
    return $tag;
	}
}
