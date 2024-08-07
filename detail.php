<?php
define("_VALID_PHP", true);
require_once ("xpertspanel/init.php");
$core->getVisitors(); // visitor counter
$pid = getFlyPid();
$pdata = getValues("*","pprods","pid=".$pid);
$cid = $pdata->pparent;
if($_POST['acart']){addCart();}
?>

<html lang="en" class="gr__blueiceindustry_com">
<head>
<?=getHead("cat",$cid)?>

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

<style type="text/css">
            div.cloudzoom-zoom,div.cloudzoom-zoom-inside{display: block !important;}
            div.cloudzoom-blank,div.cloudzoom-blank div.cloudzoom-lens{display: none !important;}
        </style>
        
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

<?=getprdBanner($cid);?>

<div class="row row-eq-height">
<div class="col-lg-3 col-md-3 col-sm-4 mtb-20">
<div class="leftmenu">
<h4>Our Categories</h4>
<? require_once("includes/left_menu.php");?>
</div>
</div>

<div class="col-lg-9 col-md-9 col-sm-8 inflex">
<div class="prdarea">
<div class="prdarea3">
<h4><?=getHeadCat($cid,getValue("cparent","ccategories","cid=".$cid))?></h4>
</div>
<div class="row">
<?
$mc1 = getAllcats($cid);
if($mc1){
$i=1;	
foreach($mc1 as $cat1){	
?>
<div class="col-lg-4 col-md-4 col-sm-6 mt-10 clearfix"><div class="prodpgcat">
<a title="<?=$i?>" href="<?=doseoLink("products",$cat1->cid)?>"><?=$cat1->cname_en?></a></div></div>
<? $i++;}unset($cat1); ?>
<? }?>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 inflex">
<div class="prdarea">



<? if($pdata->pid != "" || $pdata->pid != 0){ ?>
<div class="row" style="background:#fff;">

<div class="col-lg-8 col-md-8 col-sm-6 mtb-15">

<div class="largeimg">

<img id="zoom1" class = "cloudzoom img-responsive center-block" src = "<?=getpimg($pdata->pid,"m")?>" data-cloudzoom = "zoomImage: '<?=getpimg($pdata->pid,"l")?>', zoomPosition: 'inside', autoInside: true"  alt="<?=$pdata->part?>">

</div>



<?

$moreviews = getMoreViews();

if($moreviews){

?>

<div class="row">

<div class="slidee3">

<div class="col-lg-2 mtb-10">

<a href="#" class="cloudzoom-gallery" data-cloudzoom="useZoom: '#zoom1', image: '<?=getpimg($pdata->pid,"m")?>', zoomImage: '<?=getpimg($pdata->pid,"l")?>'">

<img src="<?=getpimg($pdata->pid,"s")?>" class="img-responsive center-block" alt="<?=$pdata->pname."-".$pdata->part?>" >

</a>

</div>

<? foreach($moreviews as $mview){	?>

<div class="col-lg-2 mtb-10">

<a href="#" class="cloudzoom-gallery" data-cloudzoom="useZoom: '#zoom1', image: '<?=getmvimg($mview->mid,"m")?>', zoomImage: '<?=getmvimg($mview->mid,"l")?>'">

<img src="<?=getmvimg($mview->mid,"s")?>" class="img-responsive center-block" alt="<?=$mview->mname?>" title="<?=$mview->mname?>">

</a>

</div>

<? }unset($mview); ?>

</div>

</div>

<? }?>

<div class="row">
	<div class="col-lg-12 col-sm-12 col-sm-12 mt-15 largedet">


<div class="detail2">
<h4><strong>Item Name:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?=$pdata->pname?></h4>


<h4><strong>Art No#:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?=$pdata->part?></h4>
</div>
<h5 style="color:#0b57a6; font-size:12px; font-weight:bold; margin:10px 0 5px 0px;"><strong>Description</strong></h5>

<div class="descriptionsshere">
<?=cleanOut($pdata->pfdetail)?>
</div>


<form class="form-horizontal" method="post">

<?=getPrdOptions($pid)?>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label" style=" width:12%; color:#111;">Qty: </label>

<div class="col-sm-5">

<input name="qty" type="number" class="form-control formfldgg" style="border-radius:0;" id="inputEmail3" value="10">

</div>

<div class="col-sm-12 t1515">

<input type="hidden" name="pid" value="<?=$pid?>" />
<div class="clearfix" style="margin-top:20px;">
<input type="submit" name="acart" class="btn" style="padding:5px 15px 5px 15px; background:none; font-weight:bold; font-size:12px;
color:#fff; background:#2285d6; text-transform:uppercase" value="Add to Basket">

<div class="back-to-prd">
	<a href="javascript:history.go(-1);"><img src="<?=WEBROOT?>images/btnbacktoprod.jpg" alt=""></a>
</div>
</div>

</div>

</div>

</form>





</div>
</div>



</div>

<div class="row">

<div class="col-lg-4" style="max-height:734px; overflow-y:scroll;">
<div class="real" style="margin-top:30px;">
<h4 style="color:#222;">Related Products</h4>
</div>
<div class="row">

<div class="slidee11">

<div class="back-wwrpperprd">

<?
$relprod = getrelPrd($cid,15);
if($relprod){
foreach($relprod as $row){?>

<div class="col-lg-6 col-md-6 col-sm-6 mtb-20">
<a href="<?=doseoLink("detail",$row->pid)?>">
<div class="feature2">
<div class="feature_main">
<div class="prdddd"><img src="<?=getpimg($row->pid,"s")?>" class="img-responsive center-block"></div>
<p><?=$row->part?></p>
<div class="spnt">
</div><!--spnt-->
</div><!--feature_main-->
</div><!--feature2-->
</a>
</div><!--col-lg-4-->


<? }}else{echo "<center>No related products found!</center>";}?>

</div>

</div>
</div>
</div>
</div>    



</div>

<? }else{echo "<p class=\"bg-danger xmsgred\">no product found</p>";} ?>


</div>
</div>


</div>
</div>
</div>

</div><!--container-->



<? require_once("includes/footer.php");?>
<? require_once("includes/script.php");?>
<script type="text/javascript" src="<?=ADMINURL?>/js/cloudzoom/cloudzoom.js"></script>
<script>CloudZoom.quickStart();</script>
<?=getBtm()?>


</body>
</html>