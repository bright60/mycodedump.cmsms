<?php

/*
  #-------------------------------------------------------------------------
  # Module: PicasaBrowser
  # Version: 2.0, RJM
  #
  #-------------------------------------------------------------------------
  # CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
  # This project's homepage is: http://www.cmsmadesimple.org
  # The module's homepage is: http://dev.cmsmadesimple.org/projects/skeleton/
  #
  #-------------------------------------------------------------------------
  #
  # This program is free software; you can redistribute it and/or modify
  # it under the terms of the GNU General Public License as published by
  # the Free Software Foundation; either version 2 of the License, or
  # (at your option) any later version.
  #
  # This program is distributed in the hope that it will be useful,
  # but WITHOUT ANY WARRANTY; without even the implied warranty of
  # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  # GNU General Public License for more details.
  # You should have received a copy of the GNU General Public License
  # along with this program; if not, write to the Free Software
  # Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
  # Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
  #
  #-------------------------------------------------------------------------

 */

class PicasaBrowser extends CMSModule {
  var $headbodyseparator= "{* HEAD/BODY DIVIDER *}";
  
  function GetName() {
    return 'PicasaBrowser';
  }

  /* ---------------------------------------------------------
    GetFriendlyName()
    --------------------------------------------------------- */

  function GetFriendlyName() {
    return $this->Lang('friendlyname');
  }

  /* ---------------------------------------------------------
    GetVersion()
    --------------------------------------------------------- */

  function GetVersion() {
    return '99'; //this module is customized and thus not upgradeble
  }

  /* ---------------------------------------------------------
    GetHelp()
    --------------------------------------------------------- */

  function GetHelp() {
    return "<h1>ACHTUNG: Dieses Modul habe ich modifiziert und kann nicht aktualisiert werden!</h1>".$this->Lang('help');
  }

  /* ---------------------------------------------------------
    GetAuthor()
    This returns a string that is presented in the Module
    Admin if you click on the "About" link.
    --------------------------------------------------------- */

  function GetAuthor() {
    return 'Rorik J. Melberg/Morten Poulsen';
  }

  function GetAuthorEmail() {
    return 'rorik.melberg@gmail.com/mortenpoulsen@gmail.com';
  }

  function GetChangeLog() {
    echo $this->ProcessTemplate('changelog.tpl');
  }

  function IsPluginModule() {
    return true;
  }

  function HasAdmin() {
    return true;
  }

  function MinimumCMSVersion() {
    return "1.6";
  }

  function GetEventDescription($eventname) {
    return $this->Lang('event_info_' . $eventname);
  }

  function GetEventHelp($eventname) {
    return $this->Lang('event_help_' . $eventname);
  }

  function SetParameters() {
    $this->RegisterModulePlugin();
    $this->CreateParameter('user', '', $this->lang('help_user'));
    $this->CreateParameter('album', '', $this->lang('help_album'));
    $this->CreateParameter('exclude', '', $this->lang('help_exclude'));
    $this->CreateParameter('include', '', $this->lang('help_include'));
    $this->CreateParameter('imagesize', '512', $this->lang('help_imagesize'));
    $this->CreateParameter('imagethumbsize', '64', $this->lang('help_imagethumbsize'));
    $this->CreateParameter('albumthumbsize', '200', $this->lang('help_albumthumbsize'));
    $this->CreateParameter('header','0', $this->lang('help_header'));
  }

  //Add Templates to the database
  function InstallTemplates() {
    // Setup albums template
    $fn = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'original'. DIRECTORY_SEPARATOR . 'albums.tpl';
    if (file_exists($fn)) {
      $template = @file_get_contents($fn);
      $this->SetTemplate('albums', $template);
    }

    // Setup images template
    $fn = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'original'. DIRECTORY_SEPARATOR .'lightbox.tpl';
    if (file_exists($fn)) {
      $template = @file_get_contents($fn);
      $this->SetTemplate('images', $template);
    }
  }

  function InstallPostMessage() {
    if (!function_exists('curl_init') && !ini_get('allow_url_fopen'))
      return $this->Lang('postinstall_fopen_off');

    return $this->Lang('postinstall');
  }

  function UninstallPostMessage() {
    return $this->Lang('postuninstall');
  }

