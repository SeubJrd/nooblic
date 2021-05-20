<?php
/*
Template Name: listeArticles

ClÃ©ment
*/
?>

<?php
get_header();
?>

    <main id="event" class="header-correction">

        <section class="titre_page">
            <h1 class="souligne">Liste des Articles</h1>
        </section>


            <?php the_content() ?>


            <div class="liste">

                <div class="grille">
                    <ul>
                        <?php get_template_part('single', 'liste'); ?>
                    </ul>
                </div>
            </div>


    </main>


<?php
get_footer();
?>
