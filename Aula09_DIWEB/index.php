<!DOCTYPE html>
<html>
    <head>
	<?php
	include_once './webcomplementos.html';	
	?>
    </head>
    <body>
	<div class="container">
	    <h2>Layout Login Normal</h2>
	    <center>
		<div class="card-deck" style="width: 400px;">
		    <div class="card" style="background: #0b0601;">
			<div class="card-body">
			    <img src="logo.png" class="rounded-circle" style="width: 150px;">
			    <h3 class="text-light">Login</h3>
			    <form action="#" method="post">
				<div class="form-group">
				    <input type="email" class="form-control col-9" id="email" placeholder="E-mail">
				</div>
				<div class="form-group">
				    <input type="password" class="form-control col-9" id="senha" placeholder="Senha">
				</div>
				<button class="btn btn-warning" type="reset">RESET</button>
				<button class="btn btn-primary" type="submit">ENVIAR</button>
			    </form>
			</div>
		    </div>
		</div>
	    </center>
	    <h3>Layout Login com Modal</h3>
	    <center>
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" type="button">Login</button>
	    </center>
	    <div class="modal fade bg-dark" id="myModal">
		<div class="modal-dialog">
		    <div class="modal-content">
			<center>
			    <div class="card bg-light">
				<div class="modal-body">
				    <h3>Login</h3>
				    <form action="#" method="post">
					<div class="form-group">
					    <input type="email" class="form-control col-9" id="email" placeholder="E-mail">
					</div>
					<div class="form-group">
					    <input type="password" class="form-control col-9" id="senha" placeholder="Senha">
					</div>
					<button type="submit" class="btn btn-primary">ENVIAR</button>
					<button type="reset" class="btn btn-warning">LIMPAR</button>
			
			<button type="button" class="btn btn-danger" data-dismiss="modal" style="padding: 5px;">FECHAR</button>
				    </form>
				</div>
			    </div>
			</center>
		    </div>
		</div>
	    </div>
	</div>
    </body>
</html>
