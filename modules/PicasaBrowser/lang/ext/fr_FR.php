<?php
$lang['friendlyname'] = 'Picasa Web Album Browser ';
$lang['postinstall'] = 'Le module est install&eacute; avec succ&egrave;s.';
$lang['postinstall_fopen_off'] = 'Picasa Web Album Browser requires either cURL to be installed or the &quot;allow_url_fopen&quot; php.ini setting to be set to true.  If these conditions are not met (which they are currently not) the Picasa Web Album Browser will not work.  Use phpinfo to verify the results of this check.  The way your machine is currenlty configured this module will not operate properly.';
$lang['postuninstall'] = 'D&eacute;sinstall&eacute;';
$lang['really_uninstall'] = 'Etes-vous s&ucirc;r de vouloir d&eacute;sinstaller ce module&nbsp;?';
$lang['uninstalled'] = 'Le module a &eacute;t&eacute; d&eacute;sinstall&eacute;.';
$lang['installed'] = 'Le module est install&eacute; en version %s.';
$lang['prefsupdated'] = 'La configuration du module a &eacute;t&eacute; mise &agrave; jour.';
$lang['accessdenied'] = 'Acc&egrave;s refus&eacute;. V&eacute;rifiez vos droits d&#039;acc&egrave;s.';
$lang['error'] = 'Erreur&nbsp;!';
$lang['upgraded'] = 'Le module a &eacute;t&eacute; mis &agrave; jour vers la version %s.';
$lang['moddescription'] = 'Affiche les albums web Picasa &agrave; l&#039;int&eacute;rieur de CMS Made Simple.';
$lang['changelog'] = '<ul>
<li>Version 0.1 2 August 2007. Initial Release.</li></ul>
<li>Version 1.0 7 August 2007. Added exclude and include parameters. Also added admin panel for editing templates from the admin panel.</li></ul> ';
$lang['link_back_text'] = 'Retour &agrave; la liste des albums';
$lang['title_edit_album_template'] = 'Modifier le gabarit des albums';
$lang['info_recipe_template'] = 'Ce gabarit est utilis&eacute; pour l&#039;affichage des albums';
$lang['template'] = 'Gabarit';
$lang['submit'] = 'Soumettre';
$lang['resettodefault'] = 'R&eacute;initialiser &agrave; la configuration par d&eacute;faut';
$lang['template_updated'] = 'Le gabarit a &eacute;t&eacute; mis &agrave; jour';
$lang['title_edit_detail_template'] = 'Modifier le gabarit des images';
$lang['info_edit_detail_template'] = 'Ce gabarit est utilis&eacute; pour l&#039;affichage des images contenues dans un album';
$lang['help_album'] = 'Le nom de l&#039;album &agrave; afficher. Ce non est celui utilis&eacute; par Picasa pour r&eacute;f&eacute;rencer un album et correspond au nom de usuel de l&#039;album sans les espaces et ni caract&egrave;res sp&eacute;ciaux. Si le nom d&#039;album ne fonctionne pas, afficher cet album dans Picasa et regarder le contenu de la ligne de commande de votre navigateur. Par exemple, pour un album nomm&eacute; &quot;MG-4&quot;, l&#039;URL est le suivant &quot;http://picasaweb.google.com/nom_utilisateur_google/MG4&quot;. Le trait d&#039;union est supprim&eacute;, donc si vous voulez afficher cet album, le param&egrave;tre album doit &ecirc;tre configur&eacute; &agrave; &quot;MG4&quot;.';
$lang['help_user'] = 'Obligatoire. Le nom de l&#039;utilisateur Google &agrave; qui appartient l&#039;album &agrave; afficher (compte Google).';
$lang['help_exclude'] = 'Liste des masques &agrave; exclure, d&eacute;limit&eacute;s par un point-virgule. C&#039;est une simple comparaison de cha&icirc;ne de caract&egrave;res&nbsp;: si la cha&icirc;ne est quelque part dans un nom d&#039;album, celui-ci sera exclu. Les deux param&egrave;tres include et exclude peuvent &ecirc;tre utilis&eacute;s en m&ecirc;me temps. Par exemple, si la valeur pour exclude est &quot;doo;dah;&quot;, tous les albums avec doo et dah dans leur nom ne seront pas affich&eacute;s.';
$lang['help_include'] = 'Liste des masques &agrave; inclure, d&eacute;limit&eacute;s par un point-virgule. C&#039;est une simple comparaison de cha&icirc;ne de caract&egrave;res&nbsp;: si la cha&icirc;ne est quelque part dans un nom d&#039;album, celui-ci sera inclus. Les deux param&egrave;tres include et exclude peuvent &ecirc;tre utilis&eacute;s en m&ecirc;me temps. Par exemple, si la valeur pour include est &quot;doo;dah;&quot;, seuls les albums avec doo et dah dans leur nom seront affich&eacute;s.';
$lang['help_albumthumbsize'] = 'La taille d&#039;affichage des vignettes des albums. Google n&#039;autorise que certaines tailles pour les vignettes : cf param&egrave;tre thumbsize sur <a href="http://code.google.com/apis/picasaweb/reference.html">http://code.google.com/apis/picasaweb/reference.html</a>.';
$lang['help_imagesize'] = 'La taille d&#039;affichage des images. Google n&#039;autorise que certaines tailles pour les images : cf le param&egrave;tre imagemax sur <a href="http://code.google.com/apis/picasaweb/reference.html">http://code.google.com/apis/picasaweb/reference.html</a>.';
$lang['help_imagethumbsize'] = 'La taille d&#039;affichage des images. Google n&#039;autorise que certaines tailles pour les images : cf le param&egrave;tre imagemax sur <a href="http://code.google.com/apis/picasaweb/reference.html">http://code.google.com/apis/picasaweb/reference.html</a>.  &quot;Cropped&quot; signifie que la vignette obtenue sera de forme carr&eacute;.  Seules les tailles dites &quot;embeddable&quot; (cf  URL ci-dessus) sont support&eacute;es par ce module. Si vous obtenez un affichage vous demandant si vous voulez faire un t&eacute;l&eacute;chargement, c&#039;est probablement que vous essayez d&#039;afficher une image trop grande.
    <table>
     <tbody><tr>
        <th>Taille</th>
        <th>Cropped</th>
        <th>Embeddable</th>
        <th>Taille</th>
        <th>Cropped</th>
        <th>Embeddable</th>
      </tr>
      <tr>

        <td><code>32</code></td>
        <td>Yes</td>
        <td>Yes</td>
        <td><code>576</code></td>
        <td>No</td>
        <td>Yes</td>

      </tr>
      <tr>
        <td><code>48</code></td>
        <td>Yes</td>
        <td>Yes</td>
        <td><code>640</code></td>
        <td>No</td>

        <td>Yes</td>
      </tr>
      <tr>
        <td><code>64</code></td>
        <td>Yes</td>
        <td>Yes</td>
        <td><code>720</code></td>

        <td>No</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td><code>72</code></td>
        <td>No</td>
        <td>Yes</td>

        <td><code>800</code></td>
        <td>No</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td><code>144</code></td>
        <td>No</td>

        <td>Yes</td>
        <td><code>912</code></td>
        <td>No</td>
        <td>No</td>
      </tr>
      <tr>
        <td><code>160</code></td>

        <td>Yes</td>
        <td>Yes</td>
        <td><code>1024</code></td>
        <td>No</td>
        <td>No</td>
      </tr>

      <tr>
        <td><code>200</code></td>
        <td>Yes</td>
        <td>Yes</td>
        <td><code>1152</code></td>
        <td>No</td>

        <td>No</td>
      </tr>
      <tr>
        <td><code>288</code></td>
        <td>No</td>
        <td>Yes</td>
        <td><code>1280</code></td>

        <td>No</td>
        <td>No</td>
      </tr>
      <tr>
        <td><code>320</code></td>
        <td>No</td>
        <td>Yes</td>

        <td><code>1440</code></td>
        <td>No</td>
        <td>No</td>
      </tr>
      <tr>
        <td><code>400</code></td>
        <td>No</td>

        <td>Yes</td>
        <td><code>1600</code></td>
        <td>No</td>
        <td>No</td>
      </tr>
      <tr>
        <td><code>512</code></td>

        <td>No</td>
        <td>Yes</td>
        <td><code>d</code></td>
        <td>No</td>
        <td>No</td>
      </tr>
    </tbody></table>';
