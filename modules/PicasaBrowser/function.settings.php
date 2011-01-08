<?php

$smarty->assign('startform', $this->CreateFormStart($id, 'savesettings', $returnid, 'post', '', false, ' ', array('active_tab' => "settings")));
$smarty->assign('endform', $this->CreateFormEnd());

$smarty->assign('module', $this);

//$smarty->assign('filenamedescriptiontext', $this->Lang('filenamedescription'));

$smarty->assign('filenamedescriptioninput', $this->CreateInputCheckbox($id, "filenamedescription", "1", $this->GetPreference("filenamedescription", 0)));
$smarty->assign('includejqueryinput', $this->CreateInputCheckbox($id, "includejquery", "1", $this->GetPreference("includejquery", 1)));

$smarty->assign('defaultuserinput', $this->CreateInputText($id, "defaultuser", $this->GetPreference("defaultuser")));
$sizes=array(
    "*32px"=>32,
    "*48px"=>48,
    "*64px"=>64,
    "*72px"=>72,
    "*144px"=>144,
    "*150px"=>150,
    "*160px"=>160,
    "94px"=>94,
    "110px"=>110,
    "128px"=>128,
    "200px"=>200,
    "220px"=>220,
    "288px"=>288,
    "320px"=>320,
    "400px"=>400,
    "512px"=>512,
    "576px"=>576,
    "640px"=>640,
    "720px"=>720,
    "800px"=>800,
    "912px"=>912,
    "1024px"=>1024,
    "1152px"=>1152,
    "1280px"=>1280,
    "1440px"=>1440,
    "1600px"=>1600);
$smarty->assign('defaultimagesizeinput', $this->CreateInputDropdown($id, "defaultimagesize", $sizes, -1, $this->GetPreference("defaultimagesize",512)));
$smarty->assign('defaultimagethumbsizeinput', $this->CreateInputDropdown($id, "defaultimagethumbsize", $sizes, -1, $this->GetPreference("defaultimagethumbsize",48)));
$smarty->assign('defaultalbumthumbsizeinput', $this->CreateInputDropdown($id, "defaultalbumthumbsize", $sizes, -1, $this->GetPreference("defaultalbumthumbsize",128)));

$smarty->assign('defaultuserinput', $this->CreateInputText($id, "defaultuser", $this->GetPreference("defaultuser")));


//$smarty->assign('input_template', $this->CreateTextArea(false, $id, $this->GetTemplate($template_name), 'input_template','', '', '', '', '80', '15','','html'));
$smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', $this->Lang('savesettings')));

echo $this->ProcessTemplate('settings.tpl');

?>
