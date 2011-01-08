<?php

//$this->CreatePermission('Admin PWABrowser', 'Admin PWABrowser');

$this->InstallTemplates();

// put mention into the admin log
$this->Audit(0, $this->Lang('friendlyname'), $this->Lang('installed', $this->GetVersion()));

?>
