<?php
echo date("d / m / Y").'<br/>';
echo date(DATE_RFC2822).'<br/>';
function cone($ray,$haut)
{
$volume=$ray*$ray*3.14*$haut*1/3;
echo 'le volume de ce cone est '.$volume.' '.' cm<sup>3</sup> '.'<br/>';
}
cone(5,3);
?>