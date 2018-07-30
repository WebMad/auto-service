<h1>Товары</h1>
<div class="row">
    <div class="col-md-11 ml-4 products">
        <ul class="products clearfix">

            <?
            foreach($goods as $good){
                ?>
                <li class="product-wrapper">
                    <div href="" class="product shadow">
                        <div class="product-main">
                            <div class="product-photo">
                                <img src="<?= base_url( IMG_GOODS_PATH . $good['photo']);?>" alt="">
                            </div>
                            <div class="product-text">
                                <h2 class="produvt-name"><?= $good['name_good']?></h2>
                                <p class="text-justify"><?= $good['info']?></p>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <div class="product-details">
                                <div class="product-availability"><span class="icon icon-check"></span>В наличии <?= $good['count']?></div>
                                <?if($good['discount']){?>
                                    <span class="product-price product-price-old">
								<b><?= $good['price']?></b>
								<small>руб.</small>
							</span>
                                <?}?>
                                <span class="product-price">
								<b><?= ($good['discount']) ? $good['price']-($good['price']/100*$good['discount']) : $good['price']?></b>
								<small>руб.</small>
							</span>
                            </div>
                            <div class="product-buttons-wrap">
                                <div class="buttons">
                                    <a href="<?= $_SERVER['REQUEST_URI']?>&add2bucket=<?= $good['id']?>"><span class="btn btn-primary"><span class="icon icon-cart"></span>В корзину</span></a>
                                    <span class="btn btn-secondary buy_button">Купить</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


            <?}?>





        </ul>
    </div>
</div>