$lang['help'] = '<h3>Que fait ce module ?</h3>
<p>Ce module affiche la liste des albums publics Picasa dans CMSMS et permet &eacute;galement d&#039;afficher le contenu d&#039;un album sur une page. La vue album affiche les miniatures et lorsqu&#039;une d&#039;elles est s&eacute;lectionn&eacute;e, l&#039;image correspondante est affich&eacute;e en grand format dans une bo&icirc;te de type pop-up. La fonctionnalit&eacute; diaporama permet &agrave; l&#039;utilisateur de naviguer parmi les photos d&#039;un album avec les touches fl&eacute;ch&eacute;es du clavier ou la souris. Optionnellement il est possible de configurer une page pour afficher une liste r&eacute;duite d&#039;albums en utilisant les attributs inclure ou exclure. Ces param&egrave;tres sont valables pour les miniatures des albums, les miniatures des images et pour la taille des photos.</p>
<p>L&#039;avantage d&#039;utiliser ce module par rapport au module Album classique, est qu&#039;il est possible d&#039;utiliser au pr&eacute;alable l&#039;application Picasa sur un PC en local pour r&eacute;duire, traiter, annoter, organiser puis t&eacute;l&eacute;charger les images vers le l&#039;album web Picasa. Google offre 1GB s&#039;espace de stockage de photos, et si vous avez un compte gmail, vous pouvez utiliser le m&ecirc;me compte pour cr&eacute;er un album web Picasa (http://picasaweb.google.com)</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Il suffit d&#039;ins&eacute;rer la balise smarty {cms_module module=&#039;PicasaWebAlbumBrowser&#039; user=&#039;nom_utilisateur_google&#039;} dans une page.  Pour afficher un album en particulier, il faut rajouter le param&egrave;tre album.</p>

