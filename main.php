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

function createRow($items,$istart)
{

$tmp1_html = '
<table border="0" cellpadding="0" cellspacing="0" width="515">
<tbody>
<tr>';


$imgs = $items[$istart];
$tmp2_html = createItem($imgs[0],$imgs[1]); 



$tmp3_html = '<td width="28"></td> ';


$imgs = $items[$istart+1];
$tmp4_html = createItem($imgs[0],$imgs[1]); 

$tmp5_html = '<td width="28"></td>';


$imgs = $items[$istart+2];
$tmp6_html = createItem($imgs[0],$imgs[1]); 

$tmp7_html = '
</tr>
</tbody>
</table>
<a href="./"><img src="images/spacer.gif" border="0" height="17" width="100%"></a>
';

$tmp_ret = $tmp1_html . $tmp2_html . $tmp3_html . $tmp4_html . $tmp5_html . $tmp6_html . $tmp7_html;

return $tmp_ret;

}


$max = sizeof($items);

for($i = 0; $i<$max; $i=$i+3)
{
echo createRow($items,$i);
}
?>















</td>
</tr>
</tbody>
</table>
