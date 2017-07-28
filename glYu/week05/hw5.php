<!DOCTYPE html>
<html>
<head>
	<title> form test </title>
	<script src="./jquery.js" type="text/javascript"></script>
	<script type="text/javascript">

	$(document).ready(function() {
		$("#show").click(function(e) {
			e.preventDefault();

			$.ajax({
				url: "hw5post.php",
				type: "post",
				dataType: "json",
				success:function(data) {
					var content = data;
					$("#div2").html(content);
				}
			})
		});
	});
	</script>

	<style>
	#show {
		background: pink;
		width: 100px;
		height: 30px;
	}
	</style>
</head>
<body>
	<div class="div">
		<div id="show">show</div>
		<div id="div2"></div>
	</div>
</body>
</html>