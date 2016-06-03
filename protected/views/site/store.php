<div class="page store">

<div class="container">
        <h2>法国春天百货</h2>
        <?php
        if (file_exists('vstyle/imgs/store/'.$store['id'].'.jpg')) {
        ?>
    	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/store/<?php echo $store['id'];?>.jpg" width="100%" />
    	<?php
    	}
    	?>
    	<div class="storeInfo">
    	    <span class="flagIcon"></span>
    	    <h3><?php echo $store['name'];?></h3>
    	    <p>地址: <?php echo $store['address'];?></p>
    	    <p class="teltext">电话: <span id="telSpace"><?php echo $store['telphone'];?></span></p>
    	    <p>营业时间: <?php echo $store['open'];?></p>
    	</div>
</div>

</div>		

<script type="text/javascript">
    var telElement = document.getElementById("telSpace");
    var tel = telElement.innerHTML.replace(/\s/ig,'');
    telElement.innerHTML = tel;
</script>