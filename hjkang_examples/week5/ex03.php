<!DOCTYPE html>
<html>
<head>
	<title>example 03</title>
	<script src="./jquery.js" type="text/javascript"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		$("#save").click(function(e){
			e.preventDefault();
			var result = $('#textcontent').val();
			$.ajax({
				url: 'ex03post.php',
				type: 'post',
				dataType: 'json',
				data: {"result" : result},
				success:function(data){
					var content = '';
					content += data;
					$("#div2").html(content);
				}			
			})
		});
	});	

	</script>
	<style>
	#save{
		background: pink;
		width: 100px;
		height: 30px;
	}
	</style>
</head>
<body>
	<div class="div">
		<textarea id="textcontent" rows="5" cols ="40"></textarea><br>
		<div id="save">save</div>
		<div id="div2"></div>
	</div>
</body>
</html>