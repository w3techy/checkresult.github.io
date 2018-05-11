<?php
$sql = "SELECT * FROM chemistry WHERE ID='$user_check'";
$query = mysqli_query($conn, $sql);
if (!$query) {
   die ('SQL Error: ' . mysqli_error($conn));
  }
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$score  = $row['score'] == 0 ? '' : number_format($row['score']);
			echo '<tr>
					<td>Chemistry</td>
					<td>'.$score.'</td>
					<td>'.$row['grade'].'</td>
					<td>'.$row['remarks'].'</td>
					
				</tr>';
		}?>