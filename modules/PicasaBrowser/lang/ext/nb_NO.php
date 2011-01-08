<?php
$lang['friendlyname'] = 'Picasa Web Album Browser ';
$lang['postinstall'] = 'Installert - gratulerer!';
$lang['postinstall_fopen_off'] = 'Picasa Web Album Browser requires either cURL to be installed or the &quot;allow_url_fopen&quot; php.ini setting to be set to true.  If these conditions are not met (which they are currently not) the Picasa Web Album Browser will not work.  Use phpinfo to verify the results of this check.  The way your machine is currenlty configured this module will not operate properly.';
$lang['postuninstall'] = 'Avinstallert';
$lang['really_uninstall'] = 'Virkelig? Du er sikker p&aring; at du vil avinstallere denne fine modulen?';
$lang['uninstalled'] = 'Modul avinstallert.';
$lang['installed'] = 'Modul versjon %s innstallert.';
$lang['prefsupdated'] = 'Modulinnstillinger oppdatert.';
$lang['accessdenied'] = 'Tilgang nektet. Vennligst sjekk dine rettigheter.';
$lang['error'] = 'Feil!';
$lang['upgraded'] = 'Modul oppgradert til versjon %s.';
$lang['moddescription'] = 'Viser Picasa Web Album inne i CMS Made Simple.';
$lang['changelog'] = '<ul>
<li>Version 0.1 2 August 2007. Initial Release.</li></ul>
<li>Version 1.0 7 August 2007. Added exclude and include parameters. Also added admin panel for editing templates from the admin panel.</li></ul>';
$lang['link_back_text'] = 'Tilbake til albumlisten';
$lang['title_edit_album_template'] = 'Rediger album malen';
$lang['info_recipe_template'] = 'Denne malen benyttes n&aring;r album vises';
$lang['template'] = 'Mal';
$lang['submit'] = 'Utf&oslash;r';
$lang['resettodefault'] = 'Tilbakesatt til standard';
$lang['template_updated'] = 'Mal oppdatert';
$lang['title_edit_detail_template'] = 'Rediger bilde mal';
$lang['info_edit_detail_template'] = 'Denne mal benyttes n&aring;r detalj i album vises';
$lang['help_album'] = 'The name of the album you would like to see.  This name is what Picasa uses to reference an album which is what you named the album with spaces and special characters stripped out.  If an album name dosent work, pull up that album in picasa web albums and look at the command line.  For example, my album called &quot;MG-4&quot; url looks like this: &quot;http://picasaweb.google.com/rorik.melberg/MG4&quot;.  The hyphen is stripped out, so if I want to show only this album, the album property should be set to &quot;MG4&quot;.';
$lang['help_user'] = 'Kreves. Google bruker navnet til personen som har albumene som skal vises.';
$lang['help_exclude'] = 'List of masks to exclude, delimited by semicolons. This is a simple string compare, if the entire string is anywhere in the Album name, it will be excluded. Both the include and exclude can be used at the same time.  Exclude will overrride includes.  For example, if the value for exclude is &quot;doo;dah;&quot;  All albums with doo and dah appearing in them will not be shown';
$lang['help_include'] = 'List of masks to include, delimited by semicolons. This is a simple string compare, if the entire string is anywhere in the Album name, it will be included. Both the include and exclude can be used at the same time.  Exclude will overrride includes.  For example, if the value for include is &quot;doo;dah;&quot; only albums with doo and dah in them will be displayed';
$lang['help_albumthumbsize'] = 'The size of the album thumbnail requested.  Google only allows particular values for this.  See imagethumbsize entry or <a href=&quot;http://code.google.com/apis/picasaweb/reference.html&quot;>http://code.google.com/apis/picasaweb/reference.html</a>for this table.';
$lang['help_imagesize'] = 'The size of the image requested.  Google only allows particular values for this.  See imagethumbsize entry or <a href=&quot;http://code.google.com/apis/picasaweb/reference.html&quot;>http://code.google.com/apis/picasaweb/reference.html</a> for this table.';
$lang['help_imagethumbsize'] = 'The size of the image requested.  Google only allows particular values for this.  See below or <a href=&quot;http://code.google.com/apis/picasaweb/reference.html&quot;>http://code.google.com/apis/picasaweb/reference.html</a> for this table.  Cropped means the thumbnail you get is square.  Only embeddable sizes are valid for this module.  If you get download prompts from the browser, you have probably picked a size that is too big.
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
<p>Place the smarty tag {cms_module module=&#039;PicasaWebAlbumBrowser&#039; user=&#039;username&#039;} on the page.  To show a particular album include the album parameter.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>The module development page at: <a href=&quot;http://dev.cmsmadesimple.org/projects/pwabrowser/&quot;>http://dev.cmsmadesimple.org/projects/pwabrowser/</a></li>
<li>You may have some success emailing the author directly at rorik.melberg@gmail.com</li>
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Requirements</h3>
<p>Because this module makes web requests to Google, you must have either cURL or the &quot;allow_url_fopen&quot; setting in your php.ini turned on.  cURL is the preffered method because it allows compresson in the request which Google takes advanage of and because of the size of the XML docs, this can drastically reduce the amount of time needed to make a request especially when you have many albums in your library.</p>
<p>Picasa xml stream processing is done with the SimpleXML library, which should be included in a default PHP 5.0 install. If this is not installed, this module will not work.  This also restricts this module to PHP 5 machines only.</p>
<h3>Other Picasa Web Album hints</h3>
<p>If you would like to show a single picture from your web album, you can get the link from the web album interface itself.  Go to your webalbum page (picasaweb.google.com/username) and browse to the picture you would like to show.  There is an expandable box on the right hand side that says &quot;link to this photo&quot;.  You can select the size of the picture and then copy the link from the &quot;HTML to embed in website&quot; box.  I usually pull the src attribute value from the image tag and use it to reference the photo.</p>
<h3>Copyright and License</h3>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.525406812.1188077417.1205964911.1206016070.404';
$lang['utmz'] = '156861353.1205686233.394.27.utmccn=(referral)|utmcsr=cms1.helminikon.no|utmcct=/admin/listmodules.php|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>