  function UninstallPreMessage() {
    return $this->Lang('really_uninstall');
  }

  //Admin functions
  
  function GetAdminSection() {
    return 'content';
  }

  function GetAdminDescription() {
    return $this->Lang('moddescription');
  }

  function VisibleToAdminUser() {
    return ($this->CheckPermission('Modify Templates') || $this->CheckPermission("Modify Site Preferences"));
  }

  function _AdminEditDefaultTemplateForm($id, $returnid, $template_name, $active_tab, $title, $filename, $info) {
    $smarty = & $this->smarty;
    $smarty->assign('defaulttemplateform_title', $title);
    $smarty->assign('info_title', $info);
    $smarty->assign('startform', $this->CreateFormStart($id, 'updatetemplate', $returnid, 'post', '', false, ' ', array('active_tab' => $active_tab, 'template_name' => $template_name, 'filename' => $filename)));
    $smarty->assign('prompt_template', $this->Lang('template'));
    $smarty->assign('input_template', $this->CreateTextArea(false, $id, $this->GetTemplate($template_name), 'input_template','', '', '', '', '80', '15','','html'));
    $smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', $this->Lang('submit')));
    $smarty->assign('reset', $this->CreateInputSubmit($id, 'resettodefault', $this->Lang('resettodefault'), "", "", $this->Lang('confirmresettodefault')));
    $systemttemplates=array();
    if ($active_tab=="images_template") {
      $systemttemplates=array(
          "LightBox"=>"lightbox.tpl",
          "jQuery FancyBox"=>"fancybox.tpl",
          "MilkBox"=>"milkbox.tpl",
          "stunicholls-joystick"=>"stujoystick.tpl"
          /*"Galleria"=>"galleria.tpl"*/);
    } else {
      $systemttemplates=array($this->Lang("basicalbumtemplate")=>"albums.tpl");
    }
    $smarty->assign('systemtemplate', $this->CreateInputDropdown($id, 'systemtemplate', $systemttemplates));
    $smarty->assign('endform', $this->CreateFormEnd());
    echo $this->ProcessTemplate('editdefaulttemplate.tpl');
    
  }



