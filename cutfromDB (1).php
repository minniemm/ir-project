<?php
include(dirname(FILE) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');

$segment = new Segment();
$r = array();
    include("connectDB.php");
		mysqli_set_charset($cid, "utf8");

		$sql = "SELECT doc FROM peoplelost";
    if ($objQuery = mysqli_query($cid, $sql)) { /// connectDB
      $i = 0;

      $arrayIndex;
    	while ($row = mysqli_fetch_array($objQuery)) {
        echo $i;
        /// cutword ///
        $r = $segment -> get_segment_array($row["doc"]);

        /*$arrlength = count($r);
        for($j = 0; $j < $arrlength; $j++){
            unset($array[$j]);
        }*/

        $i++;
        echo "<br>";
  		}  /*print_r($r);*/
      echo implode(' | ', $r);
  	} else echo "No.";
  	mysqli_close($cid);
?>
