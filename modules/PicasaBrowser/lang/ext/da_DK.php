<?php
$lang['friendlyname'] = 'Picasa Web Album fremviser';
$lang['postinstall'] = 'Installeret!  Tillykke!';
$lang['postinstall_fopen_off'] = 'Picasa Web Album fremviseren enten at cURL er med i din PHP-installation eller at &quot;allow_url_fopen&quot; indstillingen i php.ini er sat til &quot;true&quot;.  Hvis ingen af disse krav er opfyld (og det er de pt. ikke) virker Picasa Web Album fremviseren ikke. Snak med din system ansvarlige og benyt evt. phpinfo for at diagnosticere problemet.';
$lang['postuninstall'] = 'Afinstalleret';
$lang['really_uninstall'] = 'Er du sikker p&aring; du vil afinstallere dette fine modul?';
$lang['uninstalled'] = 'Modulet blev afinstalleret.';
$lang['installed'] = 'Modul version %s blev installeret';
$lang['prefsupdated'] = 'Indstillingerne blev gemt';
$lang['accessdenied'] = 'Adgang n&aelig;gtet. Tjek dine tilladelser.';
$lang['error'] = 'Fejl!';
$lang['upgraded'] = 'Modulet blev opgraderet til version %s.';
$lang['moddescription'] = 'Viser Picasa Web Albums inde i CMS Made Simple';
$lang['link_back_text'] = 'Tilbage til Album liste';
$lang['albumstemplate'] = 'Album skabelon';
$lang['imagestemplate'] = 'Billeder skabelon';
$lang['settings'] = 'Indstillinger';
$lang['savesettings'] = 'Gem indstillinger';
$lang['settingssaved'] = 'Indstillingerne blev gemt';
$lang['basicalbumtemplate'] = 'Simpel album skabelon';
$lang['imageoftext'] = 'af';
$lang['filenamedescription'] = 'Vis filnavnet hvis billedet ikke har en beskrivelse';
$lang['defaultsettings'] = 'Standard v&aelig;rdier';
$lang['defaultuser'] = 'Standard bruger';
$lang['defaultimagesize'] = 'Standard billed st&oslash;rrelse';
$lang['defaultimagethumbsize'] = 'Standard billed eksempel st&oslash;rrelse';
$lang['defaultalbumthumbsize'] = 'Standard album eksempel st&oslash;rrelse';
$lang['squaresizehelp'] = 'St&oslash;rrelser der begynder med * vil blive vist som p&aelig;nt besk&aring;rne kvadrater';
$lang['includejquery'] = 'Inklud&eacute;r jQuery';
$lang['includejqueryhelp'] = 'Da mange andre systemer er baseret p&aring; jQuery, kan man ved at fjerne markeringen her undg&aring; at dette bibliotek bliver inkluderet flere gange.';
$lang['title_edit_album_template'] = 'Rediger album skabelon';
$lang['info_recipe_template'] = 'Denne skabelonvil blive benyttet n&aring;r albums vises';
$lang['template'] = 'Skabelon';
$lang['submit'] = 'Send';
$lang['resettodefault'] = 'Genskab standard';
$lang['templateupdated'] = 'Skabelonen blev opdateret';
$lang['confirmresettodefault'] = 'Er du sikker p&aring; denne skabelon skal genskabes til den valgte standard v&aelig;rdi?';
$lang['title_edit_detail_template'] = 'Rediger billed skabelon';
$lang['info_edit_detail_template'] = 'Denne skabelon benyttes ved detaljeret visnings af et album';
$lang['help_album'] = 'The name of the album you would like to see.  This name is what Picasa uses to reference an album which is what you named the album with spaces and special characters stripped out.  If an album name dosent work, pull up that album in picasa web albums and look at the command line.  For example, my album called &quot;MG-4&quot; url looks like this: &quot;http://picasaweb.google.com/rorik.melberg/MG4&quot;.  The hyphen is stripped out, so if I want to show only this album, the album property should be set to &quot;MG4&quot;.';
$lang['help_user'] = 'P&aring;kr&aelig;vet. Goole brugernavnet som album skal hentes fra.';
$lang['help_header'] = 'Hvis dette s&aelig;ttes til 1 vil modulet returnere eventuel header-information som er kr&aelig;vet for visningen.';
$lang['help_exclude'] = 'List of masks to exclude, delimited by semicolons. This is a simple string compare, if the entire string is anywhere in the Album name, it will be excluded. Both the include and exclude can be used at the same time.  Exclude will overrride includes.  For example, if the value for exclude is &quot;doo;dah;&quot;  All albums with doo and dah appearing in them will not be shown';
$lang['help_include'] = 'List of masks to include, delimited by semicolons. This is a simple string compare, if the entire string is anywhere in the Album name, it will be included. Both the include and exclude can be used at the same time.  Exclude will overrride includes.  For example, if the value for include is &quot;doo;dah;&quot; only albums with doo and dah in them will be displayed';
$lang['help_albumthumbsize'] = 'The size of the album thumbnail requested.  Google only allows particular values for this.  See imagethumbsize entry or <a href="http://code.google.com/apis/picasaweb/reference.html">http://code.google.com/apis/picasaweb/reference.html</a>for this table.';
$lang['help_imagesize'] = 'The size of the image requested.  Google only allows particular values for this.  See imagethumbsize entry or <a href="http://code.google.com/apis/picasaweb/reference.html">http://code.google.com/apis/picasaweb/reference.html</a> for this table.';
$lang['help_imagethumbsize'] = 'The size of the image requested.  Google only allows particular values for this.  See below or <a href="http://code.google.com/apis/picasaweb/reference.html">http://code.google.com/apis/picasaweb/reference.html</a> for this table.  Cropped means the thumbnail you get is square.  Only embeddable sizes are valid for this module.  If you get download prompts from the browser, you have probably picked a size that is too big.
    <table>
     <tbody><tr>
        <th>Size</th>
        <th>Cropped</th>
        <th>Embeddable</th>
        <th>Size</th>
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
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This displays a list of public Picasa Web Albums on a page in CMSMS.  You can also show the contents of a single album on a page.  The album view shows thumbnails and when a thumbnail is selected the picture is shown in a pop-up box.  The slide show functionality allows the user to move forward and back through the pictures in an album using the arrow keys or the mouse.  Optionally you can configure a page to show a set of albums using the include and exclude attributes.  There are parameters for album thumbnail, image thumbnail and picture image sizes. </p>
<p>The advantage of using this module over the Album module is you can use the Picasa desktop application to crop, balance, annotate, organize and upload your pictures.  Google gives you 1 gb of space to store photos, and if you have a gmail account, you already have a login.  You can use Picasa or the Picasa Web Albums (http://picasaweb.google.com) to manage order, album names, and picture captions.</p>
<h3>How Do I Use It</h3>
<p>1. Place the smarty tag {PicasaBrowser user=&quot;username&quot;} on the page.  To show a particular album include the album parameter.</p>
<p>1. Place the smarty tag {PicasaBrowser header=1} in your template or metadata. This inserts the relevant header-inclusions, like LightBox-javascript etc.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>The module development page at: <a href="http://dev.cmsmadesimple.org/projects/pwabrowser/">http://dev.cmsmadesimple.org/projects/pwabrowser/</a></li>
<li>You may have some success emailing the author directly at rorik.melberg@gmail.com</li>
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Requirements</h3>
<p>Because this module makes web requests to Google, you must have either cURL or the &quot;allow_url_fopen&quot; setting in your php.ini turned on.  cURL is the preffered method because it allows compresson in the request which Google takes advanage of and because of the size of the XML docs, this can drastically reduce the amount of time needed to make a request especially when you have many albums in your library.</p>
<p>Picasa xml stream processing is done with the SimpleXML library, which should be included in a default PHP 5.0 install. If this is not installed, this module will not work.  This also restricts this module to PHP 5 machines only.</p>
<h3>Other Picasa Web Album hints</h3>
<p>If you would like to show a single picture from your web album, you can get the link from the web album interface itself.  Go to your webalbum page (picasaweb.google.com/username) and browse to the picture you would like to show.  There is an expandable box on the right hand side that says &quot;link to this photo&quot;.  You can select the size of the picture and then copy the link from the &quot;HTML to embed in website&quot; box.  I usually pull the src attribute value from the image tag and use it to reference the photo.</p>
<h3>Copyright and License</h3>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.2039886585.1231713618.1289262610.1289298889.174';
$lang['utmz'] = '156861353.1288801321.168.51.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['qca'] = '1229601790-85243197-43260713';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>