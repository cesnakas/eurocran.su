<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<script type="text/javascript">
$(document).ready(function() {
	$("a.zoom").fancybox();

	$("a.zoom1").fancybox({
		'overlayOpacity'	:	0.7,
		'overlayColor'		:	'#FFF'
	});

	$("a.zoom2").fancybox({
		'zoomSpeedIn'		:	500,
		'zoomSpeedOut'		:	500
	});
});
</script>

<div id="content">
	<h1>FancyBox <em>v1.2.6</em></h1>
	<p>This is a demo page. <a href="http://fancybox.net">Home page</a></p>
	<hr />
	<p>
		Single image <br />

		<a class="zoom1" title="Sample title" href="/bitrix/components/soulstream/jquery/templates/fancybox/images/1_b.jpg"><img src="/bitrix/components/soulstream/jquery/templates/fancybox/images/1_s.jpg" alt="" /></a>
		<a class="zoom2" href="/bitrix/components/soulstream/jquery/templates/fancybox/images/2_b.jpg"><img src="/bitrix/components/soulstream/jquery/templates/fancybox/images/2_s.jpg" alt="Another title" /></a>
	</p>
	<p>
		Image group <br />

		<a class="zoom" rel="group" title="Group title #1" href="/bitrix/components/soulstream/jquery/templates/fancybox/images/3_b.jpg"><img src="/bitrix/components/soulstream/jquery/templates/fancybox/images/3_s.jpg" alt="" /></a>
		<a class="zoom" rel="group" title="Group title #2" href="/bitrix/components/soulstream/jquery/templates/fancybox/images/4_b.jpg"><img src="/bitrix/components/soulstream/jquery/templates/fancybox/images/4_s.jpg" alt="" /></a>
		<a class="zoom" rel="group" href="/bitrix/components/soulstream/jquery/templates/fancybox/images/5_b.jpg"><img src="/bitrix/components/soulstream/jquery/templates/fancybox/images/5_s.jpg" alt="" /></a>
	</p>
</div>