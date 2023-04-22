
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
				<div class="col-lg-12 col-12">
					<div class="post">
                  <div class="post-thumbnail"><a href="<?php the_permalink(); ?>">
                    <?php 
                      if(has_post_thumbnail()) {
                        the_post_thumbnail("large");
                      }
                    ?>
                  </a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">By&nbsp;<a href="#"><?php the_author(); ?></a>&nbsp;|  <?php echo get_the_date(); ?> |<?php comments_popup_link('No cmnts', 'one commnent', '% comments', 'cmnts', 'unavailable'); ?>
                    </div>
                  </div>
                  <div class="post-entry">
                    <?php the_content(); ?>
                  </div>
                </div>
				</div>
				<?php 
                endwhile;
              else : echo 'No Post'; 
              endif;
              ?>
              <h1>
              <?php $new_one_cmb2_chapters = get_post_meta( get_the_ID(), 'attached_cmb2_attached_posts', true );
                //print_r($new_one_cmb2_chapters);

                foreach($new_one_cmb2_chapters as $pch){
                    $new_one_chl = get_the_permalink($pch);
                    $new_one_cht = get_the_title($pch);

                   printf("<a href='%s'>%s</a><br/>",$new_one_chl,$new_one_cht);
                }?>
                </h1>
			</div>
			

			
		</div>
	</div>
</div>









<?php get_footer();?>