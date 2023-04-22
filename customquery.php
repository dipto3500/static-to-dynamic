<?php

/* template name: Custom query */
?>
<?php get_header();?>

<div class="container">
	<h1>Our blog</h1>
	<div class="row">
		<div class="col-lg-12 col-12">
			
			<div class="row">
				<?php
                $new_one_arguments = array(
                    'post_type'      => 'book',
                    'meta_key'       => 'is_feature',
                    'meta_value'     => true,
                    'posts_per_page' => 3
                );

                $new_one_books = new WP_Query( $new_one_arguments );
                while ( $new_one_books->have_posts() ) {
                    $new_one_books->the_post();

                    get_template_part( "post_format", get_post_format() );
                }
                ?>
				
            
			</div>

			
		</div>
	</div>
</div>









<?php get_footer();?>