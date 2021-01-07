<?php /* Template Name: strona1 */ ?>


<?php get_header(); ?>
<!-- HEADER -->
<section id="header" style="background-image: url('<?php the_field('stars_bg'); ?>');" >
  <div id="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php the_field('logo'); ?>" class="img-fluid">
        <h2><?php echo get_field('tytul_strony_glownej'); ?></h2>
        <p class="lead"><?php echo get_field('opis_strony_glownej'); ?></p>
        <p class="d-none d-md-block"><?php echo get_field('podtytul_strony_glownej'); ?></p>
      </div>
      <div class="col-md-6 header-right d-none d-md-block">
          <p><?php echo get_field('opis_formularza'); ?></p>
          <form>
            <fieldset class="form-group">
              <label class="sr-only">name</label>
              <input type="text" class="form-control" placeholder="your name">
            </fieldset>
            <fieldset class="form-group">
              <label class="sr-only">name</label>
              <input type="email" class="form-control" placeholder="your email">
            </fieldset>
            <button type="submit" class="btn btn-outline-info btn-block">sign up</button>
          </form>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <a href="#social"><i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</section>
<!-- END HEADER -->





<!-- SOCIAL -->
<section id="social" style="background-color: <?php the_field('social_color');?>;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo get_field('tytul_contact'); ?></h2>
        <hr align="left" width="50%">
        <p><?php echo get_field('opis_contact'); ?></p>
      </div>
      <div class="col-md-6">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- END SOCIAL -->

<!-- WHO -->
<section id="who" style="background-color: <?php the_field('who_color');?>;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo get_field('tytul_kim_jestesmy'); ?></h2>
        <hr align="left" width="50%">
        <p class="lead"><?php echo get_field('opis_sekcji_kim_jestesmy'); ?></p>
        <button type="button" class="btn btn-who">Check out</button>
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="<?php the_field('what_image'); ?>">
      </div>
    </div>
  </div>
</section>
<!-- END WHO -->

<!-- WORK -->
<section id="work" style="background-color: <?php the_field('work_color');?>; ">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php echo get_field('ostatnie_prace'); ?></h2>
        <hr align="left" width="30%">
        <p><?php echo get_field('opis_ostatnie_prace'); ?></p>
      </div>
    </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Strona 1 ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>
          </div>
        </div>
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>

          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                  <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="work-img">
                <a href="#"><img class="card-img-top img-fluid" src="https://via.placeholder.com/253x168.png" alt="card img cap"></a>
                <div class="img-overlay"></div>
            </div>
            <div class="card-body">
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo ligula. In accumsan</p>
            </div>       
          </div>
      </div>
</div>
</div>
</section>
<!-- END WORK -->

<!-- WHY -->
<section id="why" style="background-color: <?php the_field('why_color');?>;">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2><?php echo get_field('dlaczego_my'); ?></h2>
        <hr width="30%">
        <p><?php echo get_field('opis_dlaczego_my'); ?></p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-4">
        <i class="fa fa-thumbs-up fa-3x"></i>
        <h3><?php echo get_field('tytul_satysfakcja_klienta'); ?></h3>
        <p><?php echo get_field('opis_satysfakcja_klienta'); ?></p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-line-chart fa-3x"></i>
        <h3><?php echo get_field('tytul_szybkie_rezultaty'); ?></h3>
        <p><?php echo get_field('opis_szybkie_rezultaty'); ?></p> 
      </div>
      <div class="col-md-4">
        <i class="fa fa-trophy fa-3x"></i>
        <h3><?php echo get_field('tytul_nagradzana_usluga'); ?></h3>
        <p><?php echo get_field('opis_nagradzana_usluga'); ?></p>
      </div>
    </div>
  </div>
</section>
<!-- END WHY -->

