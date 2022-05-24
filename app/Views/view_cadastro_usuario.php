<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo view('headers');?>
</head>
<body>
	<?php echo view('top');?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h1>Cadastro de Usuário</h1></center>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<form method='post' action='<?php echo site_url(); ?>public/cadastro_usuario/salvar'>
					<div class="row">
						<div class="col-sm-12">
							<label class='form-label' for="txt_id"> ID: </label> 
							<input id="txt_id" type='text' class='form-control' name='txt_id' readonly value='<?php echo $usuario["ID"]; ?>' />
						</div>
					</div>
			
			<div class="row">
				<div class="col-sm-12">
					<label class='form-label'> Nome: </label>
					<input type='text' class='form-control' name='txt_nome' value='<?php echo $usuario["Nome"]; ?>'/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label class='form-label'> Login: </label>
					<input type='text' class='form-control' name='txt_login' value='<?php echo $usuario["Login"]; ?>' /> 
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label class='form-label'> Senha: </label>
					<input type='password' class='form-control' name='txt_senha' value='<?php echo $usuario["Senha"]; ?>' />
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label class='form-label'> Nivel: </label>
					<select name='sl_nivel' class='form-select'>
						<option value='1'<?php if($usuario["Nivel"] ==1){ echo "selected";}?>>
							ADM
						</option>
						<option value='2'<?php if($usuario["Nivel"] ==2){ echo "selected";}?>>
							Normal
						</option>
					</select>
				</div>
				<div class="col-sm-6"> 
					<label class='form-label'>Status: </label>
						<select name='sl_status' class='form-select'>
							<option value='1'>Ativado</option>
							<option value='0'>Desativado</option>
						</select>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-12">
					<input type='submit' class="btn btn-success" value='Enviar' /> 
					<a class="btn btn-secondary" href ='<?php echo site_url(); ?>public/cadastro_usuario' >
						Novo 
					</a>
				</div>
			</div>
		</div>
			</form>
			<div class="col-sm-6">
				<div class="table-responsive" >
					<br>
					<table border=1 class="table table-hover table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Login</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody class="table-group-divider">	
							<?php for($c=0;$c<count($array_usuarios);$c++){ ?>
								<tr>
									<td><?php echo $array_usuarios[$c]["ID"];?></td>
									<td>
										<a href='
										<?php echo site_url(); ?>public/cadastro_usuario/editar/
										<?php echo $array_usuarios[$c]["ID"];?>
										'>
										<?php echo $array_usuarios[$c]["Nome"];?>
										</a>
									</td>
									<td><?php echo $array_usuarios[$c]["Login"];?></td>
									<td>
										<a href="<?php echo site_url(); ?>
										public/cadastro_usuario/excluir/
										<?php echo $array_usuarios[$c] ["ID"];?>">
										
										<span class="material-symbols-outlined" style='color:black';>
											delete_forever
										</span>				
										</a>
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</body>
	</html>
	