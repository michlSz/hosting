<section id="footer" style="background-color: <?php the_field('footer_color');?>;">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6">
        <h3><?php echo get_field('tytul_stopki'); ?></h3>
        <p><?php echo get_field('opis_stopki'); ?></p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul> 
      </div>
      <div class="col-md-4 col-sm-6">
        <h3><?php echo get_field('tytul_adresu_stopki'); ?>:</h3>
        <ul class="list-unstyled">
          <li><p><strong><i class="fa fa-map-marker"></i> Aress:</strong><?php echo get_field('stopka_adres'); ?></p></li>
          <li><p><strong><i class="fa fa-envelope"></i> Email:</strong><?php echo get_field('stopka_email'); ?></p></li>
          <li><p><strong><i class="fa fa-phone"></i> Phone:</strong><?php echo get_field('stopka_telefon'); ?></p></li>
        </ul>
      </div>
  </div>
  <div class="row">
    <div class="col">
      <p>&copy; 2020</p>
    </div>
  </div>
</section>
<!-- END FOOTER -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>