  function displayAlbum($id, &$params, $returnid) {
    $user = "";
    if (isset($params['user'])) {
      $user = $params['user'];
    } else {
      $user=$this->GetPreference("defaultuser");
    }

    //Include Param
    $include=array(); $includeparam="";
    if (!empty($params['include'])) {
      $include = explode(";", $params['include']);
      $includeparam=$params['include'];
    }

    //Exclude Param
    $exclude=array(); $excludeparam="";
    if (!empty($params['exclude'])) {
      $exclude = explode(";", $params['exclude']);
      $excludeparam=$params["exclude"];
    }

    $albumthumbsize = "";
    if (isset($params['albumthumbsize'])) {
      $albumthumbsize = $params['albumthumbsize'];
    } else {
      $albumthumbsize=$this->GetPreference("defaultalbumthumbsize",128);
    }

    $imagethumbsize = "";
    if (isset($params['imagethumbsize'])) {
      $imagethumbsize = $params['imagethumbsize'];      
    } else {
      $imagethumbsize=$this->GetPreference("defaultimagethumbsize",48);      
    }    

    $imagesize = "";
    if (isset($params['imagesize'])) {
      $imagesize = $params['imagesize'];
    } else {
      $imagesize=$this->GetPreference("defaultimagesize",512);
    }

    //$user = $params['user'];
    $album="";
    if (isset($params['album'])) {
      $album=$params['album'];
    } elseif (isset($params['albumid'])) {
      $album=$params['albumid'];
    } else {
      echo "error"; return;
    }
    /*$album = (isset($params['album'])?$params['album']:false);
    $albumid = $params['albumid'];
    $imageSize = $params['imagesize'];
*/
    //Set defaults for image size and thumbsize
  //  if (empty($imageSize)) $imageSize = '512';

    /*$thumbSize = $params['imagethumbsize'];
    if (empty($thumbSize))
      $thumbSize = $this->GetPreference("defaultthumbsize","64");
*/
    $xml = $this->getAlbumContent($user, $album, $imagesize, $imagethumbsize);

    //echo $xml;die();

    $firstimageid="";

    try {
      $sxDoc = new SimpleXMLElement($xml);

      $albumName = (string) $sxDoc->title[0];

      /*$img_files = array();
      $img_thumbs = array();
      $img_keywords = array();
      $img_titles = array();*/
      $images=array();

      foreach ($sxDoc->xpath('//entry') as $item) {
        //original $picasa_keywords = $picasaweb_xpath->query('.//media:keywords', $picasa_node)->item(0)->firstChild->data;

        $image = new stdClass();
        $array = $item->xpath('.//media:content');
        //$imageUrl = $array[0]['url'];
        $image->url = $array[0]['url'];

        $array = $item->xpath('.//media:thumbnail');
        //$thumbUrl = $array[0]['url'];
        $image->thumburl = $array[0]['url'];

        $array = $item->xpath('.//media:keywords');
        //$keywords = $array[0];
        $image->keywords = $array[0];

        $array = $item->xpath('.//gphoto:timestamp');
        $image->timestamp = $array[0];
        


        $array = $item->xpath('.//media:description');
        //$mediatitle = $array[0];
        $image->title = $array[0];
        if ($image->title == "") {
          if ($this->GetPreference("filenamedescription",0)=="1") {
            $array = $item->xpath('.//media:title');
            $image->title  = $array[0];
          }
        }

        if ($firstimageid=="") {
          $array = $item->xpath('.//gphoto:id');
          $firstimageid = $array[0];
        }

        //echo "data: $imageUrl <br/> $thumbUrl <br/> $keywords <br/> $mediatitle <br/>";
        /* array_push($img_files, htmlentities($imageUrl));
          array_push($img_thumbs, htmlentities($thumbUrl));
          array_push($img_keywords, htmlentities($keywords));
          array_push($img_titles, htmlentities($mediatitle)); */
        /*array_push($img_files, htmlspecialchars($imageUrl));
        array_push($img_thumbs, htmlspecialchars($thumbUrl));
        array_push($img_keywords, htmlspecialchars($keywords));
        array_push($img_titles, htmlspecialchars($mediatitle));*/
        array_push($images, $image);
      }

      $array=$sxDoc->xpath("//gphoto:user");
      $userid=$array[0];
      $array=$sxDoc->xpath("//gphoto:name");
      $albumname=$array[0];


      //echo $firstimageid.":".$userid;die();

      $slideshowurl='http://picasaweb.google.com/'.$userid.'/'.urlencode($albumname).'#slideshow/'.$firstimageid;

      $this->smarty->assign('slideshowurl', $slideshowurl);

      //Attach vars to smarty template
      $this->smarty->assign('albumtitle', $albumName);
      static $uniqueid=0;
      $this->smarty->assign('albumid', "album".$uniqueid);
      /*
      $this->smarty->assign('images', $img_files);
      $this->smarty->assign('thumbnails', $img_thumbs);
      $this->smarty->assign('titles', $img_titles);
      $this->smarty->assign('albumDrillDown', empty($params['album']));*/
      $this->smarty->assign_by_ref('images', $images);

      $this->smarty->assign_by_ref('imagethumbsize', $imagethumbsize);

      //Create Link
      $parameters = Array(
          'user' => $user,
          'imagethumbsize' => $imagethumbsize,
          'albumthumbsize' => $albumthumbsize,
          'imagesize' => $imagesize,
          'include' => $includeparam,
          'exclude' => $excludeparam
          );
      $linkBack = $this->CreateReturnLink($id, $returnid, '', array(), true);
      $this->smarty->assign('linkBack', $linkBack);

      //Attach Text for link back to Album
      $this->smarty->assign('linkBackText', $this->Lang('link_back_text'));
      $this->smarty->assign('imageoftext', $this->Lang('imageoftext'));

      $this->smarty->assign('modulepath', "modules/PicasaBrowser"/*$this->GetModuleURLPath()*/);
      //$this->smarty->assign('modulepath', dirname(__FILE__)/*$this->GetModuleURLPath()*/);

      // Display the populated template
      $template=$this->GetTemplate('images');
      $template=$this->GetBodyPart($template);
      echo $this->ProcessTemplateFromData($template);
    } catch (Exception $ex) {
      echo "Error getting or parsing XML document.<br/>";
      echo $ex->description;
      echo "Doc:" . $xml;
    }
  }

