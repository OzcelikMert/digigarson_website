 <!-- Contact -->
 <div id="contact" class="form t-bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo $Contact_title; ?></h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"><?php echo $Contact_title_comment; ?></li>
                        <li><i class="fas fa-map-marker-alt"></i><a href="https://maps.google.com/?q=41.000824,28.8711192" target="_blank"><?php echo $Contact_adress_title;?></a></li>
                        <li><i class="fas fa-phone"></i><a class="blue" href="tel:+90 850 304 5590">+90 (850) 304 55 90</a></li>
                        <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:info@digigarson.com.tr">info@digigarson.com.tr</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname"><?php echo $Contact_name_title;?></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail"><?php echo $Contact_email_title;?></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="tel" pattern="([0]{1}[0-9]{3}[0-9]{3}[0-9]{4})" class="form-control-input" id="ctel" required>
                            <label class="label-control" for="ctel"><?php echo $Contact_tel_title;?></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="csubject" required>
                            <label class="label-control" for="csubject"><?php echo $Contact_subject_title;?></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage"><?php echo $Contact_message_title;?></label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required> <?php echo $Contact_checkbox_content;?> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                             <input type="hidden" id="success_message" value="<?php echo $success_message; ?>">
                             <input type="hidden" id="main_error_message" value="<?php echo $main_error_message; ?>">
                            <button type="submit" class="form-control-submit-button"><?php echo $Contact_button_title; ?></button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of contact -->