<?php 
session_start();


require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    	<? if (isset($_SESSION)) {
            # code...
        }?>
        <ul>
    	<?php
    		foreach ($_SESSION['articles'] as $value) {
    	?> <li><?= $value ?> </li>	
    	<?php
    		}
    	?>
    	</ul>
        
    </div>
</section>
<?php require 'inc/foot.php'; ?>
