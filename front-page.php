<?php
    get_header();
?>

<section id="home">

<div class="overlay"></div>

<div class="home-content-table">	
    <div class="home-content-tablecell">
        <div class="row">
            <div class="col-twelve">		   			
               
                       <h3 class="animate-intro">We Are Infinity.</h3>
                       <h1 class="animate-intro">
                     We Craft Stunning  <br>
                     Digital Experiences.
                       </h1>	

                       <div class="more animate-intro">
                           <a class="smoothscroll button stroke" href="#about">
                               Learn More
                           </a>
                       </div>							

               </div> <!-- end col-twelve --> 
        </div> <!-- end row --> 
    </div> <!-- end home-content-tablecell --> 		   
 </div> <!-- end home-content-table -->
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'social-menu', 
                    'container_class' => 'MediaSocial',
                    'menu_class' => 'home-social-list animate-intro',
                    'link_before' => '<span class="sr-text">',
                    'link_after' => '</span>',
                    ) 
                );
            ?>
 <div class="scrolldown">
     <a href="#about" class="scroll-icon smoothscroll">		
        Scroll Down		   	
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
     </a>
 </div>			

</section> <!-- end home -->

<!-- about
================================================== -->
<section id="about">

<div class="row about-wrap">
    <div class="col-full">

        <div class="about-profile-bg"></div>

         <div class="intro">
             <h3 class="animate-this">About Us</h3>
            <p class="lead animate-this"><span>Infinity</span> is a creative digital agency based in Manila, Philippines. We are composed of creative designers and experienced developers.</p>	
         </div>   

    </div> <!-- end col-full  -->
</div> <!-- end about-wrap  -->

</section> <!-- end about -->

<!-- about
================================================== -->
<section id="services">

<div class="overlay"></div>
<div class="gradient-overlay"></div>

<div class="row narrow section-intro with-bottom-sep animate-this">
    <div class="col-full">
        
            <h3>Services</h3>
           <h1>What We Do.</h1>
        
           <p class="lead">Lorem ipsum Elit ut consequat veniam eu nulla nulla reprehenderit reprehenderit sit velit in cupidatat ex aliquip ut cupidatat Excepteur tempor id irure sed dolore sint sunt voluptate ullamco nulla qui Duis qui culpa voluptate enim ea aute qui veniam in irure et nisi nostrud deserunt est officia minim.</p>
        
   </div> <!-- end col-full -->
</div> <!-- end row -->

<div class="row services-content">
    <div class="services-list block-1-2 block-tab-full group">
       <div class="bgrid service-item animate-this">	
           <span class="icon"><i class="icon-paint-brush"></i></span>            
        <div class="service-content">
             <h3 class="h05">Branding</h3>

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
              </p>	         		
        </div> 	         	 

         </div> <!-- end bgrid -->

         <div class="bgrid service-item animate-this">	

             <span class="icon"><i class="icon-earth"></i></span>                          

         <div class="service-content">	
             <h3 class="h05">Web Design</h3>  

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
              </p>	         		
         </div>	                          

        </div> <!-- end bgrid -->

        <div class="bgrid service-item animate-this">

            <span class="icon"><i class="icon-lego-block"></i></span>		            

         <div class="service-content">
             <h3 class="h05">Web Development</h3>

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                 </p>
         </div> 	            	               

        </div> <!-- end bgrid -->

         <div class="bgrid service-item animate-this">

             <span class="icon"><i class="icon-megaphone"></i></span>	              

         <div class="service-content">
             <h3 class="h05">Marketing</h3>

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
              </p>	         		
         </div>                

         </div> <!-- end bgrid -->			   

   </div> <!-- end services-list -->
    
</div> <!-- end services-content -->   			

</section> <!-- end services -->


<!-- portfolio
================================================== -->
<section id="portfolio">

<div class="intro-wrap">

    <div class="row narrow section-intro with-bottom-sep animate-this">
        <div class="col-twelve">
            <h3>Showcase</h3>
            <h1>See Our Featured Projects.</h1>  			
            
            <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>	   			
        </div>   		
    </div> <!-- end row section-intro -->   		

</div> <!-- end intro-wrap -->   	

