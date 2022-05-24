<!DOCTYPE html>
<html lang="en">
<head>
<?php echo view('headers');?>
</head>
<body>
	<?php echo view('top');?>
	<br>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-8'>
				<div class="table-responsive">
					<table border=1 class="table table-hover table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>Endereço</th>
								<th>Telefone</th>
							</tr>
						</thead>
						<tbody class="table-group-divider">
							<?php for($c=0;$c<count($array_agenda);$c++){ ?>
							<tr>
								<td><?php echo $array_agenda[$c]["ID"];?></td>
								<td><?php echo $array_agenda[$c]["Nome"];?></td>
								<td><?php echo $array_agenda[$c]["Endereco"];?></td>
								<td><?php echo $array_agenda[$c]["Telefone"];?></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>	
			</div>
			<div class='col-sm-4'>
				<form method='post' action='<?php echo site_url(); ?>public/home/salvar'>
					<div class="row">
						<div class="col-sm-12">
							Nome:
							<input type='text' class="form-control" name='txt_nome'/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">							
						Endereço:
						<input type='text' class="form-control" name='txt_end'/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						Telefone:
						<input type='text' class="form-control" name='txt_tel'/>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-sm-12">
						<input type='submit' class="btn btn-success" value='Salvar' />
						</div>
					</div>
			</div>	
			</form>
		</div>
	</div>
</body>
</html>
