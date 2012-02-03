$(function(){
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	};


	$('input[type="text"]').click(function(){
		valor=$(this).val();
		if(valor=="meuemail@dominio.com.br"){
			$(this).val("");
		}
	});

	$('form .email').blur(function(){
		tamanhoEmail=$(this).val().length;
		email=$('.email').val();
		if(!isValidEmailAddress(email)){
			$('.aviso').show();
			$('.aviso').text('O email digitado é inválido.');
		}else{
			$('.aviso').hide();
		}
	});


	
})
