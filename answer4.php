<table border="1">
<?php
for ($i=1; $i<=10; $i++) {
	if ($i % 2 == 1)
	echo '<tr bgcolor= "green">';
else
	echo '<tr>';

for ($j=1; $j<=5; $j++) {
	 echo "<td>$i, $j</td>";
}	 
echo '</tr>';
}
?>
</table>
