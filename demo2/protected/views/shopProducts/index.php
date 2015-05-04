

<div class="products-layout grid m-t-b add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
<?php
/* @var $this ShopProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>