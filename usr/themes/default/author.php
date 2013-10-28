<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-8" id="main">
        <h3 class="archive-title"><?php $this->archiveTitle('', '', ''); _e(' 发布的文章：'); ?></h3>

        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post">
    			<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    			<ul class="post-meta">
    				<li><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>
    				<li><?php _e('时间：'); ?><?php $this->date('F j, Y'); ?></li>
    				<li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
    			</ul>
                <div class="post-content">
        			<?php $this->content('阅读剩余部分...'); ?>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
