<!DOCTYPE html>
<html>
	<head>			
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../../extensions/Editor/css/editor.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js">		
	</script>	
		<title></title>	
	</head>
	<body>
		<div style="padding:100px;">
			<table class="display" id="fans">
				<thead>
					<th>id</th>
					<th>page_id</th>
					<th>fan_count</th>
					<th>unix time</th>
				</thead>
			</table>
		</div>
		<script type="text/javascript">
		$(function(){
			$("#fans").dataTable({
				"dom":'T<"clear">lfrtip',
				"ajax":"data.php",
				"order":[[0,"desc"]],
				"columns":[
				{"data":"id"},
				{"data":"fb_page_id"},
				{"data":"fan_count"},
				{"data":"time"},			
				],
			})});
	</script>			
	<body>
<html>
