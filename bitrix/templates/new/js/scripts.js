$(() => {
	$('.lup_img').click(function (e) {
		e.preventDefault();
		$('.bottom2').toggle();
	});

	// Мини всплывающие окна
	$('.mini_modal_btn').click(function (e) {
		e.preventDefault()

		const modalId = $(this).data('modal-id')

		if ($(this).hasClass('active')) {
			$(this).removeClass('active')
			$('.mini_modal').removeClass('active')

			if (is_touch_device()) $('body').css('cursor', 'default')
		} else {
			$('.mini_modal_btn').removeClass('active')
			$(this).addClass('active')

			$('.mini_modal').removeClass('active')
			$(modalId).addClass('active')

			if (is_touch_device()) $('body').css('cursor', 'pointer')
		}
	})

	// Закрываем всплывашку при клике за её пределами
	$(document).click((e) => {
		if ($(e.target).closest('.modal_cont').length === 0) {
			$('.mini_modal, .mini_modal_btn').removeClass('active')

			if (is_touch_device()) $('body').css('cursor', 'default')
		}
	})

	if (is_touch_device()) {
		$('header .menu .item > a.sub_link').addClass('touch_link')

		$('header .menu .item > a.sub_link').click(function (e) {
			const $dropdown = $(this).next()

			if ($dropdown.css('visibility') === 'hidden') {
				e.preventDefault()

				$('header .menu .sub_menu').removeClass('show')
				$dropdown.addClass('show')

				$('body').css('cursor', 'pointer')
			}
		})

		// Закрываем под. меню при клике за её пределами
		$(document).click((e) => {
			if ($(e.target).closest('.menu').length === 0) {
				$('header .menu .sub_menu').removeClass('show')

				$('body').css('cursor', 'default')
			}
		})
	}

	// Маска ввода
	$('input[type=tel]').inputmask('+7 999 999 99 99')

	$("a.fancybox, a[rel=fancybox]").fancybox()

	// Аккордион
	$('body').on('click', '.accordion .item .head', function (e) {
		e.preventDefault()

		const $item = $(this).closest('.item'),
			$accordion = $(this).closest('.accordion')

		if ($item.hasClass('active')) {
			$item.removeClass('active').find('.data').slideUp(300)
		} else {
			$accordion.find('.item').removeClass('active')
			$accordion.find('.data').slideUp(300)

			$item.addClass('active').find('.data').slideDown(300)
		}
	})

	// Боковая колонка - фильтр
	$('.mob_filter_btn').click(function (e) {
		e.preventDefault()

		!$(this).hasClass('active')
			? $(this).addClass('active').next().slideDown(300)
			: $(this).removeClass('active').next().slideUp(200)
	})

	$('.filter .name.spoler_btn').click(function (e) {
		e.preventDefault()

		!$(this).hasClass('active')
			? $(this).addClass('active').next().slideDown(300)
			: $(this).removeClass('active').next().slideUp(200)
	})

	/*const lengthRange = $('.filter #length_range').ionRangeSlider({
		type: 'double',
		min: 0,
		max: 100,
		from: 22,
		to: 68,
		step: 1,
		onChange: data => {
			$('.filter .length_range input.from').val(data.from.toLocaleString())
			$('.filter .length_range input.to').val(data.to.toLocaleString())
		}
	}).data("ionRangeSlider")

	$('.filter .length_range .input').keyup(() => {
		lengthRange.update({
			from: parseFloat($('.filter .length_range input.from').val().replace(/\s+/g, '')),
			to: parseFloat($('.filter .length_range input.to').val().replace(/\s+/g, ''))
		})
	})

	const loadCapacityRange = $('.filter #load_capacity_range').ionRangeSlider({
		type: 'double',
		min: 0,
		max: 500,
		from: 16,
		to: 500,
		step: 1,
		onChange: data => {
			$('.filter .load_capacity_range input.from').val(data.from.toLocaleString())
			$('.filter .load_capacity_range input.to').val(data.to.toLocaleString())
		}
	}).data("ionRangeSlider")

	$('.filter .load_capacity_range .input').keyup(() => {
		loadCapacityRange.update({
			from: parseFloat($('.filter .load_capacity_range input.from').val().replace(/\s+/g, '')),
			to: parseFloat($('.filter .load_capacity_range input.to').val().replace(/\s+/g, ''))
		})
	})*/

	// Моб. меню
	$('header .mob_menu_btn').click((e) => {
		e.preventDefault()

		if (!$('header .mob_menu_btn').hasClass('active')) {
			$('header .mob_menu_btn').addClass('active')
			$('header .bottom').fadeIn(300)
		} else {
			$('header .mob_menu_btn').removeClass('active')
			$('header .bottom').fadeOut(200)
		}
	})

	$('[data-src="#buy-form"]').click((e) => {
		e.preventDefault();
		$.fancybox.open({
			src: '#buy-form',
			type: 'inline',
			clickSlide : 'false',
	    	clickOutside : 'false',
			touch: false,
			beforeLoad:function(){
				let n = e.target, 
					f = $(n).attr('data-name');
				$("#buy-form .block_title").html(f);
			}
		});
	})

})

$(window).on('load', () => {
	// Выравнивание элементов в сетке
	$('.products .row').each(function () {
		productHeight($(this), parseInt($(this).css('--products_count')))
	})

	$('.category_info .photo_gallery .row').each(function () {
		photoGalleryHeight($(this), parseInt($(this).css('--photo_gallery_count')))
	})
})

$(window).resize(() => {
	// Выравнивание элементов в сетке
	$('.products .row').each(function () {
		productHeight($(this), parseInt($(this).css('--products_count')))
	})

	$('.category_info .photo_gallery .row').each(function () {
		photoGalleryHeight($(this), parseInt($(this).css('--photo_gallery_count')))
	})
})

// Выравнивание товаров
function productHeight(context, step) {
	let start = 0,
		finish = step,
		$products = context.find('.product')

	$products.find('.name, featues').height('auto')

	$products.each(function () {
		setHeight($products.slice(start, finish).find('.name'))
		setHeight($products.slice(start, finish).find('.featues'))

		start = start + step
		finish = finish + step
	})
}

// Выравнивание - Фото нашей спецтехники на объектах
function photoGalleryHeight(context, step) {
	let start = 0,
		finish = step,
		$items = context.find('.item')

	$items.find('.name').height('auto')

	$items.each(function () {
		setHeight($items.slice(start, finish).find('.name'))

		start = start + step
		finish = finish + step
	})
}

const is_touch_device = () => !!('ontouchstart' in window)

const setHeight = (className) => {
	let maxheight = 0

	className.each(function () {
		const elHeight = $(this).outerHeight()

		if (elHeight > maxheight) maxheight = elHeight
	})

	className.outerHeight(maxheight)
}

// BEGIN JIVOSITE CODE {literal}
(function(){ var widget_id = 'UJvpelHO0C';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
// {/literal} END JIVOSITE CODE