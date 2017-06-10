<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<ul>
			<?php 
				foreach ($post as $key => $value):?>
				<li><?php echo $key;?>: <?php echo $value;?></li>
			<?php endforeach; ?>
		</ul>
		</div>
	</div>	
</div>