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
        <p class="mem_info">The South Granville Seniors Centre’s mission is to work together with adults 55+ to support their well-being in ways that promote friendship, diversity, and individual worth.</p>
        <p  class="mem_info">As a member, you are entitled to:</p>
        <ul class="mem_benefits">
          <li>Free access to the social drop-in area</li>
          <li>Access to a secure, friendly and respecful social environment</li>
          <li>Access to programs, drop–in activities, outings, social events and workshops at discount rate</li>
          <li>Newsletters and other related publications</li>
          <li>Health Services</li>
          <li>Information & Referral counseling</li>
          <li>Volunteer Opportunities</li>
        </ul>
        <!-- TODO: for spanish form name="esp_membership_form" -->
        <form action="<?php echo get_template_directory_uri() . '/form-submit.php' ?>" method="POST" class="member_signup_form" name="membership_form">
          <p class="form_section">Member Information:</p>
          <div class="form_defaults form_name">
            <div id="first_name">
            <label class="field_name">First Name:</label>
              <input type="text" name="firstname" required>
            </div>
            <div id="last_name">
            <label class="field_name">Last Name:</label>
            <input type="text" name="lastname" required>
            </div>
          </div>
          <div class="form_defaults form_telephone">
            <div id="telephone">
             <label class="field_name">Telephone:</label>
              <input type="text" pattern="^[0-9\-]*$" placeholder="604-555-5555" name="telephone" required>
            </div>
          </div>
          <div class="form_defaults form_email">
            <div id="email">
              <label class="field_name">Email Address:</label>
              <input placeholder="example@email.com" type="email" name="email" required>
            </div>
          </div>
          <div class="form_defaults form_address">
            <div id="address">
              <label class="field_name">Address:</label>
              <input placeholder="Apt, House #, Street Name, City, Country, Postal Code" type="text" name="address"  required>
            </div>
          </div>
          <div class="form_defaults form_birthday">
            <div id="birthday">
            <label class="field_name">Birthday:</label>
              <input type="date" name="birthday" required>
              <span class="small_print">*We will include your name in our Birthday newsletter list unless you note otherwise</span>
            </div>
          </div>
            
          <div class="form_defaults form_ethnicity">
            <div id="ethnicity">
             <label class="field_name">Ethnicity:</label>
              <input type="text" name="ethnicity"  required>
              <span class="small_print">*For statistical purposes only</span>
            </div>
          </div>  
          <div class="form_defaults form_gender">
            <div id="gender">
              <label class="field_name" for="gender">Gender:</label>
              <input type ="radio" name="gender_radio" id="female_radio" value="Female" required/>
              <label class="field_name" for="female_radio">Female</label>
              <input type="radio" name="gender_radio" id="male_radio" value="Male"/>
              <label class="field_name" for="male_radio">Male</label>
            </div>
          </div>
          <div class="form_defaults form_member">
            <div class="new_memeber">
              <label class="field_name" for="new_member">Are You a New Member: </label>
              <input type ="radio" name="new_member_radio" id="female_radio" value="Yes" required/>
              <label class="field_name" for="female_radio">Yes</label>
              <input type="radio" name="new_member_radio" id="male_radio" value="No"/>
              <label class="field_name" for="male_radio">No</label>
            </div>
          </div>
          <div class="form_defaults form_spanish">
            <div class="spanish_member">
              <label class="field_name" for="spanish_member">Are You a Spanish Program Member?</label>
              <input type ="radio" name="spanish_member_radio" id="female_radio" value="Yes" required/>
              <label class="field_name" for="female_radio">Yes</label>
              <input type="radio" name="spanish_member_radio" id="male_radio" value="No"/>
              <label class="field_name" for="male_radio">No</label>
            </div>
          </div>
        <p class="form_section">Emergency Contact</p>
          <div class="form_defaults form_emerg_name">
            <div id="first_emerg_name">
             <label class="field_name">First Name:</label>
              <input type="text" name="emergfirstname" required>
            </div>
            <div id="last_emerg_name">
              <label class="field_name">Last Name:</label>
              <input type="text" name="emerglastname" required>
            </div>
          </div>
          <div class="form_defaults form_emerg_telephone">
            <div id="emerg_telephone">
             <label class="field_name">Telephone:</label>
             <input type="text" pattern="^[0-9\-]*$" placeholder="604-555-5555" type="text" name="emergtelephone" required>
            </div>
          </div>
          <div class="form_defaults form_emerg_email">
            <div id="emerg_email">
             <label class="field_name">Email Address:</label>
              <input placeholder="example@email.com" type="email" name="emergemail" required>
            </div>
          </div>
          <p class="form_section">Medical Information</p>
          <div class="form_defaults form_med_info">
            <div class="med_info">
              <label for="new_med_info">Do you have any health concerns that we should know about in case of an emergency?</label>
            </div>
          </div>
          <div class="form_defaults form_if_yes">
            <div id="if_yes">
              <label class="field_name">If Yes, Please Specify:</label>
              <textarea name="health_concerns" type="text" id="input-message" placeholder="Health Concerns..."></textarea>
            </div>
          </div>
          <div class="form_defaults form_allergies">
            <div id="allergies">
              <label class="field_name">Allergies:</lable>
              <textarea name="allergies" type="text" id="input-message" placeholder="Allergies..."></textarea>
            </div>
          </div>
          <div class="form_defaults form_medications">
            <div id="medications">
              <label class="field_name">Medications:</label>
              <textarea name="medications" type="text" id="input-message" placeholder="Medications..."></textarea>
            </div>
          </div>
          <div class="form_defaults form_visit">
            <div class="home_visit">
              <label for="new_visit">Would you like the Visiting Committee to contact you if you become ill or housebound?</label>
              <input type ="radio" name="home_visit" value="Yes" required/>
              <label for="female_radio">Yes</label>
              <input type="radio" name="home_visit" value="No"/>
              <label for="male_radio">No</label>
            </div> 
          </div>
          <div class="form_defaults form_submit">
            <div id="mem_submit">
              <span class="small_print">I understand that SGSC will use my information to keep me up to date about their activities and to have emergency contact information accessible if need arises during an emergency.</span>
              <span class="small_print">SGSC will not disclose my informa on without my consent and does not rent, sell, or trade their mailing list.</span>
              <button name="submit" type="submit">Submit Application</button>
            </div>
          </div>
        </form>
        <div class="about-back-btn">
          <a href="<?php echo esc_url( get_permalink (get_page_by_path('join-us'))) ?>">
            <p>Back</p>
          </a>
        </div>
      </div>
    </article>
    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
