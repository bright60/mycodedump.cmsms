{* StuNichols Joystick template *}

{if $includejquery=="1"}
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
{/if}
<script type="text/javascript" src="{$modulepath}/templates/stunichols/multi-slide.js"></script>

<style>
{literal}
<!--
/* ================================================================
This copyright notice must be untouched at all times.
Copyright (c) 2009 Stu Nicholls - stunicholls.com - all rights reserved.
=================================================================== */

#slideshow {width:580px; height:445px; margin:0 auto; position:relative; background:#222;
-o-box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
-icab-box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
-khtml-box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
-moz-box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
-webkit-box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);
box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.7);

-o-border-radius: 10px;
-icab-border-radius: 10px;
-khtml-border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
}
#thumbs {width:490px; height:48px; overflow:hidden; position:absolute; left:49px; top:390px; z-index:10;}
#thumbHolder {position:relative; top:0; left:0; width:490px;}
#thumbs img {display:block; float:left; margin-right:8px; margin-bottom:6px; display:inline; padding:1px; background:#aaa; cursor:pointer; width:60px; height:40px;}
#images {width:480px; height:320px; position:absolute; left:50px; top:10px; overflow:hidden; z-index:10; border:1px solid #888; background:#222 url({/literal}{$modulepath}/templates/stunichols/loading.gif{literal}) no-repeat 230px center;}
#images img {position:absolute; left:480px; top:0;}
#txt {position:absolute; left:51px; top:11px; width:480px; height:320px; width:480px; z-index:20;overflow:hidden;}
#opacity {position:absolute; left:0; top:-360px; width:480px; height:320px; background:#000; z-index:10;}
#txt p {padding:5px; margin:0; width:470px; height:310px; color:#ddd; font-family:arial, sans-serif; font-size:12px; line-height:18px; position:absolute; z-index:20; top:-360px; left:0;}
#txt p span {font-weight:bold; font-size:14px; color:#fff; display:block; padding-bottom:10px;}
#txt a {color:#0ae;}
#txt a:hover {text-decoration:none;}
#pad {width:48px; height:48px; background:url({/literal}{$modulepath}/templates/stunichols/pad.gif{literal}); position:absolute; left:268px; top:338px;}
#pad p {margin:0; position:absolute; width:14px; height:0; padding-top:14px; overflow:hidden; cursor:pointer;}
#pad p#previous {left:0; top:17px;}
#pad p#next {right:0; top:17px;}
#pad p#scrollUp {left:17px; top:0;}
#pad p#scrollDown {left:17px; bottom:0;}
#pad #info {left:17px; top:17px; width:16px; height:0; padding-top:16px;}
-->
{/literal}
</style>



{* HEAD/BODY DIVIDER *}

<br/>
<h2>Pictures from: {$albumtitle}</h2>
<br/>
<div id="slideshow">
	<div id="thumbs">
		<div id="thumbHolder">
      {foreach from=$images item=image}
        <img src='{$image->thumburl}' alt="" />
      {/foreach}
		</div>
	</div>

  <div id="txt">
	<div id="opacity"></div>
   {foreach from=$images item=image}
        <p>{$image->title}</p>
   {/foreach}
  </div>

  <div id="images">
   {foreach from=$images item=image}
     <img src='{$image->url}' alt="" />
   {/foreach}
  </div>
  <div id="pad">
		<p id="previous">previous</p>
		<p id="next">next</p>
		<p id="scrollUp">up</p>
		<p id="scrollDown">down</p>
		<p id="info">info</p>
	</div>
</div>



{if $albumDrillDown}
    <div style='clear:both; text-align:center; height:{$imagethumbsize+10}px; width:100%;'>
        <a href='{$linkBack}'>{$linkBackText}</a>
    </div>
{/if}