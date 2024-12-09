<html>
<head>
<style>\table{
width:50%;
}
th,td{
border:1px solid #ddd;
text=align:center;
}
th
{
background-color:#4CAF50;
color:white;
}
</style>
</head>
<body>
<table border="3">
<tr>
<th>player name</th>
</tr>
<?php
$players=["virat","jadeja","rahul","sanju samson","bumrah"];
foreach ($players as $player){
echo"<tr>";
echo"<td>".$player."</td>";
echo"</tr>";
}
?>
</table>
</body>

</html>

