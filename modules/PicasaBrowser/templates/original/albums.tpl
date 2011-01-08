{foreach from=$albums item=album}
    <div class='pwaAlbum' style='width:{$albumthumbsize+20}px;height:{$albumthumbsize+30}px;float:left;text-align:center;'>
        <a title="{$album->title}" href="{$album->link}" style='display:block;width: {$albumthumbsize+10}px;margin: auto auto;'>
            <img src='{$album->thumburl}' style='padding:0px;' alt='{$album->title}' >
        </a>
        <div style='clear:both;width:{$albumthumbsize+20}px;float:left;text-align:center;'>
        {$album->title}
        </div>
    </div>
{/foreach}
