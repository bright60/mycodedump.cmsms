<?php

if (!$this->CheckPermission('Modify Templates')) {
  return;
}

if (isset($params['resettodefault'])) {
  // Reset template to original
  $fn = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'original' . DIRECTORY_SEPARATOR . $params['systemtemplate'];  
  if (file_exists($fn)) {
    $template = @file_get_contents($fn);
    $this->SetTemplate($params['template_name'], $template);
  }
} else {
  $this->SetTemplate($params['template_name'], $params['input_template']);
}

$params = array('tab_message' => "templateupdated", 'active_tab' => $params['active_tab']);
$this->Redirect($id, 'defaultadmin', '', $params);
?>
