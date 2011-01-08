<?php

if (isset($params["header"])) {
  $this->OutputHeaderInfo();
  return;
}

if (empty($params['album']) && empty($params['albumid'])) {
  if ($params['debug'] == true) echo "Display Albums";

  $this->displayAlbums($id, $params, $returnid);
}
else {
  if ($params['debug'] == true) echo "Display Album";

  $this->displayAlbum($id, $params, $returnid);
}

?>
