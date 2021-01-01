<?php
if(isset($_GET['submit'])){
    $price = $_GET['price'];
    $gst_rate = $_GET['gst_rate'];
function gst($price,$gst_rate){
    $gst = ($price * $gst_rate)/100;
    return $gst;
}
    $gst = gst($price,$gst_rate);
     $gross_price = $price + $gst;
echo "<div class='alert bg-dark text-white'> Net Amount(excluding GST) : Rs- $price<br> GST Rate(%): $gst_rate.0% <br>GST Amount : Rs- $gst <br> Gross Amount(including GST) : Rs- $gross_price</div> <hr>";
}
?>