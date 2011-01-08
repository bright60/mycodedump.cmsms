{* FancyBox template *}

{if $includejquery=="1"}
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
{/if}
<script type="text/javascript" src="{$modulepath}/templates/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="{$modulepath}/templates/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="{$modulepath}/templates/fancybox/jquery.fancybox-1.3.1.pack.js"></script>

<link rel="stylesheet" href="{$modulepath}/templates/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<script type="text/javascript">
{literal}
$(document).ready(function() {
   $("a[rel=fancybox]").fancybox({
    'titlePosition' 	: 'over'
   });
});
{/literal}

</script>

{* HEAD/BODY DIVIDER *}

<br/>
<h2>Pictures from: {$albumtitle}</h2>
<br/>

<a href="{$slideshowurl}" target="_blank">Show as slideshow</a>
<br/><br/>

{foreach from=$images item=image}
    <div style='float:left; text-align:center; vertical-align: bottom; height:{$imagethumbsize+10}px; width:{$imagethumbsize+10}px;'>
        <a rel="fancybox" title="{$image->title}" href="{$image->url}">
            <img src='{$image->thumburl}'  style='padding: 0px;'/>
        </a>
    </div>
{/foreach}
{if $albumDrillDown}
    <div style='clear:both; text-align:center; height:{$imagethumbsize+10}px; width:100%;'>
        <a href='{$linkBack}'>{$linkBackText}</a>
    </div>
{/if}