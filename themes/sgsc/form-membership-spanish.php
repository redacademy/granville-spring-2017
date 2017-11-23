<?php
/**
 * Template Name: Spanish Membership
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
        <p class="mem_info">La mission de South Granville Seniors Centre’s es trabajar juntos con adultos mayors de 55+ para colaborar con su bienestar, promover el companierismo, Amistad, diversidad y crecimiento personal.</p>
        <p  class="mem_info">Como miembro usted tienje derecho a:</p>
        <ul class="mem_benefits">
          <li>Libre acceso al area social</li>
          <li>Acceso a un especio seguro, respectable y amistoso</li>
          <li>Acceso a programas, eventos sociales, cursos</li>
          <li>Noticias y publicaciones</li>
          <li>Sevicios de salud</li>
          <li>Informacion y atencion de consejo</li>
          <li>Oportunidad de Voluntareado</li>
        </ul>
        <form action="<?php echo get_template_directory_uri() . '/form-submit.php' ?>" method="POST" class="member_signup_form" name="membership_form">
          <p class="form_section">Informacion de membresia:</p>
          <div class="form_defaults form_name">
            <div id="first_name">
            <label class="field_name">Nombre:</label>
              <input type="text" name="firstname" required>
            </div>
            <div id="last_name">
            <label class="field_name">Apellido:</label>
            <input type="text" name="lastname" required>
            </div>
          </div>
          <div class="form_defaults form_telephone">
            <div id="telephone">
             <label class="field_name">Teléfono:</label>
              <input type="text" pattern="^[0-9\-]*$" placeholder="604-555-5555" name="telephone" required>
            </div>
          </div>
          <div class="form_defaults form_email">
            <div id="email">
              <label class="field_name">Email:</label>
              <input placeholder="example@email.com" type="email" name="email" required>
            </div>
          </div>
          <div class="form_defaults form_address">
            <div id="address">
              <label class="field_name">Domicilio:</label>
              <input placeholder="Apt, House #, Street Name, City, Country, Postal Code" type="text" name="address"  required>
            </div>
          </div>
          <div class="form_defaults form_birthday">
            <div id="birthday">
            <label class="field_name">Compleaños:</label>
              <input type="date" name="birthday" required>
              <span class="small_print">*Incluiremos su nombre en nuestra lista de boletines de cumpleaños a menos que note lo contrario</span>
            </div>
          </div>
            
          <div class="form_defaults form_ethnicity">
            <div id="ethnicity">
             <label class="field_name">Origin Étnico:</label>
              <input type="text" name="ethnicity"  required>
              <span class="small_print">*Solo con fines estadísticos</span>
            </div>
          </div>  
          <div class="form_defaults form_gender">
            <div id="gender">
              <label class="field_name" for="gender">Género:</label>
              <input type ="radio" name="gender_radio" id="female_radio" value="Female" required/>
              <label class="field_name" for="female_radio">Mujer</label>
              <input type="radio" name="gender_radio" id="male_radio" value="Male"/>
              <label class="field_name" for="male_radio">Hombre</label>
            </div>
          </div>
          <div class="form_defaults form_member">
            <div class="new_memeber">
              <label class="field_name" for="new_member">Es Usted un Miembro Nuevo?:</label>
              <input type ="radio" name="new_member_radio" id="female_radio" value="Yes" required/>
              <label class="field_name" for="female_radio">Sí</label>
              <input type="radio" name="new_member_radio" id="male_radio" value="No"/>
              <label class="field_name" for="male_radio">No</label>
            </div>
          </div>
          <div class="form_defaults form_spanish">
            <div class="spanish_member">
              <label class="field_name" for="spanish_member">D Miembro del programa de Espanol?:</label>
              <input type ="radio" name="spanish_member_radio" id="female_radio" value="Yes" required/>
              <label class="field_name" for="female_radio">Sí</label>
              <input type="radio" name="spanish_member_radio" id="male_radio" value="No"/>
              <label class="field_name" for="male_radio">No</label>
            </div>
          </div>
        <p class="form_section">Contacto de Emergencia</p>
          <div class="form_defaults form_emerg_name">
            <div id="first_emerg_name">
             <label class="field_name">Nombre:</label>
              <input type="text" name="emergfirstname" required>
            </div>
            <div id="last_emerg_name">
              <label class="field_name">Apellido:</label>
              <input type="text" name="emerglastname" required>
            </div>
          </div>
          <div class="form_defaults form_emerg_telephone">
            <div id="emerg_telephone">
             <label class="field_name">Teléfono:</label>
             <input type="text" pattern="^[0-9\-]*$" placeholder="604-555-5555" type="text" name="emergtelephone" required>
            </div>
          </div>
          <div class="form_defaults form_emerg_email">
            <div id="emerg_email">
             <label class="field_name">Email:</label>
              <input placeholder="example@email.com" type="email" name="emergemail" required>
            </div>
          </div>
          <p class="form_section">Información Médica</p>
          <div class="form_defaults form_med_info">
            <div class="med_info">
              <label for="new_med_info">Padece Usted Alguna Condicón Méica Que Debamos Saber Caso de Emergencia?</label>
            </div>
          </div>
          <div class="form_defaults form_if_yes">
            <div id="if_yes">
              <label class="field_name">Si Si, Por Favor Específique:</label>
              <textarea name="health_concerns" type="text" id="input-message" placeholder="Preocupaciones de salud..."></textarea>
            </div>
          </div>
          <div class="form_defaults form_allergies">
            <div id="allergies">
              <label class="field_name">Alergias:</lable>
              <textarea name="allergies" type="text" id="input-message" placeholder="Alergias..."></textarea>
            </div>
          </div>
          <div class="form_defaults form_medications">
            <div id="medications">
              <label class="field_name">Medicamentos:</label>
              <textarea name="medications" type="text" id="input-message" placeholder="Medicamentos..."></textarea>
            </div>
          </div>
          <div class="form_defaults form_visit">
            <div class="home_visit">
              <label for="new_visit">Quiere usted que el comite de visita lo contacte en caso de que usted enferme o permanezca en casa?</label>
              <input type ="radio" name="home_visit" value="Yes" required/>
              <label for="female_radio">Sí</label>
              <input type="radio" name="home_visit" value="No"/>
              <label for="male_radio">No</label>
            </div> 
          </div>
          <div class="form_defaults form_submit">
            <div id="mem_submit">
              <span class="small_print">Comprendo que el SGSC utilizara mi informacion para brindarme servicio y para accesar mis contactos de emergencia accesibles, en caso de requerirse.</span>
              <span class="small_print">SGSC no dara mi informacion sin mi conocimiento y consentimiento y no intercambiara, rentara o vendera mi informacion.</span>
              <button name="submit" type="submit">Presentar la solicitud</button>
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
