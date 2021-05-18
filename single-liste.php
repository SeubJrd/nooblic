<?php

$args = array(
    'post_type' => 'post'
);
query_posts($args);

if (have_posts()) :


    while (have_posts()) :the_post(); ?>

        <li>
            <a style="cursor: pointer" href="<?php the_permalink() ?>">

                <!--?php $image = get_field('image-bulle');
                if (has_post_thumbnail(  )) :
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0];
                endif; ?-->

                <div class="liste-article"
                     style="background-image: url(<?php echo $image; ?>);">
                    <div class="articles">
                        <div id="fond-texte">
                            <h2><?php the_title(); ?></h2>
                            <p><?php $chaine = substr(get_the_excerpt(), 0, 150);
                                // on regarde ou se trouve le dernier espace dans la chaine
                                $espace = strrpos($chaine, " ");
                                // on prend la chaine de 0 au dernier espace et on ajoute ...
                                $chaine = substr($chaine, 0, $espace) . " [...]";
                                echo $chaine; ?>
                            </p>
                            <div class="donnees-articles">
                                <div class="nb_qqch">
                                    <img alt="logo oeil" src="<?php echo get_bloginfo('template_directory')?>/image/oeil.svg">
                                    <p class="interactions">icone commentaire</p>
                                    <p class="interactions">Nb de commentaires</p>
                                    <p class="interactions">icone tendance</p>
                                    <p class="interactions">Lire la suite</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </a>

        </li>


    <?php endwhile; ?>


<?php
endif;
?>
