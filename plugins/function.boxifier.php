<?php
# Shadowbox Plugin for Uploaded Images
# Reto Hugi
# http://hugi.to
# For more information see the help sections at the end of this file
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Based on and inspired by the ImageGallery Plugin by Russ Baldwin 
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


function smarty_cms_function_Boxifier($params, &$smarty) {

    $galleryTitle = "Gallery";
    $picFolder = 'uploads/images/';  //path to pics, ending with /
    $ulID = 'picturelist'; // Set the wrapping div id to allow you to have different CSS for each gallery.
    $sortBy = 'name'; //Sort image files by 'name' o 'date'
    $sortByOrder = 'asc'; //Sort image files in ascending order: 'asc' or decending order: 'desc'
    $bigPicCaption = 'name'; // either 'name', 'file', 'number' or 'none', Sets caption above big image.
    $thumbPicCaption = 'name'; // either 'name', 'file', 'number' or 'none', Sets caption below thumbnails
    $bigPicAltTag = 'name'; // either 'name', 'file', 'number'. Sets alt tag - compulsory
    $bigPicTitleTag = 'name'; // either 'name', 'file', 'number' or 'none'. Sets title tag or removes it
    $thumbPicAltTag = 'name'; // either 'name', 'file', 'number'. Sets alt tag - compulsory
    $thumbPicTitleTag = ''; // either the default or 'name', 'file', 'number' or 'none'. Sets title tag or removes it

    if(isset($params['ulID'])) $divID = $params['ulID'];
    if(isset($params['picFolder'])) $picFolder = $params['picFolder'];
    if(isset($params['sortBy'])) $sortBy = $params['sortBy'];
    if(isset($params['sortByOrder'])) $sortByOrder = $params['sortByOrder'];
    if(isset($params['gTitle'])) $galleryTitle = $params['gTitle'];

    /*
    if(isset($params['bigPicCaption'])) $bigPicCaption = $params['bigPicCaption'];
    if(isset($params['thumbPicCaption'])) $thumbPicCaption = $params['thumbPicCaption'];
    if(isset($params['bigPicAltTag'])) $bigPicAltTag = $params['bigPicAltTag'];
    if(isset($params['bigPicTitleTag'])) $bigPicTitleTag = $params['bigPicTitleTag'];
    if(isset($params['thumbPicAltTag'])) $thumbPicAltTag = $params['thumbPicAltTag'];
    if(isset($params['thumbPicTitleTag'])) $thumbPicTitleTag = $params['thumbPicTitleTag'];
    */


    //Read Image Folder
    $selfA = explode('/', $_SERVER["PHP_SELF"]);
    $self = $selfA[sizeOf($selfA)-1] . '?page=' . $_GET['page'];
    if( !is_dir($picFolder) || !is_readable($picFolder) ) return;

    $picDir = dir($picFolder);
    $list = array();
    while($check = $picDir->read()) {
        if(strpos($check,'.jpg') || strpos($check,'.JPG') || strpos($check,'.jpeg')
            || strpos($check,'.JPEG') || strpos($check,'.gif') || strpos($check,'.GIF')
            || strpos($check,'.png') || strpos($check,'.PNG'))  {

            $cThumb = explode("_", $check);
            if($cThumb[0] != "thumb" && $cThumb[0] != "editor") {
                $list[] = $check;
            }
        }
    }

    //Sort by date
    if($sortBy == "date") {
        $tmp = array();
        foreach($list as $k => $v) {
            $tmp['file'][$k] = $v;
            $tmp['date'][$k] = filemtime($picFolder . $v);
        }

        //Sort by Order
        ($sortByOrder == 'desc') ? array_multisort($tmp['date'], SORT_DESC, $tmp['file'], SORT_DESC) : array_multisort($tmp['date'], SORT_ASC, $tmp['file'], SORT_ASC);
        $list = $tmp['file'];
    }
    else ($sortByOrder == 'desc') ? rsort($list) : sort($list);

    //Output
    $count = 1;
    $output = '';

    //thumbcount
    $deci = array();
    for($i=1; $i<=sizeof($list); $i++) {
        $deci[$i] = $i;
        while( strlen($deci[$i]) < strlen(sizeof($list)) ) $deci[$i] = '0' . $deci[$i];
    }

     
    // thumb generation
    $output .= '<ul id="'.$ulID.'">'. "\n";
    $i = 1;
    foreach($list as $key => $value) {
        $bigPic = $picFolder . $value;
        //list($bigPicWidth, $bigPicHeight) = getImageSize($bigPic);
        $thumbPic = $picFolder . 'thumb_' . $value;
        $thumbSize = @getImageSize($thumbPic) or ($thumbSize[0] = 96) and ($thumbSize[1] = 96);
        $path_parts = pathinfo($bigPic);
        $extension = '.' . $path_parts['extension'];
        $ImageFileName = basename($bigPic); 
        $bigPicName = basename($bigPic, $extension);

        $output .= '<li class="thumb">';
        $output .= '<a href="' . $bigPic . '" rel="shadowbox[' . $galleryTitle . ']" title="' . $bigPicName . '">' . "\n";

        //Set Image
        $output .= '<img src="' . $thumbPic .'" alt="' . $bigPicName . '" />';

        /*
        //title tags
        switch($thumbPicTitleTag) {
            case "name":        
                $output .=' title="'.$bigPicName.'... click for a bigger image"';
                break;   
            case "number":
                $output .=' title="'.($key+1).'... click for a bigger image"';
                break;
            case "file":
                $output .=' title="'.$ImageFileName.'... click for a bigger image"';
                break;  
            case "none":
                break;  
            default:
                $output .=' title="Click for a bigger image..."';
                break;   
        }

        //alt tags - compulsory
        switch($thumbPicAltTag) {
            case "name":        
                $output .=' alt="'.$bigPicName.'"';
                break;   
            case "number":
                $output .=' alt="'.($key+1).'"';
                break;
            case "file":
                $output .=' alt="'.$ImageFileName.'"';
                break;   
            default:
                $output .=' alt="'.$bigPicName.'"';
                break;   
        }
        */
        
        
        /*
        // Set thumb captions
        switch($thumbPicCaption) {
            case "name":        
                $output .= '<p class="thumbPicCaption">'.$bigPicName.'</p>'."\n";
                break;   
            case "number":
                $output .= '<p class="thumbPicCaption">'.($key+1).'</p>'."\n";
                break;
            case "file":
                $output .= '<p class="thumbPicCaption">'.$ImageFileName.'</p>'."\n";
                break; 
            case "none":
                break;
            default:
                $output .= '<p class="thumbPicCaption">'.$bigPicName.'</p>'."\n";
                break;   
        }
        */

        //Close tags
        $output .='</a></li>' . "\n";
        
    }
    
    $output .= '</ul>' . "\n" . '<div style="clear:both"></div>' . "\n";

    return $output;
}

