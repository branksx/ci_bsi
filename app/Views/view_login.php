<!DOCTYPE html>
<html lang="en">
<head>
<?php echo view('headers');?>
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					
				<form method=post action='<?php echo site_url();?>public/login/logar'>
					<div class="row">
						<center><h3>LOGIN</h3></center>
					</div>
					<div class="row">
						Login: <input type='text' class="form-control" name='txt_login'/>
					</div>
					<div class="row">
						Senha: <input type='password' class="form-control" name='txt_senha'/>
					</div>
					<div class="row mt-3">
						<div class="col-sm-12">
							<input type='submit' class="btn btn-success" Value='Enviar'/>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>

