<?php
if (!$this->CheckPermission('Modify Site Preferences')) {
  return;
}

if (isset($params["filenamedescription"])) {
  $this->SetPreference("filenamedescription",$params["filenamedescription"]);
} else {
  $this->SetPreference("filenamedescription","0");
}

if (isset($params["includejquery"])) {
  $this->SetPreference("includejquery",$params["includejquery"]);
} else {
  $this->SetPreference("includejquery","0");
}

if (isset($params["defaultuser"])) $this->SetPreference("defaultuser",$params["defaultuser"]);
if (isset($params["defaultalbum"])) $this->SetPreference("defaultalbum",$params["defaultalbum"]);
if (isset($params["defaultimagesize"])) $this->SetPreference("defaultimagesize",$params["defaultimagesize"]);
if (isset($params["defaultimagethumbsize"])) $this->SetPreference("defaultimagethumbsize",$params["defaultimagethumbsize"]);
if (isset($params["defaultalbumthumbsize"])) $this->SetPreference("defaultalbumthumbsize",$params["defaultalbumthumbsize"]);


$params = array('tab_message' => "settingssaved", 'active_tab' => $params['active_tab']);
$this->Redirect($id, 'defaultadmin', '', $params);
?>
