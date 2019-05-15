<?php get_header(); ?>

<body>
    <main>
        <section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
                <?the_content(); ?>

<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> by <?php the_author_posts_link(); ?></span> </p>


			</article>

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </section>

    </main>
</body>