<div class="row portfolio-content">
    <div class="col-twelve">
        <div id="folio-wrap" class="bricks-wrapper">					

            <div class="brick folio-item">
            <div class="item-wrap animate-this" data-src="<?php echo get_template_directory_uri()?>/images/portfolio/gallery/g-shutterbug.jpg" data-sub-html="#01" > 	
               <a href="#" class="overlay">
                   <img src="<?php echo get_template_directory_uri()?>/images/portfolio/shutterbug.jpg" alt="Skaterboy">	                     
                  <div class="item-text">
                      <span class="folio-types">
                                Web Development
                             </span>
                             <h3 class="folio-title">Shutterbug</h3>	     					   
                          </div>                                        
               </a>
               <a href="https://www.behance.net/" class='details-link' title="details">
                   <i class="icon-link"></i>
               </a>
            </div> <!-- end item-wrap -->
                 
                 <div id="01" class='hide'>
                     <h4>Shutterbug</h4>
                     <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                 </div>
             </div> <!-- end folio-item -->

             <div class="brick folio-item">
            <div class="item-wrap animate-this" data-src="<?php echo get_template_directory_uri()?>/images/portfolio/gallery/g-yellowwall.jpg" data-sub-html="#02"> 	
               <a href="#" class="overlay">
                   <img src="<?php echo get_template_directory_uri()?>/images/portfolio/yellowwall.jpg" alt="Shutterbug">	                     
                  <div class="item-text">
                      <span class="folio-types">
                                Marketing
                             </span>
                             <h3 class="folio-title">Yellow Wall</h3>  	     					   
                          </div>                                        
               </a>
               <a href="https://www.behance.net/" class='details-link' title="details">
                   <i class="icon-link"></i>
               </a>
            </div> <!-- end item-wrap -->

            <div id="02" class='hide'>
                     <h4>Yellow Wall</h4>
                     <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                 </div>	               
             </div> <!-- end folio-item -->

             <div class="brick folio-item">
            <div class="item-wrap animate-this" data-src="<?php echo get_template_directory_uri()?>/images/portfolio/gallery/g-architecture.jpg" data-sub-html="#03" >   	
               <a href="#" class="overlay">
                   <img src="<?php echo get_template_directory_uri()?>/images/portfolio/architecture.jpg" alt="Explore">	                     
                  <div class="item-text">	                     		     					    
                             <span class="folio-types">
                                Web Design
                             </span>
                             <h3 class="folio-title">Architecture</h3>
                          </div>                                        
               </a>
               <a href="https://www.behance.net/" class='details-link' title="details">
                   <i class="icon-link"></i>
               </a>
            </div> <!-- end item-wrap -->	

            <div id="03" class='hide'>
                     <h4>Architecture</h4>
                     <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                 </div>               
             </div> <!-- end folio-item -->

             <div class="brick folio-item">
            <div class="item-wrap animate-this"  data-src="<?php echo get_template_directory_uri()?>/images/portfolio/gallery/g-minimalismo.jpg"  data-sub-html="#04" >
               <a href="#" class="overlay">
                   <img src="<?php echo get_template_directory_uri()?>/images/portfolio/minimalismo.jpg" alt="Minimalismo">	                     
                  <div class="item-text">	     					    
                             <span class="folio-types">
                                Web Design
                             </span>
                             <h3 class="folio-title">Minimalismo</h3>
                          </div>                                        
               </a>
               <a href="https://www.behance.net/" class='details-link' title="details">
                   <i class="icon-link"></i>
               </a>
            </div> <!-- end item-wrap -->

            <div id="04" class='hide'>
                     <h4>Minimalismo</h4>
                     <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                 </div>  	               
             </div> <!-- end folio-item -->

             <div class="brick folio-item">
            <div class="item-wrap animate-this"  data-src="<?php echo get_template_directory_uri()?>/images/portfolio/gallery/g-skaterboy.jpg"  data-sub-html="#05" >  	
               <a href="#" class="overlay">
                   <img src="<?php echo get_template_directory_uri()?>/images/portfolio/skaterboy.jpg" alt="Bicycle">	                     
                  <div class="item-text">	     					    
                             <span class="folio-types">
                                Branding
                             </span>
                             <h3 class="folio-title">Skaterboy</h3>
                          </div>                                        
               </a>
               <a href="https://www.behance.net/" class='details-link' title="details">
                   <i class="icon-link"></i>
               </a>
            </div> <!-- end item-wrap -->

            <div id="05" class='hide'>
                     <h4>Skaterboy</h4>
                     <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                 </div>	               
             </div> <!-- end folio-item -->
        
             <div class="brick folio-item">
            <div class="item-wrap animate-this"  data-src="<?php echo get_template_directory_uri()?>/images/portfolio/gallery/g-salad.jpg"  data-sub-html="#06">     	
               <a href="#" class="overlay">
                   <img src="<?php echo get_template_directory_uri()?>/images/portfolio/salad.jpg" alt="Salad">	                     
                  <div class="item-text">	     					    
                             <span class="folio-types">
                                Branding
                             </span>
                             <h3 class="folio-title">Salad</h3>
                          </div>                                        
               </a>
               <a href="https://www.behance.net/" class='details-link' title="details">
                   <i class="icon-link"></i>
               </a>
            </div> <!-- end item-wrap -->

            <div id="06" class='hide'>
                     <h4>Salad</h4>
                     <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="www.behance.net">Details</a></p>
                 </div>	               
             </div> <!-- end folio-item -->   				

        </div> <!-- end folio-wrap -->
    </div> <!-- end twelve -->
