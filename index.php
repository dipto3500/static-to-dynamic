
<?php get_header();?>

<div class="container">
	<h1>Our blog</h1>
	<div class="row">
		<div class="col-lg-12 col-12">
			
			<div class="row">
				<?php 
               if (have_posts()) :
                while (have_posts()) : the_post();
              ?>
				<div class="col-lg-4 col-12">
					<div class="post">
                  <div class="post-thumbnail"><a href="<?php the_permalink(); ?>">
                    <?php 
                      if(has_post_thumbnail()) {
                        the_post_thumbnail("thumbnail");
                      }
                    ?>
                  </a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">By&nbsp;<a href="#"><?php the_author(); ?></a>&nbsp;|  <?php echo get_the_date(); ?> |<?php comments_popup_link('No cmnts', 'one commnent', '% comments', 'cmnts', 'unavailable'); ?>
                    </div>
                  </div>
                  <div class="post-entry">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
				</div>
				<?php 
                endwhile;
              else : echo 'No Post'; 
              endif;
              ?>
			</div>
			<div class="pagination font-alt">
              <?php
                the_posts_pagination(array(
                  'screen_reader_text' => ' ',
                  'prev_text' => '<i class="fa fa-angle-left"></i>',
                  'next_text' => '<i class="fa fa-angle-right"></i>'
                ));
              ?>
            </div>

			
		</div>
	</div>
</div>









<?php get_footer();?>