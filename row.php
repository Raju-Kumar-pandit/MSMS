<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Row insert</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <form action="rows.php" method="POST">
    <div id="input-field">
	<table id="dataTable">
        <tr>
            <td><input type="text" name="name[]" class="insert" placeholder="Enter your name"></td>
			<td><input type="tel" name="phone[]" class="insert" placeholder="Mobile number"></td>
			<td><input type="button" value="Add row" id="add"></td>
		</tr>
    </table>
	</div>
	<td><input type="submit" value="submit"></td>
    </form>
    <SCRIPT language="javascript">
		$(document).ready(function(){
			var html= '<tr><td><input type="text" name="name[]" class="insert" placeholder="Enter your name"></td><td><input type="tel" name="phone[]" class="insert" placeholder="Mobile number"></td><td><input type="button" value="Delete" id="remove"></td></tr>';
		
		var x =1;
		$("#add").click(function(){
			$("#dataTable").append(html);
		});

		$("#dataTable").on('click','#remove',function(){
			$(this).closest('tr').remove();
		});

		});
	</SCRIPT>
</body>
</html>


