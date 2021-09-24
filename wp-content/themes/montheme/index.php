<?php get_header(); ?>
 <!----animation titre--->
 <div class="title">
 <h1>Plant<br/>flawer</h1>
</div>
<!---fin animation---->
<!------remplacer contenu par les articls--->
<?php while (have_posts()) : the_post(); ?>

<article class="topcontent">

<div class="mainContent">

 <header>
   <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>
 </header>

 <!------afiche les imge--->
 <a href="<?php the_permalink(); ?>">
 <?php the_post_thumbnail('full'); ?> </a>


 <content><!---affiche le contenu--->

 
    <p>  <?php the_content('...read the full article'); ?> </p>

 </content>

</article>      
<?php endwhile; ?>

</div>


<?php get_footer(); ?>