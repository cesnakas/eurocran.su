<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<script type="text/javascript">
$(document).ready(function() {
	$('select.jcombox').jcombox();
	$('select.jcombox_blue').jcombox({ theme: 'blue' });
	$('select.jcombox_orange').jcombox({ theme: 'orange' });
	$('select.jcombox_mytheme').jcombox({ theme: 'mytheme' });
	$('select.jcombox_safari').jcombox({ theme: 'safari' });
	$('select.jcombox_opera').jcombox({ theme: 'opera' });
});
</script>

<div >
	<h1>jcombox <em>v1.0b</em></h1>
	<p>This is a demo page. <a href="http://jquerylab.com">Home page</a></p>
	<hr />
	<p>
		<select name="sample" class="jcombox">
			<option value="0">Sample text</option>
			<option value="1">Sample text 1</option>
			<option value="2">Sample text 2</option>
			<option value="3">Sample text 3</option>
		</select>
	</p><br /><br />
	<p>
		<select name="sample_blue" class="jcombox_blue">
			<option value="0">Sample text</option>
			<option value="1">Sample text 1</option>
			<option value="2">Sample text 2</option>
			<option value="3">Sample text 3</option>
		</select>
	</p><br /><br />
	<p>
		<select name="sample_orange" class="jcombox_orange">
			<option value="0">Sample text</option>
			<option value="1">Sample text 1</option>
			<option value="2">Sample text 2</option>
			<option value="3">Sample text 3</option>
		</select>
	</p><br /><br />
	<p>
		<select name="sample_mytheme" class="jcombox_mytheme">
			<option value="0">Sample text</option>
			<option value="1">Sample text 1</option>
			<option value="2">Sample text 2</option>
			<option value="3">Sample text 3</option>
		</select>
	</p><br /><br />
	<p>
		<select name="sample_safari" class="jcombox_safari">
			<option value="0">Sample text</option>
			<option value="1">Sample text 1</option>
			<option value="2">Sample text 2</option>
			<option value="3">Sample text 3</option>
		</select>
	</p><br /><br />
	<p>
		<select name="sample_opera" class="jcombox_opera">
			<option value="0">Sample text</option>
			<option value="1">Sample text 1</option>
			<option value="2">Sample text 2</option>
			<option value="3">Sample text 3</option>
		</select>
	</p>
</div>