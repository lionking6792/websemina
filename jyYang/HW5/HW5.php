<!DOCTYPE html>

<html>
<head>
	<title>HW5</title>
	<script src="./jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#btn_show").click(function(e){
			e.preventDefault();
			$.ajax({
				url: 'HW5_show_file.php',
				type: 'post',
				dataType: 'json',
				data: {"user_order": 'ls'},
				success:function(data){
					var list = '';
					list += data;
					$("#file_list").html(list);
				}
			})
		});
	});
	</script>
	<style type="text/css">
	#btn_show{
		background-color: pink;
		text-align: center;
		width: 100px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	</style>
</head>

<body>
	<div class="div">
		<div id="btn_show">show</div>
		<div id="file_list">file_list</div>
	</div>
</body>

</html>