
<?php
$tags=[
	'murder',
	'hijack',
	'blackmail',
	'car accident',
	'robbery',
]
 ?>
<form action="_inc/odkazovac/add-new.php" class="form-group" method="POST">
    <input type="text" name="title" class="form-control" placeholder="titulok" autocomplete="off">
    <input type="text" name="author" class="form-control" placeholder="komu" autocomplete="off">
    <textarea name="message" id="" cols="10" rows="5" placeholder="správa" class="form-control"></textarea>
<!--      --><?php //foreach ($tags as $tag):?>
<!--		 <label class="checkbox-inline">-->
<!--			<input type="checkbox" value="--><?php //echo $tag; ?><!--" name="tag[]">--><?php //echo $tag; ?>
<!--		</label>-->
<!--  	--><?php //endforeach ?>
	<button type="submit" class="btn btn-block">+</button>
</form>
