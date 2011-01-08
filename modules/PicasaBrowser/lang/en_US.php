<?php
$lang['friendlyname'] = 'Picasa Web Album Browser';
$lang['postinstall'] = 'Installed!  Congratulations!';
$lang['postinstall_fopen_off'] = 'Picasa Web Album Browser requires either cURL to be installed or the "allow_url_fopen" php.ini setting to be set to true.  If these conditions are not met (which they are currently not) the Picasa Web Album Browser will not work.  Contact your system administrator, or used for instance phpinfo to diagnose the problem';
$lang['postuninstall'] = 'Uninstalled';
$lang['really_uninstall'] = 'Really? Are you sure you want to uninstall this fine module?';
$lang['uninstalled'] = 'Module uninstalled';
$lang['installed'] = 'Module version %s installed.';
$lang['prefsupdated'] = 'Settings saved';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';
$lang['error'] = 'Error!';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['moddescription'] = 'Shows Picasa Web Albums inside CMS Made Simple.';

//User Interface
$lang['link_back_text'] = "Back to Album List";  //Link Text for "Back" button on Image Viewer

$lang["albumstemplate"]='Albums template';
$lang["imagestemplate"]='Images template';
$lang["settings"]='Settings';
$lang["savesettings"]='Save settings';
$lang["settingssaved"]='Settings saved';
$lang["basicalbumtemplate"]="Basic album template";
$lang["imageoftext"]="of";

//Settings
$lang["filenamedescription"]="Show filename when image is lacking a description";
$lang["defaultsettings"]="Default settings";
$lang["defaultuser"]="Default user";
$lang["defaultimagesize"]="Default image size";
$lang["defaultimagethumbsize"]="Default image thumbsize";
$lang["defaultalbumthumbsize"]="Default album thumbsize";
$lang["squaresizehelp"]="Sizes beginning with * will be rendered as a nicely cropped square";
$lang["includejquery"]="Include jQuery";

$lang["includejqueryhelp"]="As many other systems are based on the jQuery-system, unchecking this option can avoid this being include multiple times.";

//Admin Tags for admin pages
$lang['title_edit_album_template'] = 'Edit Album Template';
$lang['info_recipe_template'] = 'This template will display when albums are being viewed';
$lang['template'] = 'Template';
$lang['submit'] = 'Submit';
$lang['resettodefault'] = 'Reset to system template';
$lang['templateupdated'] = 'Template updated';
$lang['confirmresettodefault'] = 'Are you sure this template should be reset to the selected system template?';
$lang['title_edit_detail_template'] = 'Edit Images Template';
$lang['info_edit_detail_template'] = 'This template will display when viewing the detail of an album';

// Property help
$lang['help_album'] = 'The name of the album you would like to see.  This name is what Picasa uses to reference an album which is what you named the album with spaces and special characters stripped out.  If an album name dosent work, pull up that album in picasa web albums and look at the command line.  For example, my album called "MG-4" url looks like this: "http://picasaweb.google.com/rorik.melberg/MG4".  The hyphen is stripped out, so if I want to show only this album, the album property should be set to "MG4".';
$lang['help_user'] = 'Required. The google user name of the person who has the albums to be displayed.';
$lang['help_header'] = 'If set to 1 the module will output any header-info required for images view';
$lang['help_exclude'] = 'List of masks to exclude, delimited by semicolons. This is a simple string compare, if the entire string is anywhere in the Album name, it will be excluded. Both the include and exclude can be used at the same time.  Exclude will overrride includes.  For example, if the value for exclude is "doo;dah;"  All albums with doo and dah appearing in them will not be shown';
$lang['help_include'] = 'List of masks to include, delimited by semicolons. This is a simple string compare, if the entire string is anywhere in the Album name, it will be included. Both the include and exclude can be used at the same time.  Exclude will overrride includes.  For example, if the value for include is "doo;dah;" only albums with doo and dah in them will be displayed';
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
<p>1. Place the smarty tag {PicasaBrowser user="username"} on the page.  To show a particular album include the album parameter.</p>
<p>1. Place the smarty tag {PicasaBrowser header=1} in your template or metadata. This inserts the relevant header-inclusions, like LightBox-javascript etc.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>The module development page at: <a href="http://dev.cmsmadesimple.org/projects/pwabrowser/">http://dev.cmsmadesimple.org/projects/pwabrowser/</a></li>
<li>You may have some success emailing the author directly at rorik.melberg@gmail.com</li>
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Requirements</h3>
<p>Because this module makes web requests to Google, you must have either cURL or the "allow_url_fopen" setting in your php.ini turned on.  cURL is the preffered method because it allows compresson in the request which Google takes advanage of and because of the size of the XML docs, this can drastically reduce the amount of time needed to make a request especially when you have many albums in your library.</p>
<p>Picasa xml stream processing is done with the SimpleXML library, which should be included in a default PHP 5.0 install. If this is not installed, this module will not work.  This also restricts this module to PHP 5 machines only.</p>
<h3>Other Picasa Web Album hints</h3>
<p>If you would like to show a single picture from your web album, you can get the link from the web album interface itself.  Go to your webalbum page (picasaweb.google.com/username) and browse to the picture you would like to show.  There is an expandable box on the right hand side that says "link to this photo".  You can select the size of the picture and then copy the link from the "HTML to embed in website" box.  I usually pull the src attribute value from the image tag and use it to reference the photo.</p>
<h3>Copyright and License</h3>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';

?>
