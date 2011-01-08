<?php
$this->RemovePermission('Admin PWABrowser');
$this->RemovePreference();
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
?>
