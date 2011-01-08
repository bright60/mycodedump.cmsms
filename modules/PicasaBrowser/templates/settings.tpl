{$startform}
	
	<div class="pageoverflow">
		<p class="pagetext">{$module->Lang('filenamedescription')}</p>
		<p class="pageinput">{$filenamedescriptioninput}</p>
	</div>

<div class="pageoverflow">
		<p class="pagetext">{$module->Lang('includejquery')}</p>
		<p class="pageinput">{$includejqueryinput}{$module->Lang('includejqueryhelp')}</p>
	</div>
{*	<div class="pageoverflow">
		<p class="pagetext">{$prompt_template}:</p>
		<p class="pageinput">{$input_template}</p>
	</div>*}
<fieldset>
  <legend>{$module->Lang("defaultsettings")}</legend>
  <div class="pageoverflow">
		<p class="pagetext">{$module->Lang('defaultuser')}</p>
		<p class="pageinput">{$defaultuserinput}</p>
	</div>
  <div class="pageoverflow">
		<p class="pagetext">{$module->Lang('defaultimagesize')}</p>
		<p class="pageinput">{$defaultimagesizeinput}{$module->Lang('squaresizehelp')}</p>
	</div>
  <div class="pageoverflow">
		<p class="pagetext">{$module->Lang('defaultimagethumbsize')}</p>
		<p class="pageinput">{$defaultimagethumbsizeinput}{$module->Lang('squaresizehelp')}</p>
	</div>
  <div class="pageoverflow">
		<p class="pagetext">{$module->Lang('defaultalbumthumbsize')}</p>
		<p class="pageinput">{$defaultalbumthumbsizeinput}{$module->Lang('squaresizehelp')}</p>
	</div>
</fieldset>


	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$submit}</p>
	</div>
{$endform}

