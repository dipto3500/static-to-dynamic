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
				
            
			