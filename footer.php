       <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>    
          <?php endif; ?>
       </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<footer class="blog-footer">
      <p>&copy <?php echo Date('Y'); ?> - <?php bloginfo('name') ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
</html>