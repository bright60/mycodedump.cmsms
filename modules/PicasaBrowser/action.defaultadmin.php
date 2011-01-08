<?php

if (!$this->VisibleToAdminUser()) {
  return $this->DisplayErrorPage($id, $params, $returnid, $this->Lang('accessdenied'));
}

$themeObject = &$gCms->variables['admintheme'];

// The tabs
echo $this->StartTabHeaders();
$active_tab = isset($params['active_tab']) ? $params['active_tab'] : FALSE;
// Tab headers
if ($this->CheckPermission("Modify Templates")) {
  echo $this->SetTabHeader('albums_template', $this->Lang("albumstemplate"), ('albums_template' == $active_tab));
  echo $this->SetTabHeader('images_template', $this->Lang("imagestemplate"), ('images_template' == $active_tab));
}
if ($this->CheckPermission("Modify Site Preferences")) {
  echo $this->SetTabHeader('settings', $this->Lang("settings"), ('settings' == $active_tab));
}
echo $this->EndTabHeaders();

echo $this->StartTabContent();
if ($this->CheckPermission("Modify Templates")) {
  echo $this->StartTab('albums_template', $params); {
    $this->_AdminEditDefaultTemplateForm($id, $returnid,
            'albums',
            'albums_template',
            $this->Lang('title_edit_album_template'),
            'orig_albums.tpl',
            $this->Lang('info_recipe_template'));
  }
  echo $this->EndTab();

//**************************************************************************
//recipe_detail_template
  echo $this->StartTab('images_template', $params); {
    $this->_AdminEditDefaultTemplateForm($id, $returnid,
            'images',
            'images_template',
            $this->Lang('title_edit_detail_template'),
            'orig_images.tpl',
            $this->Lang('info_edit_detail_template'));
  }
  echo $this->EndTab();
}
if ($this->CheckPermission("Modify Site Preferences")) {
  echo $this->StartTab('settings', $params);
  include(dirname(__FILE__) . "/function.settings.php");
  echo $this->EndTab();
}
echo $this->EndTabContent();
?>
