<?php get_header(); ?>




<div class="container">
    <ul class="timeline">
    <?php dynamic_sidebar( "timeline-dre" ); ?>
    <?php dynamic_sidebar( "timeline-esq" ); ?>
    <?php query_posts( array('cat=-14') );
      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<li <?php tlinverted(); ?> >
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="Publicat el <?php the_time('j \d\e\ F \d\e\ Y'); ?>" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              	<?php if ( has_post_format( 'image' )){ ?>
                  <div class="carousel">
                    <div class="carousel-inner">
                      <div class="item active">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php  if ( has_post_thumbnail() ) the_post_thumbnail('large', array('class' => 'img-responsive img-destacada')); ?></a>
                        <div class="carousel-caption peudefoto">
                          <h4><?php the_title();?></h4>
                          <?php my_excerpt(44);?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }else{
              			if ( has_post_thumbnail() ) the_post_thumbnail('timeline', array('class' => 'img-responsive img-destacada'));}?>  
            </div>
            <?php if (has_post_format( 'image' )){ }else{?>
            <div class="timeline-body">
            	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3 class="timeline-title"><?php the_title();?></h3></a>
              	<?php my_excerpt(60); ?>
            </div>
            <?php } ?>
            
            <div class="timeline-footer">
                <?php if ( is_user_logged_in() ) {?>
                    <a href="<?php print get_edit_post_link();?>"><button type="button" class="btn btn-danger pull-right">
			        <span class="glyphicon glyphicon-edit"></span> Edita </button></a>
			    <?php } ?>
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-share"></i> Comparteix <span class="caret"></span><span class="sr-only"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"> Facebook</a></li>
                        <li><a href="https://twitter.com/intent/tweet?text=<?php the_title();?>, <?php urlencode(the_permalink());?> Via @XiquetsCambrils" target="_blank"> Twitter</a></li>
                    </ul>
                </div>
            </div>
          </div>
        </li>
    <?php endwhile; endif; ?>

        
        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>

<?php get_footer(); ?>