function smarty_cms_help_function_Boxifier() {
    echo <<<EOF
    <p>
        Boxifier builds a thumbnail listing out of an image folder and provides 
        integration with Shadowbox.<br/>
        Usage:<br/>
        <code>{boxifier picFolder="uploads/images/yourFolder"}
    </p>
    <h2>Options</h2>
    <ul>
        <li><strong>gTitle</strong>: sets the Title of the Gallery</li> 
        <li><strong>ulID</strong>: sets the html ID for the UL Element</li> 
        <li><strong>picFolder</strong>: sets the path to the image folder</li>
        <li><strong>sortBy</strong>: use sortby="name" to sort alphabetically</li>
        <li><strong>sortByOrder</strong>: use <strong>asc</strong> to sort ascending
            or <strong>desc</strong> to sort descending. (only makes sense in 
            combination with the parameter <i>sortBy</i>)</li>
    </ul>
EOF;
}

  if(isset($params['ulID'])) $divID = $params['ulID'];
    if(isset($params['picFolder'])) $picFolder = $params['picFolder'];
    if(isset($params['sortBy'])) $sortBy = $params['sortBy'];
    if(isset($params['sortByOrder'])) $sortByOrder = $params['sortByOrder'];

function smarty_cms_about_function_Boxifier() {
    echo <<<EOF
    <p>Author: <a href="http://hugi.to">Reto Hugi</a></p>
    <p>Version: <strong>0.1</strong></p>
    <p>
    Change History:<br/>
    <strong>Version 0.1</strong> - First release as a Plugin (Tag)<br/>
    </p>
    <p>
    Tested with:<br/>
    CMSMS 1.6.5
    </p>
EOF;
}

?>
