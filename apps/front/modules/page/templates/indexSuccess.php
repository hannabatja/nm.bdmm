<?php $y = $sf_params->get('y');?>
<?php $l = $sf_params->get('l');?>
<?php $g = $sf_params->get('g');?>
<?php $uri = 'page/index?type='.$type;?>

<div class="pager">
    <span class="left" style="background:#dedede;padding:7px 5px;font-weight:bold;">Төрөл жанр</span>
    <?php foreach (GlobalLib::getArray('genre') as $k=>$v):?>
        <a href="<?php echo url_for($uri.'&y='.$y.'&l='.$l.'&g='.$k)?>" class="<?php if($g == $k) echo 'selected'?>">
            <?php echo $v?></a>
    <?php endforeach?>
    <a href="<?php echo url_for($uri.'&y='.$y.'&l='.$l)?>">Цэвэрлэх</a>
    <br clear="all">

    <span class="left" style="background:#dedede;padding:7px 5px;font-weight:bold;">Бүтээгдсэн он</span>
    <?php foreach (GlobalLib::getArray('years') as $k=>$v):?>
        <a href="<?php echo url_for($uri.'&y='.$k.'&l='.$l.'&g='.$g)?>" class="<?php if($y == $k) echo 'selected'?>">
           <?php echo $v?></a>
    <?php endforeach?>
    <a href="<?php echo url_for($uri.'&l='.$l.'&g='.$g)?>">Цэвэрлэх</a>
    <br clear="all">
    
    <span class="left" style="background:#dedede;padding:7px 5px;font-weight:bold;">Нэрний эхний үсэг</span>
    <?php foreach (GlobalLib::getArray('alpha_en') as $k=>$v):?>
        <a href="<?php echo url_for($uri.'&y='.$y.'&l='.$k.'&g='.$g)?>" class="<?php if($l == $k) echo 'selected'?>">
            <?php echo $v?></a>
    <?php endforeach?>
    <a href="<?php echo url_for($uri.'&y='.$y.'&g='.$g)?>">Цэвэрлэх</a>
    <br clear="all">
    
</div>
<br clear="all">

<?php include_partial('page/boxcolor', array('rss'=>$pager->getResults(), 'type'=>$type, 'width'=>140, 'height'=>250, 'loves'=>$loves));?>

<br clear="all">
<?php echo pager($pager, $uri.'&y='.$y.'&l='.$l.'&g='.$g)?>
