<!DOCTYPE html>
<html lang="pt-br">
	<?php $this->render("header"); ?>
	<body>		
		<div class="content">	
			
			<div class="panel panel-danger">
				<div class="panel-heading">Erro interno</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<?php echo $this->view["error_date"]; ?>
						</li>
						<li class="list-group-item">
							<?php echo $this->view["error_message"]; ?>
						</li>					  	
						<li class="list-group-item">
							<?php echo $this->view["error_file"] . " Linha: " . $this->view["error_line"]; ?>
						</li>
					</ul>
				</div>				
			</div>
			
		</div>
			
	</body>
</html>