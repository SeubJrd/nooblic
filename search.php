<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Nooblic
 */

get_header(); ?>

    <div class="page-template-listeArticles">
        <main id="event" class="header-correction">

            <section class="titre_page">
                <h1 class="souligne"><?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Résultats pour : %s', 'nooblic' ), '<span>' . get_search_query() . '</span>' );
                    ?></h1>
            </section>


            <div class="liste">

                <div class="grille">
                    <ul>

                        <?php if (have_posts()) :


                            while (have_posts()) :the_post(); ?>

                                <li>
                                    <a style="cursor: pointer" href="<?php the_permalink() ?>">

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

                        <?php else: ?>

                        <p>Aucun résultat trouvé pour votre rerche. Merci d'essayer à nouveau avec d'autres mots clés</p>

                        <?php endif; ?>



                    </ul>
                </div>
            </div>


        </main>
    </div>

<?php

get_footer();
