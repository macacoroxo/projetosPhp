<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulário de Contato </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</style>
</head>
<body>

	<style type="text/css">
		body{
	      background-color: #111034;
		}

		h1{
			font-family: var(--bs-font-sans-serif);
			letter-spacing: 5px;
			color: white;
		}

		h10{
			font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			letter-spacing: 5px;
			color: white;
			font-style: italic;
			
		}
		h6{
			cursor: pointer; 
		}
		
		.wp-float {
    		position: fixed;
    		width: 60px;
    		height: 60px;
    		bottom: 40px;
    		right: 39px;
    		background-color: #25d366;
		    color: #FFF;
		    border-radius: 50px;
		    text-align: center;
		    font-size: 30px;
		    box-shadow: 2px 2px 3px #999;
		    z-index: 100;
		    cursor: pointer;
			}


	

		

	</style>
	
	<center>
	<h1> ENTRE EM CONTATO CONOSCO </h1>
	<h10> Responderemos a sua mensagem o mais rápido possível! </h10>
	<br>
	<br>
    </center>

<br>
<br>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-6">

<form method="post" action="valida.php">

    	<div class="form-floating mb-3">
  <input type="text" class="form-control" id="name" placeholder="name" name="nomeCompleto">
  <label for="floatingInput">Seu Nome Completo</label>
</div>
<div class="form-floating mb-3
">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
  <label for="floatingInput">E-mail</label>
</div>

   <div class="form-floating ">
  <input type="tel" class="form-control" id="telefone" placeholder="phone" name="tel">
  <label for="floatingLogin">Seu Telefone</label>
	</div>

	<br>

<button type="submit" class="btn btn-warning btn-lg"> <b>Enviar Mensagem</b> </button>

    	</div>


<div class="col-6">



	 <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 209px" name="suaMensagem"></textarea>
  <label for="floatingTextarea2">Sua Mensagem </label>
  </form>
</div>


<a class="wp-float" target="_blank" rel="noreferrer noopener">
        <svg class="svg-inline--fa fa-whatsapp fa-w-14 my-float" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg><!-- <i class="fab fa-whatsapp my-float"></i> Font Awesome fontawesome.com -->
    </a>

</div>

	</div>
</div>	


 

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

	<br><br><br><br><br><br><br><br><br>
	<center style="color: white;">
	Copyright &copy Gabriel Pinheiro Santos
	<h6> Termos de Uso </h6>
	<h6> Política de Privacidade </h6>
	</center>

</body>
</html>