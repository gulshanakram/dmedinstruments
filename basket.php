<?php
define("_VALID_PHP", true);
require_once ("xpertspanel/init.php");
$core->getVisitors(); // visitor counter
$carts = getCartItems();
if($_POST['cupdate']){updateCart();}
if($_POST['cdell']){deleteCart();}
$id = 41;
?>



<html lang="en" class="gr__blueiceindustry_com">
<head>
<?=getHead("cms",$id)?>

<link href="<?=WEBROOT?>css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Start Custom Stylesheets -->
<link href="<?=WEBROOT?>css/main.css" rel="stylesheet">
<link href="<?=WEBROOT?>css/animate.min.css" rel="stylesheet">
<!-- Fonts Awesome (Icons) -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Owl Carousel Assets -->
<link href="<?=WEBROOT?>css/owl.carousel.css" rel="stylesheet">
<link href="<?=WEBROOT?>css/owl.theme.css" rel="stylesheet">
<!-- Slide Coin -->
<link rel="stylesheet" type="text/css" href="<?=WEBROOT?>front.css">
<link rel="stylesheet" href="<?=WEBROOT?>css/leftmenu.css" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body data-gr-c-s-loaded="true">

<? require_once("includes/header.php");?>



<div class="container containerrr22">

<?=getcmsB($id);?>

<div class="row row-eq-height">
<div class="col-lg-3 col-md-3 col-sm-4 mtb-20">
<div class="leftmenu">
<h4> Our Categories</h4>
<? require_once("includes/left_menu.php");?>
</div>
</div>

<div class="col-lg-9 col-md-9 col-sm-8 mtb-20 inflex">
<div class="prdarea22" style="margin:0px 0 0 0px;">
<div class="lasani22">
<h4 class="nextpagel-headings"><?=getcmsN($id);?></h4>
</div>

<?=cleanOut(getcmsF($id));?>
<?=getLogs();?>
<?php
if(!$carts):
echo "<p class=\"bg-danger xmsgred\">Your basket is Empty!</p>";
else: ?>
<div class="col-lg-12">

<div class="row">

<div class="col-sm-6 txt-l"><a class="ccback" href="javascript:history.back()">Continue Browsing</a></div>

<div class="col-sm-6 txt-r"><a class="ccback" href="<?=doseoLink("inquiry")?>">Send Inquiry</a></div>

</div>

</div>
<? foreach ($carts as $row):?>
<div class="bbasket">

<div class="row">

<div class="col-lg-2 col-sm-3 clpadr text-center"><h5>Image</h5><div class="pdpd"><img src="<?=getpimg($row->pid,"s")?>" class="img-responsive center-block" alt="<?=getValue("part","pprods","pid=".$row->pid)?>" ></div></div>

<div class="col-lg-4 col-sm-3 clpadr clpadl">

<h5>Detail</h5>

<div class="pdpd">

<p><span>Name:</span> <?=getValue("pname","pprods","pid=".$row->pid)?></p>

<p><span>Art#:</span> <?=getValue("part","pprods","pid=".$row->pid)?></p>

<? if($row->copt != ""){?><p><span>Option:</span><?=$row->copt?></p><? }?>

</div></div>



<div class="col-lg-3 col-sm-3 clpadr clpadl text-center">

<h5>Qty</h5>

<div class="pdpd text-center mtb-10">

<form method="post">

<input type="number" name="cqty" class="form-control" value="<?=$row->cqty?>" style="width:60px; display:inline-block;">

<button type="submit" name="cupdate" value="<?=$row->cid?>">Update</button>

</form>

</div></div>



<div class="col-lg-3 col-sm-3 clpadl text-center">

<h5>Action</h5>

<div class="pdpd text-center mtb-10">

<form method="post">

<button type="submit" name="cdell" value="<?=$row->cid?>" onClick="return confirm('Are you sure you want to delete this record?');window.location.reload()">Delete</button>

</form>

</div></div>

</div>

</div>
<?php endforeach; unset($row); endif;?>


</div>
</div>
</div>

</div><!--container-->



<? require_once("includes/footer.php");?>
<? require_once("includes/script.php");?>
<?=getBtm()?>





</body>
</html>