    <?php get_header();?>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
    <h2>Thanos é o rei!</h2>
        </div>
    </div>
</div>

    <?php
	if ( have_posts()) {
	while ( have_posts()) {
	the_post();
	the_title();
	the_excerpt();
		}// fim do while
	} //fim do if
	?>
    <?php get_footer();?>