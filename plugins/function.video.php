<?php
#
# Plugin to include videos uploaded to the most popular video sharing portals.
#
# Version: 0.1
# Author: Reto Hugi  (http://hugi.to/blog/)
# License: GPL v3 (http://www.gnu.org/licenses/gpl.html)
#
# For more information see the help sections at the end of this file.
# Parts of the Plugin (namely the url parsers for some of the portals) are ported
# from a js function for TinyMCE available in LifeType (http://www.lifetype.org).
#
# Changelog:
# 2010-01-08 / Version 0.1 / initial release


function smarty_cms_function_Video($params, &$smarty) {

    $vid = new Video();
        
    if(isset($params['url'])) $vid->setVideoUrl($params['url']);
    if(isset($params['width'])) $vid->setWidth((int)$params['width']);
    if(isset($params['height'])) $vid->setHeight((int)$params['height']);

    return $vid->getHtml(); 
}

class Video {

    var $videoUrl;  // permalink of the video on the service site
    var $width;     // width of the included video
    var $height;    // height of the included video
    var $color1;    // color setting for youtube (not implemented yet)
    var $color2;    // dito

    var $availableServices;

    function __construct() {
    
        // Set some default values
        $this->width = 480;
        $this->height = 385;
        
        $this->availableServices = array('youtube.com', 'video.google.com', '5min.com',
                                        'dailymotion.com','vimeo.com');
    }

    function getHtml() {
        
        // validate the user parameters
        if(!$this->validateParams()) {
            return '<p>Invalid Parameters set for Video Plugin</p>';
        }
              
        $output = '';
        $service = $this->getService($this->videoUrl);
        
        // which service are we using?
        switch ($service) {
    
            case 'youtube.com':
                $output = $this->getYoutube();
                break;
                
            case 'video.google.com':
                $output = $this->getGoogleVideo();
                break;

            case '5min.com':
                $output = $this->get5min();
                break;

            case 'dailymotion.com':
                $output = $this->getDailymotion();
                break;

            case 'vimeo.com':
                $output = $this->getVimeo();
                break;
                                                                        
            default:
                $output = $service;
        }
        return $output;    
    }

    function getService($url) {
        
        foreach($this->availableServices as $value) {
            $pos = strpos($url, $value);
            
            //this is a lazy check to see if it's a "near" valid service url.
            //It's not a validation check! Real validation should be done within 
            // the getters
            if ($pos !== false) {
                $service = $value;
                break;
            }
        }
        if ($service != '') {
            return $service;            
        }
        else {
            return "<p>No valid service defined. Check help for available services.";
        }

    }

    function getYoutube() {
	    $out = '';
	    $params = array("object","param");
	    $url = '';
	    
	    // check if this is a URL pointing to a youtube link
	    if ( preg_match("/http:\/\/.{2,3}\.youtube\.com\//i", $this->videoUrl) ) {
		    
		    if( preg_match("/http:\/\/.{2,3}\.youtube.com\/.*?v=([\-0-9a-zA-z_]*).*/i",$this->videoUrl,$matches) ) {			
			    $videoId = $matches[1];
		    }
		    
		    $url = "http://www.youtube.com/v/" . $videoId;

		    $params = array("object" => array("width" => $this->width,
		                                      "height"=> $this->height,
		                                      "data" => $url),
		                    "param" => array("movie" => $url)
		                   );
		    
            $out = $this->getVideoHtml($params);
  
	    }
	    else {
	        $out = "<p>No valid Youtube link</p>";
	    }
	    return $out;
    }

    function getGoogleVideo() {
	    $out = '';
	    $params = array("object","param");
	    $url = '';

	    // check if it's a link to a video page or a link to the video player
	    if( substr($this->videoUrl, 0, 40 ) == "http://video.google.com/videoplay?docid=" ) {

		    if( preg_match("/http:\/\/video\.google\.com\/videoplay\?docid=([\-0-9a-zA-z_]*).*/i",$this->videoUrl,$matches) ) {			
			    $videoId = $matches[1];
		    }

		    $url = "http://video.google.com/googleplayer.swf?docId=" . $videoId;

		    $params = array("object" => array("width" => $this->width,
		                                      "height"=> $this->height,
		                                      "data" => $url),
		                    "param" => array("movie" => $url)
		                   );
		    
            $out = $this->getVideoHtml($params);
  
	    }
	    else {
	        $out = "<p>No valid Google Video link</p>";
	    }
	    return $out;
    }

