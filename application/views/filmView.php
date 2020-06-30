<DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/third_party/style.css"/>
<html>
<body>
<div>
		
			<?php foreach ($fecha as $i => $c): ?>
		<li>
			<span><?=$i;?></span>
			<span class="s40"><?=$c->Nombre;?></span>

			<span class="s60"><?=$c->Title;?></span>
			<span class="s60"><?=$c->Dias;?></span>
			<span class="s60"><?=$c->rental_rate;?></span>
			<span class="s60"><?=$c->Deuda;?></span>

		</li>
	
 <?php endforeach;?>
		</div>
	</body>
	</html>


