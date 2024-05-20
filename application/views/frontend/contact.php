</div>
<div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="contact_taital_main">
                     <h1 class="contact_taital">Requeste A Call Back</h1>
                     <hr class="contact_border_main">
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mail_section map_form_container">
                        <form action="<?php echo site_url('Contact/contact_details'); ?>" method="POST">
                        <input type="text" class="mail_text" placeholder="Name" name="name">
                        <input type="text" class="mail_text" placeholder="Phone Number" name="phone_no"> 
                        <input type="text" class="mail_text" placeholder="Email" name="email">
                        <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"></textarea>
                        <div class="btn_main">
                          <input type="submit" class="send_bt active" value="Send Now">
                           <div class="map_bt"><a href="#" id="showMap">Map</a></div>
                        </div>
                        </form>
                        <div class="map_main map_container">
                           <div class="map-responsive">
                              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="368" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                               <div class="btn_main">
                                 <div class="map_bt d-flex justify-content-center w-100 map_center"><a href="#" id="showForm">Form</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="contact_img"><img src="<?php echo base_url(); ?>assets/images/contact-img.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
