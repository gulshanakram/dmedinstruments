<!--//////////Banner Area Start///////////-->

<div id="carousel-example-generic" class="carousel slide clearfix wow zoomIn"  style="-webkit-animation-duration: 1s; animation-delay: 0s;" data-ride="carousel">
  <!-- Indicators --> 
  


  <ol class="carousel-indicators">
    <?
    $i=0;
    $bbanner = getSlider();
    if($bbanner){
    foreach($bbanner as $bann){   
    ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" <? if($i == 0){echo "class=\"active\"";}?>></li>
    <? $i++;}} ?>
  </ol>




    
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <?
    $i=1;
    $bbanner = getSlider();
    if($bbanner){
    foreach($bbanner as $bann){   
    ?>  
    <div class="item <? if($i == 1){echo "active";}?>">
    <a href="<?=$bann->blink?>">
    <img src="<?=UPLOADURL."banners/".$bann->bimg?>" class="img-responsive center-block" alt="<?=$bann->bname."-".$i?>" title="<?=$bann->bname."-".$i?>">
    </a>
    </div>
    <? $i++;}unset($bann);} ?>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--//////////Banner Area End///////////-->