  /* --------------------------------------------------------- */

  function displayAlbums($id, &$params, $returnid) {
    $user = "";
    if (isset($params['user'])) {
      $user = $params['user'];
    } else {
      $user=$this->GetPreference("defaultuser");
    }

    //Include Param
    $include=array(); $includeparam="";
    if (!empty($params['include'])) {
      $include = explode(";", $params['include']);
      $includeparam=$params['include'];
    }

    //Exclude Param
    $exclude=array(); $excludeparam="";
    if (!empty($params['exclude'])) {
      $exclude = explode(";", $params['exclude']);
      $excludeparam=$params["exclude"];
    }

    $albumthumbsize = "";
    if (isset($params['albumthumbsize'])) {
      $albumthumbsize = $params['albumthumbsize'];
    } else {
      $albumthumbsize=$this->GetPreference("defaultalbumthumbsize",128);
    }

    $imagethumbsize = "";
    if (isset($params['imagethumbsize'])) {
      $imagethumbsize = $params['imagethumbsize'];
    } else {
      $imagethumbsize=$this->GetPreference("defaultimagethumbsize",48);
    }

    $imagesize = "";
    if (isset($params['imagesize'])) {
      $imagesize = $params['imagesize'];
    } else {
      $imagesize=$this->GetPreference("defaultimagesize",512);
    }

    $xml = $this->getAlbums($user, $albumthumbsize);
    //echo $xml; die();
    
    try {
      $sxDoc = new SimpleXMLElement($xml);

      /*$img_thumbs = array();
      $img_titles = array();
      $album_links = array();*/
      $albums=array();
      foreach ($sxDoc->xpath('//entry') as $item) {
        $array = $item->xpath('.//gphoto:name');
        $gname = $array[0];
        if (!empty($include) && !$this->compareArray($include, $gname)) { //Check Include mask
            continue;
        }
          if (!empty($exclude) && $this->compareArray($exclude, $gname)) { //Check Exclude mask
            continue;
            /* array_push($img_thumbs, htmlentities($thumbUrl));
              array_push($img_titles, htmlentities($mediatitle)); */
            /*array_push($img_thumbs, htmlspecialchars($thumbUrl));
            array_push($img_titles, htmlspecialchars($mediatitle));
            array_push($album_links, $albumId);*/
          }
          
        $album = new stdClass();
        $array = $item->xpath('.//media:group/media:title');
        //$mediatitle = $array[0];
        $album->title=$array[0];

        $array = $item->xpath('.//media:group/media:thumbnail');
        //$thumbUrl = $array[0]['url'];
        $album->thumburl=$array[0]['url'];
       
        $array = $item->xpath('.//gphoto:timestamp');
        //$albumTime = $array[0];
        $album->timestamp= $array[0];
        //echo $album->timestamp;
        $album->year = date("Y", $album->timestamp/1000);
        //echo date("Y", $album->timestamp/1000);
              
        //Create Link to album page
        $array = $item->xpath('.//gphoto:id');
        //$albumId = $array[0];
        $albumid= $array[0];
        //$parameters = Array('user' => $user, 'albumid' => $albumid, 'imagethumbsize' => $imagethumbsize, 'albumthumbsize' => $albumthumbsize, 'imagesize' => $imagesize, 'include' => $include, 'exclude' => $exclude);

        $parameters = Array(
          'user' => $user,
          'albumid' => $albumid,
          'imagethumbsize' => $imagethumbsize,
          'albumthumbsize' => $albumthumbsize,
          'imagesize' => $imagesize,
          'include' => $includeparam,
          'exclude' => $excludeparam
          );
        //$albumId = $this->CreateLink($id, 'default', $returnid, '', $parameters, '', true);
        $album->link = $this->CreateLink($id, 'default', $returnid, '', $parameters, '', true);


        array_push($albums, $album);
        
      }

      /*$this->smarty->assign('links', $album_links);
      $this->smarty->assign('thumbnails', $img_thumbs);
      $this->smarty->assign('titles', $img_titles);*/
      $this->smarty->assign_by_ref('albums', $albums);
      $this->smarty->assign_by_ref('albumthumbsize', $albumthumbsize);

      $this->smarty->assign('modulepath', $config["root_url"]."/modules/PicasaBrowser"/*$this->GetModuleURLPath()*/);
      //$this->smarty->assign('modulepath', dirname(__FILE__)/*$this->GetModuleURLPath()*/);

      // Display the populated template      
      echo $this->ProcessTemplateFromDatabase("albums");
    } catch (Exception $ex) {
      echo "error";
    }
  }

