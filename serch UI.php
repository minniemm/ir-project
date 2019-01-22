
<?php
	include(dirname(FILE) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
    include("connectDB.php");
		mysqli_set_charset($cid, "utf8");

		$Input_name = $_POST['input_n'];


		$i=0;

	/*		foreach ($terms as $each){
				$i++;
				if ($i == 1){
				$query .= "keywords LIKE '%$each%' ";
				}
				else{
				$query .= "OR keywords LIKE '%$each%' ";
				}
			}
			*/
		$query_gender = "SELECT * FROM peoplelost WHERE Fname ="$Input_name"" ;

	$user ="u07580543";
	$pass ="PwdDBIs07580543";
	$host ="localhost";
	$db ="db07580543";
	$cid = mysqli_connect($host,$user,$pass,$db) or die ("Could not select the database");

		$result = mysqli_query($cid, $query_gender);
				if(mysqli_num_rows($result) == 0
			){
					echo "No results";
				} else {
					while ($row = mysqli_fetch_array($query_gender))   {

						$Pname = $row['Pname'];
						$doc_id = $row['Fname'];
						$count = $row['Lname'];

					echo "<h2>$Fname</h2> <br>";
					echo "<h2>$Lname</h2>";

				}

		}
		mysqli_close($cid);
		}

		?>
