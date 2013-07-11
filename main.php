<td align="left" valign="top" width="538"><a href="http://www.templatesfreelance.com"><img src="images/spacer.gif" border="0" height="16" width="100%"></a>


<?php

include 'items.php';

function createItem($imgname,$itemnum)
{
$tmp_html = '<td align=center> <a href="./"><img src="pix/' . $imgname . '" border="0"></a><br>
<a href="./" class="text">Item Number: ' . $itemnum . '</a><br>
<!--<strong class="text">Price:</strong> <span class="text" style="color: rgb(255, 0, 0);">$88</span><br>-->
<a href="./"><img src="images/but-buy.jpg" border="0"></a><a href="./"><img src="images/but-addtocart.jpg" border="0"></a> </td>';

return $tmp_html;
}

function createTable($itemTable, $width)
{

}

$imgs = $items[2];
// echo createItem($imgs[0],$imgs[1]); 


echo '
<table border="0" cellpadding="0" cellspacing="0" width="515">
<tbody>
<tr>';


$imgs = $items[0];
echo createItem($imgs[0],$imgs[1]); 



echo '<td width="28"></td> ';


$imgs = $items[1];
echo createItem($imgs[0],$imgs[1]); 

echo '<td width="28"></td>';


$imgs = $items[2];
echo createItem($imgs[0],$imgs[1]); 

echo '
</tr>
</tbody>
</table>
<a href="./"><img src="images/spacer.gif" border="0" height="17" width="100%"></a>
';

?>















</td>
</tr>
</tbody>
</table>
