<?php $rs = GlobalTable::doFetchOne('Banner', array('path', 'ext', 'link', 'target'), array('position'=>'footer', 'limit'=>1));?>
<?php include_partial("partial/banner", array('rs'=>$rs, 'width'=>1100, 'height'=>100));?>