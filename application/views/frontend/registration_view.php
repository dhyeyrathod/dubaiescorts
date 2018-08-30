<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Dubai Escorts</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicons -->
      <?php $this->load->view('frontend/common/css') ?>
   </head>
   <body>
      <div class="container main-box">
         <?php $this->load->view('frontend/common/header') ?>
         <?php $this->load->view('frontend/common/nav') ?>
         <div class="container">
            <section id="portfolio"  class="section-bg" >
               <div class="container">
                  <div class="row portfolio-container">
                     <div class="col-lg-2 col-md-6 mb-4">
                        <div class=" left-bg">
                           <h1><span><i class="fa fa-search"></i></span> Search</h1>
                           <form action="" method="" role="form" class="search" _lpchecked="1">
                              <div class="form-group">
                                 <select>
                                    <option>Select Country</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <select>
                                    <option>Select City</option>
                                 </select>
                              </div>
                              <div class="text-center">
                                 <button type="submit" class="submit">Search</button>
                              </div>
                           </form>
                           <div class="add-img"><a href="http://lovelondonescorts.com/" target="blank"><img src="<?= base_url('assets/frontend/')?>images/d-1.gif"></a></div>
                           <div class="add-img"><a href="http://www.twistsam.com/" target="blank"><img src="<?= base_url('assets/frontend/')?>images/twistsam.gif"></a></div>
                           <div class="add-img"><a href="http://escortsfame.com/" target="blank"><img src="<?= base_url('assets/frontend/')?>images/d-6.gif"></a></div>
                           <div class="add-img"><a href="http://bestwebdirectory1.com/" target="blank"><img src="<?= base_url('assets/frontend/')?>images/d-3.gif"></a></div>
                        </div>
                     </div>
                     <div class="col-lg-10 col-md-6">
                        <div class="row">
                           <div class="col-lg-12 col-md-6 m-0 pl-2 pr-2">
                              <div class="heading">
                                 <h3>Create and activate your listing in 5 minutes!</h3>
                                 <span>To contact Dubai Sexi please write an email in English below</span>   
                              </div>
                           </div>
                           
                           <div class="col-lg-12 col-md-6 m-0 pl-2 pr-2">
                              <?php if($this->session->flashdata('registration_success')): ?>
                              <div class="alert alert-success">
                                <strong>Success!</strong> <?= $this->session->flashdata('registration_success');?>
                              </div>
                              <?php endif; ?>
                              <?php if($this->session->flashdata('registration_error')): ?>
                              <div class="alert alert-danger">
                                <strong>Warning!</strong> <?= $this->session->flashdata('registration_error');?>
                              </div>
                              <?php endif; ?>
                              <?= form_open('registration/process', array('class' => 'registration row')) ?>
                              
                                 <div class="col-lg-12 pt-3 pb-3">
                                    <h5><span class="step-number-circle"> 1 </span> Please fill in your details here</h5>
                                 </div>

                                 <div class="col-lg-4 pt-3 pb-3">
                                    <h5>General information</h5>
                                 </div>
                                 <div class="col-lg-8 pt-3 pb-3"></div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b> Name</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3"><input type="text" name="name" value="" />
                                    <?php if($this->session->flashdata('name_error')): ?>
                                       <span><?= $this->session->flashdata('name_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3">
                                    <label><b> Email (will not show in your listing)</b></label>
                                 </div>
                                 <div class="col-lg-8 pt-3 pb-3"><input type="text" name="email" value="" />
                                    <?php if($this->session->flashdata('email_error')): ?>
                                       <span><?= $this->session->flashdata('email_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b> Telephone</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3"><input type="text" name="telephone" value="" />
                                    <?php if($this->session->flashdata('telephone_error')): ?>
                                       <span><?= $this->session->flashdata('telephone_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b> Website</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3"><input type="text" name="website" value="" />
                                    <?php if($this->session->flashdata('website_error')): ?>
                                       <span><?= $this->session->flashdata('website_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b>Provider type</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <select name="provider_type" >
                                       <option value="">-- Select --</option>
                                       <option value="Club">Club</option>
                                       <option value="Escort Agency">Escort Agency</option>
                                       <option value="Escort (Independent)">Escort (Independent)</option>
                                       <option value="Other">Other</option>
                                    </select>
                                    <?php if($this->session->flashdata('provider_type_error')): ?>
                                       <span><?= $this->session->flashdata('provider_type_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b>Gender</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <select name="gender" >
                                       <option value="">-- Select --</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Shemale / Transsexual">Shemale / Transsexual</option>
                                    </select>
                                    <?php if($this->session->flashdata('gender_error')): ?>
                                       <span><?= $this->session->flashdata('gender_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b>Sexual orientation</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <select name="sexual_orientation" >
                                       <option value="">-- Select --</option>
                                       <option class="level-0" value="Straight">Straight</option>
                                       <option class="level-0" value="Gay">Gay</option>
                                       <option class="level-0" value="Bisexual">Bisexual</option>
                                    </select>
                                    <?php if($this->session->flashdata('sexual_orientation_error')): ?>
                                       <span><?= $this->session->flashdata('sexual_orientation_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-12 pt-3 pb-3">
                                    <h5>Location</h5>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b>Country </b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <select name="country" >
                                       <option value="">-- Select country --</option>
                                       <option class="level-0" value="1">Canada</option>
                                       <option class="level-0" value="2">United States</option>
                                    </select>
                                    <?php if($this->session->flashdata('country_error')): ?>
                                       <span><?= $this->session->flashdata('country_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b>State (USA only)</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <select name="state" >
                                       <option value="">-- Select State --</option>
                                       <option class="level-0" value="1">Canada</option>
                                       <option class="level-0" value="2">United States</option>
                                    </select>
                                    <?php if($this->session->flashdata('state_error')): ?>
                                       <span><?= $this->session->flashdata('state_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3"><label><b>City area</b></label></div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <select name="city" >
                                       <option value="">-- Select City --</option>
                                       <option class="level-0" value="1">Canada</option>
                                       <option class="level-0" value="2">United States</option>
                                    </select>
                                    <?php if($this->session->flashdata('city_error')): ?>
                                       <span><?= $this->session->flashdata('city_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-lg-4 pt-3 pb-3">
                                    <label><b>Description</b></label>
                                    <p>Write a short introduction about you and the services you supply </p>
                                 </div>
                                 <div class="col-lg-8 pt-3 pb-3">
                                    <textarea name="description"  class="textarea longtextarea" rows="7"></textarea>
                                    <?php if($this->session->flashdata('description_error')): ?>
                                       <span><?= $this->session->flashdata('description_error');?></span>
                                    <?php endif; ?>
                                 </div>
                                 <div class="col-md-4 pt-1 pb-1"></div>
                                 <div class="col-md-8 pt-1 pb-1 mb-4">
                                    <!-- <button type="button" name="submit" class="button">Next</button> -->
                                    <input type="submit" value="Next" name="submit" class="button">
                                 </div>
                              
                              <?= form_close() ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <!--==========================
            Footer
            ============================-->
         <?php $this->load->view('frontend/common/footer') ?>
         <!-- #footer --> 
         <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      </div>
      <?php $this->load->view('frontend/common/js') ?>
   </body>
</html>