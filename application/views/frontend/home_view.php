<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dubai Escorts</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <?php $this->load->view('frontend/common/css') ?>
    </head>
    <body>
        <div class="main-box">
            <?php  $this->load->view('frontend/common/header') ?>
            <?php  $this->load->view('frontend/common/nav') ?>
            <div id="boxes">
                <div style="top: 199.5px; left: 551.5px; display:none;" id="dialog" class="window">
                    <div id="lorem">
                        <img src="<?= base_url('assets/frontend') ?>/images/window-banner.jpg" />
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-2"><a class="agree" style="color:#ca0404;" href="https://www.google.co.in/">I do not agree</a></div>
                        <div class="col-lg-6 p-2 text-center"><a href="http://dubaiescortsexy.com/" class="close agree">I agree</a></div>
                    </div>
                </div>
                <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display:none; opacity: 0.8;" id="mask"></div>
            </div>
            <main id="main">
                <section id="portfolio"  class="section-bg" >
                    <div class="container">
                        <div class="row portfolio-container">
                            <div class="col-lg-2 col-md-6 mb-4">
                                <div class=" left-bg">
                                    <h1><span><i class="fa fa-search"></i></span> Search</h1>
                                    <form action="#" method="" role="form" class="search" _lpchecked="1">
                                        <div class="form-group">
                                            <select id="country_select">
                                                <option value="0">Select Country</option>
                                                <?php foreach ($country_key as $key => $country_data) : ?>
                                                    <option value="<?= $country_data->id ?>"><?= $country_data->name ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select id="city_select">
                                                <option value="0">Select City</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="submit">Search</button>
                                        </div>
                                    </form>
                                    <?php foreach($banner_key as $key => $banner): ?>
                                    <div class="add-img"><a href="<?= $banner->url ?>" target="blank"><img src="<?= base_url('upload') ?>/banner/<?= $banner->image ?>"></a></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 m-0 pl-2 pr-2">
                                        <div class="heading">
                                            <h3>International VIP Escorts</h3>
                                            <a href="advertise-global-banner.html">Advertise here</a>
                                            <span><span><i class="fa fa-flag"></i></span> 92 Countries</span>
                                            <span><span><i class="fa fa-map-marker"></i></span> 943 Cites</span>
                                            <span><span><i class="fa fa-female"></i></span> 28.517 Escorts</span> 
                                            <span><span><i class="fa fa-users"></i></span>5.012 Agencies & Clubs</span>   
                                        </div>
                                    </div>
                                    <?php foreach ($our_site_key as $key => $our_site_data) : ?>
                                        <div class="col-lg-2 col-md-6 mb-4 pl-lg-2 pr-lg-2">
                                            <a href="<?= $our_site_data->website_url ?>" target="_blank">
                                                <div class="img-box">
                                                    <img style="width: 132px;height: 198px" src="<?= base_url('upload/our_site') ?>/<?= $our_site_data->image ?>" />
                                                    <div class="border-img">
                                                        <h2><?= $our_site_data->name ?></h2>
                                                        <p>Antwerpen , Age: 24 yrs</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="box-shadow"></div>
                                        </div>
                                    <?php endforeach  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <?php $this->load->view('frontend/common/footer') ?>
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <?php $this->load->view('frontend/common/js') ?>
        <script type="text/javascript">
            $( document ).ready(function() {
               
               $("#city_select").hide();
            });
        </script>
    </body>
</html>