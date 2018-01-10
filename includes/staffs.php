<style type="text/css">
    .dynamic{line-height: 21px}
    .staff-container{margin-bottom: 2%;}
    .staff-container div.staff-detail{float: left;margin-right: 2%;}
    .staff-container div img{width: 161px; height: 161px;}
    .staff-detail table p{margin-left: 5%}
</style>
<div class="col-md-9">
    <div class="panel panel-primary">          
        <div class="panel-heading"><h3><?php if($lan!='en') echo 'हाम्रो स्टाफ'; else echo 'Our Staffs';?></h3></div>
        <div class="panel-body dynamic">
            <?php
                $staff=$groups->getByParentId(STAFFS);
                while($staffGet=$conn->fetchArray($staff)){?>
                    <div class="staff-container">
                        <div class="staff-detail"><?php if($lan=='en') echo $staffGet['contentsen']; else echo $staffGet['contents'];?></div>
                        <div class="staff-detail"><img src="<?php echo CMS_GROUPS_DIR.$staffGet['image'];?>"></div>
                        <div style="clear: both"></div>
                    </div>
                <?php }
            ?>
        </div>
    </div>            
</div>