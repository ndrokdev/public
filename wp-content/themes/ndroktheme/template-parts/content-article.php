<div class="container">
    <header class="content-header">
        <div class="meta mb-3"><span class="date"><?php the_date('M d, Y'); ?></span>
        <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i> ','</span>'); ?>
       
        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number();?></a></span>
        </div>
    </header>


    <?php
    the_content();
    comments_template();
    ?>

</div>