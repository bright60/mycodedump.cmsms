{* LightBox Template *}

<script type="text/javascript" src="{$modulepath}/templates/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="{$modulepath}/templates/lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="{$modulepath}/templates/lightbox/js/lightbox.js"></script>

<link rel="stylesheet" href="{$modulepath}/templates/lightbox/css/lightbox.css" type="text/css" media="screen" />

{* HEAD/BODY DIVIDER *}

<br/>
<h2>Pictures from: {$albumtitle}</h2>
<br/>

<a href="{$slideshowurl}" target="_blank">Show as slideshow</a>
<br/><br/>

{foreach from=$images item=image}
    <div style='float:left; text-align:center; vertical-align: bottom; height:{$imagethumbsize+10}px; width:{$imagethumbsize+10}px;'>
        <a rel="lightbox[{$albumid}]" title="{$image->title}" href="{$image->url}">
            <img src='{$image->thumburl}'  style='padding: 0px;'/>
        </a>
    </div>
{/foreach}
{if $albumDrillDown}
    <div style='clear:both; text-align:center; height:{$imagethumbsize+10}px; width:100%;'>
        <a href='{$linkBack}'>{$linkBackText}</a>
    </div>
{/if}


