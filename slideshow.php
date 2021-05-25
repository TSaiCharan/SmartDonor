<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			#main{
				margin-top:40px;
				margin-left:250px;
			}
			#sildeimage{
				width:1000px;
				height:400px;
			}
		</style>
	</head>
	<body>
		<div id="main">
			<img src="image.jpg" id="sildeimage">
		</div>
		<script>
			setInterval(() => {
				document.getElementById("sildeimage").src="image1.png";
			},3000);
			setInterval(() => {
				document.getElementById("sildeimage").src="image.jpg";
			},6000);
		</script>
	</body>
</html>