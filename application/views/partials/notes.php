<?php 

foreach ($notes as $key => $note)
{
$id = $note["id"];
$delete = "/notes/destroy/" . $note["id"];
$update = "/notes/update_description/" . $note["id"];

if(!empty($note["title"]))
{
	?> <h3><?= $note["title"] ?></h3><?
}	?> <a class="delete" href = "<?= $delete ?>">DELETE</a>
	<form class="update_description" action ="<?= $update ?>" method="POST" >
		



<?php if(!empty($note["description"]))
		{
			?><textarea name="description"><?= $note["description"] ?></textarea><?
		}
		else
		{
				?>	<textarea placeholder="Enter note here..." name="description"></textarea> <?
		}
?>

		<input type="hidden" name="id" value=<?= $id ?>>
		<hr>

	</form>
<? } ?>

<form action="/notes/create_title" class="create" method="POST">
		<input type="text" name="title" placeholder="insert note title here..."><br><br>
		<input type="submit" value="add this into db">
	</form>



 <?php ?>