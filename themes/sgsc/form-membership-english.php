<?php
/**
 * Template Name: English Membership
 *
 * @package SCSG_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="donate-btn">
          <a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
              <i class="fa fa-heart-o" aria-hidden="true">
                <p>Donate</p>
              </i>
          </a>
        </div>
      </header>
      <div class="entry-content">
        <p class="eng_mem_info">The South Granville Seniors Centre’s mission is to work together with adults 55+ to support their well-being in ways that promote friendship, diversity, and individual worth.</p>
        <p  class="eng_mem_info">As a member, you are entitled to:</p>
        <ul class="eng_mem_benefits">
          <li>Free access to the social drop-in area</li>
          <li>Access to a secure, friendly and respecful social environment</li>
          <li>Access to programs, drop–in activities, outings, social events and workshops at discount rate</li>
          <li>Newsletters and other related publications</li>
          <li>Health Services</li>
          <li>Information & Referral counseling</li>
          <li>Volunteer Opportunities</li>
        </ul>
        <form action="<?php echo get_template_directory_uri() . '/form-submit.php' ?>" method="POST" name="eng_mem_form" class="membership_form_english" >
          <p class="eng_form_section">Member Information:</p>
          <div class="eng_form_defaults eng_form_name">
            <div id="eng_first_name">
            <label class="eng_field_name">First Name:</label>
              <input type="text" name="firstname" required>
            </div>
            <div id="eng_last_name">
            <label class="eng_field_name">Last Name:</label>
            <input type="text" name="lastname" required>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_telephone">
            <div id="eng_telephone">
             <label class="eng_field_name">Telephone:</label>
              <input type="text" pattern="^[0-9\-]*$" placeholder="604-555-5555" name="telephone" required>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_email">
            <div id="eng_email">
              <label class="eng_field_name">Email Address:</label>
              <input placeholder="example@email.com" type="email" name="email" required>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_address">
            <div id="eng_address">
              <label class="eng_field_name">Address:</label>
              <input placeholder="Apt, House #, Street Name, City, Country, Postal Code" type="text" name="address"  required>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_birthday">
            <div id="eng_birthday">
            <label class="eng_field_name">Birthday:</label>
              <input type="date" name="birthday" required>
              <span class="eng_small_print">*We will include your name in our Birthday newsletter list unless you note otherwise</span>
            </div>
          </div>
            
          <div class="eng_form_defaults eng_form_ethnicity">
            <div id="eng_ethnicity">
             <label class="eng_field_name">Ethnicity:</label>
              <input type="text" name="ethnicity"  required>
              <span class="eng_small_print">*For statistical purposes only</span>
            </div>
          </div>  
          <div class="eng_form_defaults eng_form_gender">
            <div id="eng_gender">
              <label class="eng_field_name" for="eng_gender">Gender:</label>
              <input type ="radio" name="gender" id="female_radio" value="Female" required/>
              <label class="eng_field_name" for="female_radio">Female</label>
              <input type="radio" name="gender" id="male_radio" value="Male"/>
              <label class="eng_field_name" for="male_radio">Male</label>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_member">
            <div class="eng_newmmeber">
              <label class="eng_field_name" for="eng_new_member">Are You a New Member: </label>
              <input type ="radio" name="newmember" id="female_radio" value="Yes" required/>
              <label class="eng_field_name" for="female_radio">Yes</label>
              <input type="radio" name="newmember" id="male_radio" value="No"/>
              <label class="eng_field_name" for="male_radio">No</label>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_spanish">
            <div class="eng_spanish">
              <label class="eng_field_name" for="eng_spanish_member">Are You a Spanish Program Member?</label>
              <input type ="radio" name="spanishmember" id="female_radio" value="Yes" required/>
              <label class="eng_field_name" for="female_radio">Yes</label>
              <input type="radio" name="spanishmember" id="male_radio" value="No"/>
              <label class="eng_field_name" for="male_radio">No</label>
            </div>
          </div>
        <p class="eng_form_section">Emergency Contact</p>
          <div class="eng_form_defaults eng_form_emergname">
            <div id="eng_first_emergname">
             <label class="eng_field_name">First Name:</label>
              <input type="text" name="emergfirstname" required>
            </div>
            <div id="eng_last_emergname">
              <label class="eng_field_name">Last Name:</label>
              <input type="text" name="emerglastname" required>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_emergtelephone">
            <div id="eng_emergtelephone">
             <label class="eng_field_name">Telephone:</label>
             <input type="text" pattern="^[0-9\-]*$" placeholder="604-555-5555" type="text" name="emergtelephone" required>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_emergemail">
            <div id="eng_emergemail">
             <label class="eng_field_name">Email Address:</label>
              <input placeholder="example@email.com" type="email" name="emergemail" required>
            </div>
          </div>
          <p class="eng_form_section">Medical Information</p>
          <div class="eng_form_defaults eng_form_medinfo">
            <div class="eng_medinfo">
              <label for="eng_new_medinfo">Do you have any health concerns that we should know about in case of an emergency?</label>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_ifyes">
            <div id="eng_ifyes">
              <label class="eng_field_name">If Yes, Please Specify:</label>
              <textarea name="eng_healthconcerns" type="text" id="input-message" placeholder="Message"></textarea>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_allergies">
            <div id="eng_allergies">
              <label class="eng_field_name">Allergies:</lable>
              <textarea name="engallergies" type="text" id="input-message" placeholder="Allergies.."></textarea>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_medications">
            <div id="eng_medications">
              <label class="eng_field_name">Medications:</label>
              <textarea name="engmedications" type="text" id="input-message" placeholder="Medications..."></textarea>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_visit">
            <div class="eng_visit">
              <label for="eng_new_visit">Would you like the Visiting Committee to contact you if you become ill or housebound?</label>
              <input type ="radio" name="eng_visit" id="eng_new_visit" value="Yes" required/>
              <label for="female_radio">Yes</label>
              <input type="radio" name="eng_visit" id="eng_new_visit" value="No"/>
              <label for="male_radio">No</label>
            </div>
          </div>
          <div class="eng_form_defaults eng_form_submit">
            <div id="eng_submit">
              <span class="eng_small_print">I understand that SGSC will use my information to keep me up to date about their activities and to have emergency contact information accessible if need arises during an emergency.</span>
              <span class="eng_small_print">SGSC will not disclose my informa on without my consent and does not rent, sell, or trade their mailing list.</span>
              <button name="submit" type="submit">Submit Application</button>
            </div>
          </div>
        </form>
        <div class="about-back-btn">
          <a href="<?php echo esc_url( get_permalink (get_page_by_path('about'))) ?>">
            <p>Back</p>
          </a>
        </div>
      </div>
    </article>
    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
