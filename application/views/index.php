<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$.get("/notes/index_html", function(res) {
			$("#notes").html(res);
		});
		$("body").on('submit', '.create', function(){
			$.post("/notes/create_title", $(this).serialize(), function(res) {
				$("#notes").html(res);
			});
			return false;
		});
		$("body").on('focusout', '.update_description', function(){
			$.post("/notes/update_description", $(this).serialize(), function(res) {
				$("#notes").html(res);
			});
			return false;
		});
		$("body").on('click', '.delete', function(){
			var lol = $(this).attr("href")
			$.post(lol, $(this).serialize(), function(res) {
				$("#notes").html(res);
			});
			return false;
		});
	});
	</script>
	<style type="text/css">
	textarea {
		overflow: scroll;
		width: 80%;
		max-width: 500px;

	}

	h3 {
		display: inline-block;
	}
	a {
		display: inline-block;
		padding-top: 50px;
	}

	hr {
		max-width: 550px;
	}
	body {
		margin: 0px auto;
		text-align: center;
	}
	</style>
</head>
<body>
	<h1>Notes</h1>
	<div  id="notes">
		
	</div>
	<!-- <hr>
	<form action="/notes/delete/:INSERTIDHEREWHENDISPLAYING:" method="POST">
		<h3>This is a title</h3>
		<textarea class="edit">I already have some text submited to this, here it is.</textarea><br>
		<input type="submit" value="delete this shit">
		<button type="submit" formaction="/notes/update/:INSERTIDHEREWHENDISPLAYING:">updated this in db</button>
	</form>
	<hr>
	<h3>This is a title</h3>
	<form action="/notes/delete/:INSERTIDHEREWHENDISPLAYING:" method="POST">
		<textarea class="edit" placeholder="Enter description here, please..."></textarea><br>
		<input type="submit" value="delete this shit">
		<button type="submit" formaction="/notes/update/:INSERTIDHEREWHENDISPLAYING:">updated this in db</button>
	</form>

<hr>
	<form action="/notes/create_title" method="POST">
		<input type="text" name="title" placeholder="insert note title here..."><br><br>
		<input type="submit" value="add this into db">
	</form>

	<form action="/notes/update_description/6" method="POST">
		<textarea name="description">slkjdfsajflsakfjfd		</textarea>
		<input type="submit" value="update">
	</form> -->

</body>
</html>