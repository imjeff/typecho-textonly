<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php if ($this->have()): ?>
<?php while ($this->next()): ?>
<h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
<?php if ( $this->is('post') ) { ?><time datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time><?php } ?>
<div class="content"><?php $this->content(); ?></div>
<?php if ( $this->is('post') ) { ?><p class="tags"># <?php $this->tags('# ', true, '无标签'); ?></p><?php } ?>
<p><br /><?php $this->need('comments.php'); ?></p>
<?php endwhile; ?><?php endif; ?>
<?php $this->need('footer.php'); ?>