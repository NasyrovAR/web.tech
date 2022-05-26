<?php
$link = mysqli_connect('localhost', 'a0670959_redred', 'red');
mysqli_select_db($link,'a0670959_red');

$query = 'SELECT * FROM red';
$result = mysqli_query($link,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body style="background: url('https://cdn.lifehacker.ru/wp-content/uploads/2020/04/07_Zoom_W3_Wallpapers_Template_1920x1080_dw14r5srn2dnxkju_1588254607.jpg')">

	<div class="container">
		<div class="col">
	
			<h1 class="text-center py-3">Примитивный редактор табличных данных.</h1><h3  class="text-center py-3">Рейтинг видеоигры от Аскара Насырова</h3>

			<table style="background-color: #f7f0ee;" class="table table-bordered" data-table="lesson1">
				<thead class="thead">
					<tr>
						 <th width="30px">№</th>
                         <th width="40px">Название</th>
                         <th width="30px">Студия разработчиков</th>
                         <th width="500px">Описание</th>
                         <th width="20px">Рейтинг</th>
                         <th width="20px">Цена в Steam</th>
                         <th width="30px">Ссылка</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = mysqli_fetch_array($result)) {?>
						<tr data-id="<?=$row['id']?>">
							<td class="id"><?=$row['id']?></td>
							<td class="edit name"><?=$row['name']?></td>
							<td class="edit stud"><?=$row['stud']?></td>
							<td class="edit title"><?=$row['title']?></td>
							<td class="edit rate"><?=$row['rate']?></td>
							<td class="edit price"><?=$row['price']?></td>
							<td class="edit link"><?=$row['link']?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($link);
?>