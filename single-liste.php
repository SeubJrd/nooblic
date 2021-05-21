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
                if (has_post_thumbnail()) :
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID))[0];
                endif; ?-->

                <div class="liste-article"
                     style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">

                </div>


                <div id="fond-texte">

                    <!--Titre et résumé de l'article-->

                    <h2 class="soulignement"><?php the_title(); ?></h2>
                    <p class="resume"><?php $chaine = substr(get_the_excerpt(), 0, 120);
                        // on regarde ou se trouve le dernier espace dans la chaine
                        $espace = strrpos($chaine, " ");
                        // on prend la chaine de 0 au dernier espace et on ajoute ...
                        $chaine = substr($chaine, 0, $espace) . " [...]";
                        echo $chaine; ?></p>

                    <!--Barre en bas du résumé de l'article-->


                    <div class="donnees-articles">
                        <?php pvc_post_views(get_the_ID(), true); ?> <!--nombre de vues-->

                        <i class="fas fa-comments"></i>

                        <p class="post-views.entry-meta">
                            <?php $num_comments = get_comments_number();
                            echo $num_comments; ?> <!--nombre de commentaires-->
                        </p>
                        <div class="lire_la_suite">
                            <p class="interactions">Lire la suite</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>


    <?php endwhile; ?>

<?php endif; ?>

<!--
.page-template-listeArticles #event .grille ul {
display: flex;
flex-direction: row;
flex-wrap: wrap;
grid-template-columns: repeat(3, 1fr);
grid-auto-rows: auto;
grid-column-gap: 4vw;
grid-row-gap: 0vw;
margin-left: auto;
margin-right: auto;
padding: 2vh;
list-style-type: none;
width: 100%;
}
-->