</div> <!-- end portfolio-content -->   	

</section>  <!-- end portfolio -->


<!-- Testimonials Section
================================================== -->
<section id="testimonials">

<div class="row">
    <div class="col-twelve">
        <h2 class="animate-this">What They Say About Us.</h2>
    </div>   		
</div>   	

<div class="row flex-container">

  <div id="testimonial-slider" class="flex-slider animate-this">

     <ul class="slides">

        <li>
           <p>
           Your work is going to fill a large part of your life, and the only way to be truly satisfied is
           to do what you believe is great work. And the only way to do great work is to love what you do.
           If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
           </p> 

           <div class="testimonial-author">
                 <img src="<?php echo get_template_directory_uri()?>/images/avatars/user-02.jpg" alt="Author image">
                 <div class="author-info">
                     Steve Jobs
                     <span class="position">CEO, Apple.</span>
                 </div>
           </div>                 
          </li> <!-- end slide -->

        <li>
           <p>
           This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
           Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
           nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.    
           </p>

            <div class="testimonial-author">
                 <img src="<?php echo get_template_directory_uri()?>/images/avatars/user-03.jpg" alt="Author image">
                 <div class="author-info">
                     John Doe
                     <span>CEO, ABC Corp.</span>
                 </div>
           </div>                                         
        </li> <!-- end slide -->

     </ul> <!-- end slides -->

  </div> <!-- end testimonial-slider -->         
 
</div> <!-- end flex-container -->

</section> <!-- end testimonials -->


<!-- stats
================================================== -->
<section id="clients">

 <div class="row animate-this">
     <div class="col-twelve">

         <div class="client-lists owl-carousel">
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/mozilla.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/bower.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/codepen.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/envato.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/firefox.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/grunt.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/evernote.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/github.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/joomla.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/jQuery.png" alt=""></div>
               <div><img src="<?php echo get_template_directory_uri()?>/images/clients/wordpress.png" alt=""></div>
         </div>
         
     </div> <!-- end col-twelve -->
 </div> <!-- end row -->

</section> <!-- end clients -->


<!-- contact
================================================== -->
<section id="contact">

<div class="overlay"></div>

 <div class="row narrow section-intro with-bottom-sep animate-this">
    <div class="col-twelve">
        <h3>Contact</h3>
        <h1>Get In Touch.</h1>

        <p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
    </div> 
</div> <!-- end section-intro -->

<div class="row contact-content">

    <div class="col-seven tab-full animate-this">

        <h5>Send Us A Message</h5>

     <!-- form -->
     <form name="contactForm" id="contactForm" method="post">     			

        <div class="form-field">
                 <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
        </div>

        <div class="row">
              <div class="col-six tab-full">
                  <div class="form-field">
                      <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                  </div>		      			   
             </div>
             <div class="col-six tab-full">	            
                 <div class="form-field">
                     <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
               </div>		     				   
             </div>
        </div>
                                  
        <div class="form-field">
               <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
         </div> 

        <div class="form-field">
           <button class="submitform">Submit</button>

           <div id="submit-loader">
              <div class="text-loader">Sending...</div>                             
                  <div class="s-loader">
                           <div class="bounce1"></div>
                           <div class="bounce2"></div>
                           <div class="bounce3"></div>
                     </div>
                 </div>
        </div>

       </form> <!-- end form -->

     <!-- contact-warning -->
     <div id="message-warning"></div> 

     <!-- contact-success -->
       <div id="message-success">
        <i class="fa fa-check"></i>Your message was sent, thank you!<br>
       </div>

  </div> <!-- end col-seven --> 

  <div class="col-four tab-full contact-info end animate-this">

      <h5>Contact Information</h5>

      <div class="cinfo">
            <h6>Where to Find Us</h6><br><br>
            <p>
             1600 Amphitheatre Parkway<br><br>
             Mountain View, CA<br><br>
             94043 US
         </p>
        </div> <!-- end cinfo -->

        <div class="cinfo">
            <h6>Email Us At</h6><br><br>
            <p>
                someone@infinitysite.com<br><br>
                info@infinitysite.com			     
            </p>
        </div> <!-- end cinfo -->

        <div class="cinfo">
            <h6>Call Us At</h6><br><br>
            <p>
                Phone: (+63) 555 1212<br><br>
                Mobile: (+63) 555 0100<br><br>
                  Fax: (+63) 555 0101
            </p>
        </div>

  </div> <!-- end cinfo --> 

</div> <!-- end row contact-content -->
 
</section> <!-- end contact -->



<?php
    get_footer();
?>