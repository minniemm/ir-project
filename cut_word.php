
<?php
include(dirname(FILE) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
$segment = new Segment();

$result = $segment->get_segment_array("�ӷ���ͧ��õѴ");

echo implode('|', $result);

?>