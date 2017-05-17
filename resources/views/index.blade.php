<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Гостевая книга на Laravel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<h1 class="text-content">Гостевая книга</h1><hr>
		<form method="POST" id="id-form_messages">
			<div class="form-group">
				<label for="name">Имя: *</label>
				<input type="text" class="form-control" placeholder="Имя" name="name" id="name">
			</div>
			<div class="form-group">
				<label for="message">Сообщение: *</label>
				<textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="56" id="message"></textarea>
			</div>
			<div class="form-group">
				<label for="name"></label>
				<input type="submit" class="btn btn-primary" value="Добавить">
			</div>
		</form>
		<div class="text-right"><b>Всего сообщений:</b><i class="badge">0</i></div></br>
	
	<div class="messages">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<span>HJJJJJJHJ</span>
					<span class="pull-right label label-info">146624541</span>
				</h3>
			</div>
			<div class="panel-body">
				fdklshnkldhkfldhklghkkdlsjnglkdjsbgjkljkdfjkv jdsfhnjafsdnjkljf dsjahfsja asjgdnjkashnj adgnkslad
				</hr>
				<div class="pull-right">
					<a href="#" class="btnbtn-info">
						<i class="glyphicon glyphicon-pencil"></i>
					</a>
					<button class="btnbtn-danger">
						<i class="glyphicon glyphicon-trash"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>