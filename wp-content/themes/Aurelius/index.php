<?php get_header(); ?>
<!-- Column 1 /Content -->
<div class="grid_8">
	<!-- Blog Post -->
	<div class="post">
			<!-- Post Title -->
			<h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<!-- Post Data -->
			<p class="sub"><a href="#">News</a>, <?php the_tags('标签：', ', ', ''); ?> &bull; <?php the_time('Y年n月j日') ?>
				 &bull; <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' &bull; ', ''); ?>
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Image -->
			<img class="thumb" alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />
			<!-- Post Content -->
			<?php the_excerpt(); ?>
			<?php the_content('阅读全文...'); ?>

			<!-- Read More Button -->
			<p class="clearfix"><a href="single.html" class="button right"> Read More...</a></p>
	</div>
	<div class="hr clearfix">&nbsp;</div>

	<!-- Blog Navigation -->
	<p class="clearfix"> <a href="#" class="button float">&lt;&lt; Previous Posts</a> <a href="#" class="button float right">Newer Posts >></a> </p>
</div>
	<!-- Column 2 / Sidebar -->
	<?php get_sidebar(); ?>


<?php get_footer(); ?>
