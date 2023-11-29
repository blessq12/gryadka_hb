$(document).ready(function(){
	$('#booking').click(function(){
		$('#contact').toggleClass('show')
		$('body').toggleClass('block-body')
		$('.body-overlay').toggleClass('bg-block')
	})
	$('#close-popup').click(function(e){
		e.preventDefault()
		$('#contact').toggleClass('show')
		$('body').toggleClass('block-body')
		$('.body-overlay').toggleClass('bg-block')
	})

	//litepicker

	const picker = new Litepicker({
		element: document.getElementById('litepicker'),
		allowRepick:true,
		dropdowns:{"minYear":2011,"maxYear":null,"months":true,"years":true},
		format:'DD MMMM YYYY',
		inlineMode:false,
		lang:'ru-RU',
		position:'top',
		resetButton:true,
	});
	//form
	let phone = $('input[name="message[parent][phone]"]')
	let form = $('form')
	phone.mask('+7(999)999-99-99')
	form.submit(function (e) {
		e.preventDefault()
		$.ajax({
			method:'POST',
			url:'php/send.php',
			data:$(this).serialize(),
			success:function (data) {
				let inputs = $('form :input')
				//console.log(inputs)
				inputs.each(function (key,val) {
					if (val.tagName == 'BUTTON'){
						$(this).prop('disabled',true)
					}
					if (val.tagName	== 'INPUT'){
						val.value = ''
						$(this).prop('disabled',true)
					}
				})
				$('.notif')
					.html('Ваша заявка успешно отправлена, ожидайте звонка оператора')
					.css({
						'font-weight':'800'
					})
					.toggleClass('text-dark')
					.toggleClass('text-success')
				$('#booking').click()
			},
			error:function (data) {
				alert('Что-то пошло не так, попробуйте снова')
				console.log(data)
			}
		})
	})
})