    function get5min() {
	    $out = '';
	    $params = array("object","param");
	    $url = '';

	    if( preg_match("/http:\/\/www\.5min\.com\//i", $this->videoUrl) ) {
	        
		    if( preg_match("/.*[^-]-([0-9]*)$/i",$this->videoUrl,$matches) ) {			
			    $videoId = $matches[1];
		    }

		    $url = "http://embed.5min.com/" . $videoId . "/";

		    $params = array("object" => array("width" => $this->width,
		                                      "height"=> $this->height,
		                                      "data" => $url),
		                    "param" => array("movie" => $url)
		                   );
		    
            $out = $this->getVideoHtml($params);
  
	    }
	    else {
	        $out = "<p>No valid 5min.com link</p>";
	    }
	    return $out;
    }


    function getDailymotion() {
	    $out = '';
	    $params = array("object","param");
	    $url = '';

	    if( preg_match("/http:\/\/www\.dailymotion\.com\//i", $this->videoUrl) ) {
	        
		    if( preg_match("/video\/([0-9a-zA-z]*)_/i",$this->videoUrl,$matches) ) {			
			    $videoId = $matches[1];
		    }

		    $url = "http://www.dailymotion.com/swf/" . $videoId . "&amp;related=0";

		    $params = array("object" => array("width" => $this->width,
		                                      "height"=> $this->height,
		                                      "data" => $url),
		                    "param" => array("movie" => $url)
		                   );
		    
            $out = $this->getVideoHtml($params);
  
	    }
	    else {
	        $out = "<p>No valid dailymotion.com link</p>";
	    }
	    return $out;
    }

    function getVimeo() {
	    $out = '';
	    $params = array("object","param");
	    $url = '';

	    if( preg_match("/http:\/\/(www\.)?vimeo\.com\//i", $this->videoUrl) ) {
	        
		    if( preg_match("/vimeo\.com\/([0-9]*)/i",$this->videoUrl,$matches) ) {			
			    $videoId = $matches[1];
		    }

		    $url = "http://vimeo.com/moogaloop.swf?clip_id=" . $videoId . "&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=&amp;fullscreen=1";

		    $params = array("object" => array("width" => $this->width,
		                                      "height"=> $this->height,
		                                      "data" => $url),
		                    "param" => array("movie" => $url)
		                   );
		    
            $out = $this->getVideoHtml($params);
  
	    }
	    else {
	        $out = "<p>No valid vimeo.com link</p>";
	    }
	    return $out;
    }


    function getVideoHtml(&$params) {
	    $html = '<object type="application/x-shockwave-flash" ';
	    
	    // add height and width
	    $html .= 'style="width: '.$params['object']['width'].'px; height: '.$params['object']['height'].'px;" ';
	    
	    // add Data
	    $html .= 'data="'.$params['object']['data'].'" ';
	    $html .= '>';
	    
	    // add Params
	    foreach($params['param'] as $name => $value) {
	        $html .= '<param name="'.$name.'" value="'.$value.'" />';
	    }
	    $html .= '</object>';
	    	
	    return $html;
    }

    function isValidUrl($url) {
        if ( preg_match("/^(http:\/\/|https:\/\/)(([a-z0-9]([-a-z0-9]*[a-z0-9]+)?){1,63}\.)+[a-z]{2,6}/i", $url) )
            return true;
        else
            return false;
    }
    
    function validateParams() {
        
        if ($this->isValidUrl($this->videoUrl) == false ||
            is_int($this->width) == false ||
            is_int($this->height) == false) {
            
            return false;
        }
        return true;
    }
   
    function setVideoUrl($var) {
            $this->videoUrl = $var;
    }

    function setService($var) {
        $this->service = $var;
    }

    function setWidth($var) {
        $this->width = (int)$var;
    }
    
    function setHeight($var) {
        $this->height = (int)$var;
    }

}


function smarty_cms_help_function_Video() {
    echo <<<EOF
    <p>
        Plugin to include videos uploaded to the most popular video sharing 
        portals.<br/>
        Suported services: youtube.com, video.google.com, 5min.com,
        dailymotion.com, vimeo.com.<br/>
        Usage:<br/>
        <code>{video url="video-url"}</code>
    </p>
    <h2>Options</h2>
    <ul>
        <li><strong>height</strong>: sets the height of the video</li> 
        <li><strong>width</strong>: sets the width of the video</li>
    </ul>
EOF;
}

function smarty_cms_about_function_Video() {
    echo <<<EOF
    <p>Author: <a href="http://hugi.to">Reto Hugi</a></p>
    <p>Version: <strong>0.1</strong></p>
    <p>
    Change History:<br/>
    <strong>Version 0.1</strong> - First release as a Plugin (Tag)<br/>
    </p>
    <p>
    Tested with CMSMS Version:<br/>
    1.6.6
    </p>
EOF;
}

?>
