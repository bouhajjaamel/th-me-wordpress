<?php get_header(); ?>

<!------remplacer contenu par les articls--->
<?php while (have_posts()) : the_post(); ?>


 <header>
   <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>
 </header>
 
 <!------afiche les imge--->
 <?php the_post_thumbnail('full'); ?>

 <content><!---affiche le contenu--->
    <p>  <?php the_content('...read the full article');?> </p>
    
  </content>
  <br>
  <hr>
  <!---commentaire dans l'article---->
  <?php comments_template(); ?>
</article>      
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
