<footer>
<div class="footer-contents">
    
    <div class="social-icons">
      <a href="https://www.linkedin.com/in/yourprofile" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn">
      </a>
      <a href="mailto:your@email.com">
        <img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="Email">
      </a>
    </div>
   <ul>
      <li><a href="<?php echo home_url(); ?>">Home</a></li>
      <li><a href="<?php echo site_url('/projects/'); ?>">Work</a></li>
      <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
      <li><a href="<?php echo site_url('/resume'); ?>">Resume</a></li>
    </ul>
  </div>

<p>© <?php echo date('Y'); ?> Vy Le. All Rights Reserved.</p>
<?php wp_footer(); ?>
</body>
</footer>
</html>