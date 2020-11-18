<?php
session_start();
mysql_connect("localhost","root","gopi2627") or die("No Connection");
mysql_select_db("file_sample") or die("No Database name");
 $sno=1;
 $sql="SELECT * FROM sample ORDER BY date ASC";
 $result_set=mysql_query($sql);
 ?>
 <html>
  <table border="1">
  <tr>
  <th>sno</th>
  <th>Title</th>
  <th>Category</th>
  <th>Date</th>
  <th>Description</th>
  <th>Uploaded File</th>
  </tr>
  <?php
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
		<td><?php echo $sno++ ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['category'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<td><?php echo $row['description'] ?></td>
        <td><a href="uploads/<?php echo $row['file_name'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
}?>
    </table>
	</html>