<h3>Exigences</h3>
<p>Puisque ce module envoie des requ&ecirc;tes web vers Google, il faut avoir cURL ou le param&egrave;tre &quot;allow_url_fopen&quot; activ&eacute; dans votre php.ini.  Utiliser pr&eacute;f&eacute;rentiellement cURL parce qu&#039;il permet une compression dans les requ&ecirc;tes (ce qui est support&eacute; par Google) et donne aussi un avantage sur la taille des donn&eacute;es XML. Ceci peut r&eacute;duire de mani&egrave;re tr&egrave;s sensible le temps n&eacute;cessaire pour une requ&ecirc;te, surtout lorsqu&#039;il y a de nombreux albums dans la librairie.</p>
<p>Le traitement du flux XML issu de Picasa est r&eacute;alis&eacute; par la librairie SimpleXML qui est normalement install&eacute;e par d&eacute;faut avec PHP5. Si ce n&#039;est pas le cas, ce module ne fonctionnera pas. Cela implique donc que ce module ne peut &ecirc;tre utilis&eacute; que sur une plateforme fonctionnant avec PHP5.</p>
<h3>D&#039;autres fonctionnalit&eacute;s de Picasa Web Album</h3>
<p>Si vous voulez afficher une seule image de votre album web, vous pouvez utiliser le lien direct indiqu&eacute; sur le site web Picasa. Rendez-vous donc sur la page web Picasa de votre album (picasaweb.google.com/nom_utilisateur) et parcourez les photos que vous voudriez afficher. Sur le c&ocirc;t&eacute; droit de la page web, il y a un une bo&icirc;te indiquant &quot;lien vers cette photo&quot;. Vous pouvez s&eacute;lectionner la taille de l&#039;image et copier ensuite le lien indiqu&eacute; par &quot;Ins&eacute;rer l&rsquo;image dans une page Web&quot; &agrave; l&#039;int&eacute;rieur de votre page.</p>
<h3>Copyright et Licence</h3>
<p>Ce module est soumis &agrave; la <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Vous devez approuver cette licence pour utiliser ce module.</p>';
$lang['utma'] = '156861353.411382167.1233563191.1233572369.1233576541.4';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1233563191.1.1.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/board,10.0.html|utmcmd=referral';
?>