<!-- CUSTOMERS -->
<section id="customers" style="background-color: <?php the_field('customers_color');?>;">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h2><?php echo get_field('tytul_sekcji_rekomendacje'); ?></h2>
          <hr width="30%">
          <p><?php echo get_field('opis_sekcji_rekomendacje'); ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col"> 
            <div id="quotes" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <blockquote class="blockquote">
                      <p class="mb-0"><?php echo get_field('rekomendacja_1'); ?></p>
                      <footer class="blockquote-footer"><cite title="Source Title"><?php echo get_field('autor_1_rekomendacji'); ?></cite></footer>
                    </blockquote><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                      <p class="mb-0"><?php echo get_field('rekomendacja_2'); ?></p>
                      <footer class="blockquote-footer"><cite title="Source Title"><?php echo get_field('autor_2_rekomendacji'); ?></cite></footer>
                    </blockquote>    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>           </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                      <p class="mb-0"><?php echo get_field('rekomendacja_3'); ?></p>
                      <footer class="blockquote-footer"><cite title="Source Title"><?php echo get_field('autor_3_rekomendacji'); ?></cite></footer>
                    </blockquote>    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>           </div>
              </div>
            </div>
        </div>  
    </div>
</section>
<!-- END CUSTOMERS -->

<!-- PRICING -->
<section id="pricing" style="background-color: <?php the_field('pricing_color');?>;">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2><?php echo get_field('tytul_sekcji_cennik'); ?></h2>
        <hr width="30%">
        <p class="lead"><?php echo get_field('opis_sekcji_cennik'); ?></p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">BASIC</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>2</strong> profiles</li>
            <li class="list-group-item"><strong>$0/</strong> month</li>
            <li class="list-group-item"><strong>1GB</strong> storage</li>
            <li class="list-group-item"><strong>10GB</strong> bandwidth</li>
            <li class="list-group-item"><strong>1</strong>FTP account</li>
            <li class="list-group-item"><strong>Website</strong>integration</li>
            <li class="list-group-item"><strong>Basic</strong>customisation</li>
            <li class="list-group-item"><strong>Email</strong>support</li>
          </ul>
          <div class="card-body">
            <button type="button" class="btn btn-outline-info btn-block">SIGN UP</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header standard">STANDARD</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>5</strong> profiles</li>
            <li class="list-group-item"><strong>$29/</strong> month</li>
            <li class="list-group-item"><strong>2GB</strong> storage</li>
            <li class="list-group-item"><strong>50GB</strong> bandwidth</li>
            <li class="list-group-item"><strong>5</strong>FTP account</li>
            <li class="list-group-item"><strong>Website</strong>integration</li>
            <li class="list-group-item"><strong>Basic</strong>customisation</li>
            <li class="list-group-item"><strong>Email</strong>support</li>
          </ul>
          <div class="card-body">
            <button type="button" class="btn btn-outline-info btn-block">SIGN UP</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">BASIC</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>50</strong> profiles</li>
            <li class="list-group-item"><strong>$49/</strong> month</li>
            <li class="list-group-item"><strong>5GB</strong> storage</li>
            <li class="list-group-item"><strong>100GB</strong> bandwidth</li>
            <li class="list-group-item"><strong>20</strong>FTP account</li>
            <li class="list-group-item"><strong>Website</strong>integration</li>
            <li class="list-group-item"><strong>Basic</strong>customisation</li>
            <li class="list-group-item"><strong>Email</strong>support</li>
          </ul>
          <div class="card-body">
            <button type="button" class="btn btn-outline-info btn-block">SIGN UP</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END PRICING -->

<!-- CONTACT FORM -->
<section id="contact" style="background-color: <?php the_field('contact_color');?>;">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2><?php echo get_field('tytul_sekcji_kontakt'); ?></h2>
        <hr width="30%">
        <p><?php echo get_field('opis_sekcji_kontakt'); ?>:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <form>
          <fieldset class="form-group"><input type="email" class="form-control font-control-sm" id="email" placeholder="email..."></fieldset>
          <fieldset class="form-group"><input type="text" class="form-control font-control-sm" id="name" placeholder="name..."></fieldset>
          <fieldset class="form-group"><input type="text" class="form-control font-control-sm" id="subject" placeholder="subject..."></fieldset>
          <fieldset class="form-group"><textarea class="form-control font-control-sm" id="message" placeholder="message..." rows="3"></textarea></fieldset>

          <button type="submit" class="btn btn-outline-info btn-block">submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- END CONTACT FORM -->

<!-- FOOTER -->
<?php get_footer(); ?>