<HTML>
<HEAD>
<TITLE>TITULO DE PAGINA</TITLE>
</HEAD>
<BODY>
<form method="POST" action="php2.php" name="singin" onsubmit="funcionSubmit(event)" >
    <input type="text" id="text" name="dato">
    <button type="submit">enviar</button>
</form>
</BODY>
<script>
							function funcionSubmit(event){
								event.preventDefault();
								var a = document.getElementById('text').value;													
								var data = {doc_type: a};
											$.ajax({
														url: 'form.php',
														data: data,
														type: 'post',
														dataType: "json",
														success: function (response) {
															if(response.error==true){
															} else {	
																//console.log('llego bien'); opcional	
															}
														},
														error: function (jqXHR, textStatus, errorThrown) {
															document.singin.submit();
														}
													});	
																	event.stopPropagation();
																	return false;
											};

</script>
<script type="text/javascript" src="jquery.js"></script>
</HTML>