  function GetHeaderPart($template) {
    $pos= stripos($template, $this->headbodyseparator);
    if ($pos===false) return $template;
    return substr($template,0,$pos);
  }

  function GetBodyPart($template) {
    //echo $template;
    $pos = stripos($template, $this->headbodyseparator);
    //echo $pos; echo $this->headbodyseparator; die();
    if ($pos===false) return $template;
    
    return substr($template,$pos+strlen($this->headbodyseparator));
  }

  function compareArray($array, $haystack) {
    //var_dump($array);
    foreach ($array as $needle) {
      //echo $haystack . ":" . $needle."<br>";
      if (stristr($haystack, $needle)) {
        return true;
      }
    }
    return false;
  }

  function getAlbumContent($user, $album, $imagesize, $imagethumbsize) {
    //echo "her:".$album.$imagesize.$imagethumbsize;
    //die();
    
    if (is_numeric($album)) {
      $url = 'http://picasaweb.google.com/data/feed/api/user/' . urlencode($user) . '/albumid/' . urlencode($album) . '?kind=photo&imgmax=' . $imagesize . '&thumbsize=' . $imagethumbsize;
    } else {
    //if (isset($albumId))
      $url = 'http://picasaweb.google.com/data/feed/api/user/' . urlencode($user) . '/album/' . urlencode($album) . '?kind=photo&imgmax=' . $imagesize . '&thumbsize=' . $imagethumbsize;
    }

    $xml = $this->getRemoteFile($url);

    $xml = str_replace("xmlns='http://www.w3.org/2005/Atom'", '', $xml);

    return $xml;
  }

  function getAlbums($userid, $albumthumbsize) {
    /*if (empty($albumThumbsize))
      $albumThumbsize = 160;*/

    $url = 'http://picasaweb.google.com/data/feed/api/user/' . urlencode($userid) . '?kind=album&thumbsize=' . $albumthumbsize;
    $xml = $this->getRemoteFile($url);

    $xml = str_replace("xmlns='http://www.w3.org/2005/Atom'", '', $xml);

    return $xml;
  }

  /*
    This function retreives a remote document attempting two different ways:
    cURL - This is first because it allows compression and is much faster on sites like google.
    file_get_contents - can only be used if 'allow_url_open' option is set on in the PHP.ini.

    If neither function works, an error is returned to the desktop to alert the user
   */

  function getRemoteFile($url) {
    if (function_exists('curl_init')) {
      $ch = curl_init($url);

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   //return doc as string
      curl_setopt($ch, CURLOPT_HEADER, false);          //dont return header

      $return = curl_exec($ch);
      curl_close($ch);
    } elseif (ini_get('allow_url_fopen')) {
      $return = file_get_contents($url);
    } else {
      echo $this->Lang('postinstall_fopen_off');
    }

    return $return;
  }

  /* ---------------------------------------------------------
    DisplayErrorPage($id, $params, $returnid, $message)
    NOT PART OF THE MODULE API

    This is an example of a simple method to display
    error information on the admin side.
    --------------------------------------------------------- */

  function DisplayErrorPage($id, &$params, $returnid, $message='') {
    $this->smarty->assign('title_error', $this->Lang('error'));
    if ($message != '') {
      $this->smarty->assign_by_ref('message', $message);
    }

    // Display the populated template
    echo $this->ProcessTemplate('error.tpl');
  }

  function OutputHeaderInfo() {
     global $config;
     $template=$this->GetTemplate('images');
     $template=$this->GetHeaderPart($template);
     $this->smarty->assign('modulepath', "modules/PicasaBrowser");
     //$this->smarty->assign('modulepath', $this->GetModuleURLPath();
     $this->smarty->assign('includejquery', $this->GetPreference("includejquery",1));
     echo $this->ProcessTemplateFromData($template);
  }

  
}

?>
