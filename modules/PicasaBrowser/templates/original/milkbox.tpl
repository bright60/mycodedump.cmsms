{* MilkBox template *}

<script type="text/javascript" src="{$modulepath}/templates/milkbox/js/mootools-1.2.3-core-yc.js"></script>
<script type="text/javascript" src="{$modulepath}/templates/milkbox/js/mootools-1.2.3.1-assets.js"></script>
<script type="text/javascript" src="{$modulepath}/templates/milkbox/js/milkbox-yc.js"></script>

<link rel="stylesheet" href="{$modulepath}/templates/milkbox/css/milkbox/milkbox.css" type="text/css" media="screen" />
<script type="text/javascript">
{literal}
window.addEvent('domready', function(){
  //Remove these to avoid autoplaying slideshow
	milkbox.setAutoPlay([
		{ gallery:'album0', autoplay:true, delay:6 } //PicasaBrowser generated albumX from 0+
	]);
  milkbox.changeOptions({
    imageOfText:'{/literal}{$imageoftext}{literal}',
		canvasBorderWidth:'2px',
		canvasBorderColor:'#dddddd',
		canvasPadding:'2px'
	});
  //Check http://reghellin.com/milkbox/ for further options
});
{/literal}
</script>

{* HEAD/BODY DIVIDER *}

<br/>
<h2>Pictures from: {$albumtitle}</h2>
<br/>

{foreach from=$images item=image}
    <div style='float:left; text-align:center; vertical-align: bottom; height:{$imagethumbsize+10}px; width:{$imagethumbsize+10}px;'>
        <a rel="milkbox[{$albumid}]" title="{$image->title}" href="{$image->url}">
            <img src='{$image->thumburl}'  style='padding: 0px;'/>
        </a>
    </div>
{/foreach}
{if $albumDrillDown}
    <div style='clear:both; text-align:center; height:{$imagethumbsize+10}px; width:100%;'>
        <a href='{$linkBack}'>{$linkBackText}</a>
    </div>
{/if}