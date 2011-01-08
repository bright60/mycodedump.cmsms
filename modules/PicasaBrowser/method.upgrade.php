<?php

$current_version = $oldversion;
switch ($current_version) {
  case "0.1":
    $this->InstallTemplates();
    break;
}
$this->RemovePermission('Admin PWABrowser');
// put mention into the admin log
$this->Audit(0, $this->Lang('friendlyname'), $this->Lang('upgraded', $this->GetVersion()));
?>
