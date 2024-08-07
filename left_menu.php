<?php

if (!defined("_VALID_PHP"))

die('Direct access to this location is not allowed.');

if($cid ==""){$cid =0;}else{$cid = $cid;}

?>

<ul class="cd-accordion-menu animated">

				<?

                $mc1 = getAllcats(0);

                if($mc1){

                foreach($mc1 as $cat1){	

				if(ifExists("cparent","ccategories",$cat1->cid)){

                ?>

                <li class="has-children">

                <input type="checkbox" name ="<?=$cat1->cid?>" id="<?=$cat1->cid?>" <?=isYes3($cat1->cid,$cid)?>>

                <label for="<?=$cat1->cid?>"><?=substr($cat1->cname_en,0,30);?><span class="pull-right"><i class="fa fa-angle-double-down"></i></span></label>

                	<ul>

						<?

                        $mc2 = getAllcats($cat1->cid);

                        foreach($mc2 as $cat2){	

                        if(ifExists("cparent","ccategories",$cat2->cid)){

                        ?>

                    	<li class="has-children">

                        <input type="checkbox" name ="<?=$cat2->cid?>" id="<?=$cat2->cid?>" <?=isYes3($cat2->cid,$cid)?>>

                		<label for="<?=$cat2->cid?>"><i class="fa fa-angle-right"></i> <?=substr($cat2->cname_en,0,30);?><span class="pull-right"><i class="fa fa-angle-down"></i></span></label>

                        	<ul>

								<?

                                $mc3 = getAllcats($cat2->cid);

                                foreach($mc3 as $cat3){	

                                if(ifExists("cparent","ccategories",$cat3->cid)){

                                ?>

                                <li class="has-children">

                                <input type="checkbox" name ="<?=$cat3->cid?>" id="<?=$cat3->cid?>" <?=isYes3($cat3->cid,$cid)?>>

                                <label for="<?=$cat3->cid?>"><i class="fa fa-angle-right"></i> <?=substr($cat3->cname_en,0,30);?><span class="pull-right"><i class="fa fa-angle-down"></i></span></label>

                                	<ul>

										<?

                                        $mc4 = getAllcats($cat3->cid);

                                        foreach($mc4 as $cat4){	

                                        if(ifExists("cparent","ccategories",$cat4->cid)){

                                        ?>

                                        <li class="has-children">

                                        <input type="checkbox" name ="<?=$cat4->cid?>" id="<?=$cat4->cid?>" <?=isYes3($cat4->cid,$cid)?>>

                                        <label for="<?=$cat4->cid?>"><i class="fa fa-angle-right"></i> <?=substr($cat4->cname_en,0,30);?><span class="pull-right"><i class="fa fa-angle-down"></i></span></label>

                                        	<ul>

												<?

                                                $mc5 = getAllcats($cat4->cid);

                                                foreach($mc5 as $cat5){	

                                                if(ifExists("cparent","ccategories",$cat5->cid)){

                                                ?>

                                                <li class="has-children">

                                                <input type="checkbox" name ="<?=$cat5->cid?>" id="<?=$cat4->cid?>" <?=isYes3($cat5->cid,$cid)?>>

                                                <label for="<?=$cat5->cid?>"><i class="fa fa-angle-right"></i> <?=substr($cat5->cname_en,0,30);?><span class="pull-right"><i class="fa fa-angle-down"></i></span></label>

                                                </li>

												<? }else{?>

                                                <li><a<?=adClassact($cat5->cid,$cid)?> href="<?=doseoLink("products",$cat5->cid)?>"><i class="fa fa-angle-right"></i> <?=substr($cat5->cname_en,0,30);?></a></li>

                                                <? } ?>

                                                <? }unset($cat5); ?>

                                            </ul>

                                        </li>

										<? }else{?>

                                        <li><a<?=adClassact($cat4->cid,$cid)?> href="<?=doseoLink("products",$cat4->cid)?>"><i class="fa fa-angle-right"></i> <?=substr($cat4->cname_en,0,30);?></a></li>

                                        <? } ?>

                                        <? }unset($cat4); ?>

                                    </ul>

                                </li>

								<? }else{?>

                                <li><a<?=adClassact($cat3->cid,$cid)?> href="<?=doseoLink("products",$cat3->cid)?>"><i class="fa fa-angle-right"></i> <?=substr($cat3->cname_en,0,30);?></a></li>

                                <? } ?>

                                <? }unset($cat3); ?>

                            </ul>

                        </li>

						<? }else{?>

                        <li><a<?=adClassact($cat2->cid,$cid)?> href="<?=doseoLink("products",$cat2->cid)?>"><i class="fa fa-angle-right"></i> <?=substr($cat2->cname_en,0,30);?></a></li>

                        <? } ?>

                        <? }unset($cat2); ?>

                    </ul>

                </li>

                <? }else{?>

                <li><a<?=adClassact($cat1->cid,$cid)?> href="<?=doseoLink("products",$cat1->cid)?>"><?=substr($cat1->cname_en,0,30);?><span class="pull-right"><i class="fa fa-angle-double-right"></i></span></a></li>

				<? } ?>

				<? }unset($cat1); ?>

                <? }else{echo "<li>no category found</li>";} ?>

            </ul>