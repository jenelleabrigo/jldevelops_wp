<?php get_header(); ?>

<div class="p-index" id="home">
  <div class="p-index__carousel">
    <div class="u-pc-layout">
      <div class="p-index__carousel__text">
        <p class="p-index__carousel__text1 u-font-serif">Hi there! <span class="p-index__carousel__text1__span1"><br class="u-sp-only">I am<span> <span class="p-index__carousel__text1__span2">JEN</span>.</p>
        <p class="p-index__carousel__text2">A developer that loves <br class="u-sp-only">designing and developing.<br> <span></span> Let me build your idea into reality for I am<br><span class="p-index__carousel__text2__span">YOUR DREAM DEVELOPER.</span></p>
        <a href="<?php echo home_url('/contact/')?>" class="c-button is-white u-font-serif">Get in touch!</a>
      </div>
    </div>
  </div>

<div class="p-index__techstack">
  <div class="u-layout">
  <h2 class="c-headline u-subheading u-font-serif">TECH STACK</h2>

    <div class="p-index__techstack__inner">
      <div class="p-index__techstack__inner__section">
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">Github</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/github.png" alt="github" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">Atom Editor</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/atom.png" alt="atom" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">Visual Studio</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/visual-studio.png" alt="visual-studio" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">HTML 5</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/html-5.png" alt="html5" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">CSS 3</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/css-3.png" alt="css3" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">SASS</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/sass.png" alt="sass" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">Javascript</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/js.png" alt="javascript" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">JQuery</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/jquery.png" alt="jquery" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">React</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/react.png" alt="react" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">Wordpress</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/wordpress.png" alt="wordpress" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">PHP</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/php.png" alt="php" class="p-index__techstack__inner__section__logo">
        </div>
        <div class="p-index__techstack__inner__section__name">
          <span class="p-index__techstack__inner__section__name__span u-font-serif">MySQL</span>
          <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/mysql.png" alt="mysql" class="p-index__techstack__inner__section__logo">
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="p-index__works" id="works">
    <div class="u-layout">
      <h2 class="c-headline u-subheading u-font-serif">WORKS</h2>

      <div class="p-index__works__inner">
        <div class="p-index__works__inner__item-container">
          <div class="p-index__works__inner__item">
            <div class="p-index__works__inner__item__img-container">
              <img src="<?php echo get_template_directory_uri();?>/data/img/works/img-sample.jpg" alt="project1" class="p-index__works__inner__item__img-container__img">
            </div>
            <div class="p-index__works__inner__item__text-container">
              <p class="p-index__works__inner__item__text-container__title u-text is-big u-font-serif">PROJECT 1</p>
              <p class="p-index__works__inner__item__text-container__description u-text is-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada posuere massa, non viverra tellus euismod a. Morbi consequat blandit sem, et luctus leo consequat id.</p>
            </div>
          </div>
          <div class="p-index__works__inner__modal">
            <span class="p-index__works__inner__modal__close">&times;</span>
            <div class="p-index__works__inner__modal__content">
              <h1>this is my modal 1</h1>
            </div>
          </div>
        </div>
        <div class="p-index__works__inner__item-container">
          <div class="p-index__works__inner__item">
            <div class="p-index__works__inner__item__img-container">
              <img src="<?php echo get_template_directory_uri();?>/data/img/works/img-sample.jpg" alt="project1" class="p-index__works__inner__item__img-container__img">
            </div>
            <div class="p-index__works__inner__item__text-container">
              <p class="p-index__works__inner__item__text-container__title u-text is-big u-font-serif">PROJECT 1</p>
              <p class="p-index__works__inner__item__text-container__description u-text is-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada posuere massa, non viverra tellus euismod a. Morbi consequat blandit sem, et luctus leo consequat id.</p>
            </div>
          </div>
          <div class="p-index__works__inner__modal">
            <span class="p-index__works__inner__modal__close">&times;</span>
            <div class="p-index__works__inner__modal__content">
              <h1>this is my modal 2</h1>
            </div>
          </div>
        </div>
        <div class="p-index__works__inner__item-container">
          <div class="p-index__works__inner__item">
            <div class="p-index__works__inner__item__img-container">
              <img src="<?php echo get_template_directory_uri();?>/data/img/works/img-sample.jpg" alt="project1" class="p-index__works__inner__item__img-container__img">
            </div>
            <div class="p-index__works__inner__item__text-container">
              <p class="p-index__works__inner__item__text-container__title u-text is-big u-font-serif">PROJECT 1</p>
              <p class="p-index__works__inner__item__text-container__description u-text is-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada posuere massa, non viverra tellus euismod a. Morbi consequat blandit sem, et luctus leo consequat id.</p>
            </div>
          </div>
          <div class="p-index__works__inner__modal">
            <span class="p-index__works__inner__modal__close">&times;</span>
            <div class="p-index__works__inner__modal__content">
              <h1>this is my modal 3</h1>
            </div>
          </div>
        </div>
        <div class="p-index__works__inner__item-container">
          <div class="p-index__works__inner__item">
            <div class="p-index__works__inner__item__img-container">
              <img src="<?php echo get_template_directory_uri();?>/data/img/works/img-sample.jpg" alt="project1" class="p-index__works__inner__item__img-container__img">
            </div>
            <div class="p-index__works__inner__item__text-container">
              <p class="p-index__works__inner__item__text-container__title u-text is-big u-font-serif">PROJECT 1</p>
              <p class="p-index__works__inner__item__text-container__description u-text is-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada posuere massa, non viverra tellus euismod a. Morbi consequat blandit sem, et luctus leo consequat id.</p>
            </div>
          </div>
          <div class="p-index__works__inner__modal">
            <span class="p-index__works__inner__modal__close">&times;</span>
            <div class="p-index__works__inner__modal__content">
              <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis elit sed ligula iaculis, in fringilla ipsum suscipit. In in elementum mauris. Etiam a porttitor ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc nec ante consequat, pharetra massa volutpat, facilisis augue. Donec volutpat urna eget enim sagittis, non lobortis nisi euismod. Nulla bibendum ligula sed lacinia posuere. Vestibulum interdum consequat aliquet. Vivamus convallis mollis metus, ac sollicitudin purus tempor vitae. Phasellus porta felis in dolor gravida ultrices. Maecenas id tincidunt arcu. Proin tincidunt ipsum quis leo vehicula tempor. Etiam varius ipsum nec urna iaculis facilisis.

Suspendisse commodo ultrices erat, et venenatis metus varius a. Praesent hendrerit eget lectus sed efficitur. Nam mattis fermentum placerat. Pellentesque ultrices sem sed pretium molestie. Curabitur quis tempor enim, sit amet blandit lacus. Mauris ut orci at arcu dapibus lacinia sodales eget tortor. Donec scelerisque eu dolor sed condimentum. Praesent rutrum eu orci a egestas.

Pellentesque et laoreet mauris. Donec non justo porttitor, porta erat id, dapibus mi. Donec ullamcorper quam sit amet nisi dignissim, vel lobortis nisi efficitur. Pellentesque at neque sem. Integer maximus purus non magna molestie maximus. Suspendisse placerat condimentum aliquet. Morbi egestas erat nec ultricies consequat. Aliquam turpis mauris, ullamcorper vel tellus eu, finibus imperdiet nunc. Integer in volutpat ex. Donec consectetur pellentesque commodo.

Curabitur placerat lobortis ultrices. Suspendisse potenti. Vestibulum ex elit, vestibulum id ultricies vel, egestas non sem. Proin vel varius turpis. Vestibulum pulvinar ligula vel pulvinar semper. Nam nisl ex, dictum ac felis eu, commodo accumsan ante. Quisque feugiat tellus nec est maximus, ut dapibus nibh tempus. Fusce auctor diam vitae lobortis dignissim. Nulla sit amet massa quis leo faucibus lobortis sit amet molestie enim. Quisque aliquam elementum sapien. Praesent dapibus laoreet ullamcorper.

Integer enim velit, rhoncus at sapien a, porttitor consectetur sapien. Maecenas sit amet tincidunt nisl. Maecenas nec dignissim metus, in iaculis nisi. Donec in mattis mi. Pellentesque sagittis, leo quis finibus pellentesque, metus neque faucibus est, id suscipit dui libero id dolor. Quisque pretium purus enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut aliquet, mauris quis interdum sollicitudin, lorem lorem consequat est, vitae interdum eros augue in dolor. Sed suscipit porttitor erat, eu posuere mauris rutrum eget. Proin accumsan maximus euismod. Sed tristique mi in velit cursus, vitae consequat sapien maximus. Morbi fermentum porttitor dui ac lobortis. Maecenas ac varius mi. Etiam pulvinar, ante et consectetur imperdiet, nulla augue pharetra tellus, vitae tristique libero justo eget ligula.</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-index__journey" id="journey">
    <div class="u-layout">
      <h2 class="c-headline is-white u-font-serif">JOURNEY</h2>

      <div class="p-index__journey__inner">
        <table class="p-index__journey__inner__table">
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">MARCH 2021</th>
            <td class="p-index__journey__inner__table__details">I started reading about MySQL in a well-known web development tutorial website w3schools. This was essential to me since we somehow use this tool in my work as Process Engineer in a korean manufacturing company. My reading became a habit by then so I also started reading about HTML and CSS out of curiosity about Web Developing in the same learning site.</td>
          </tr>
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">APRIL 2021</th>
            <td class="p-index__journey__inner__table__details">My interest for front-end web developing increased so I decided to learn a course through Udemy, a popular online course provider. The course was entitled Complete 2021 Web Development Bootcamp by Angela You. It was a slow-paced learning since I could only learn during my rest days.</td>
          </tr>
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">JUNE 2021</th>
            <td class="p-index__journey__inner__table__details">Created mini projects with the Udemy course I took. This of course only involves HTML and CSS. I still continued learning the course and eventually started JavaScript and jQuery. </td>
          </tr>
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">JULY 2021</th>
            <td class="p-index__journey__inner__table__details">Created project using vanilla javascript such as drum set with sounds when pressed either on screen or on keyboard.</td>
          </tr>
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">AUGUST 2021</th>
            <td class="p-index__journey__inner__table__details">Still with the course - reached Git, Node Express, NPM, then jumped to React introduction and guess what, I started job hunting! Took exams and got into a company. For 2weeks, I took training here but it was more focused on designing and not developing. On the good side, I was able to start learning Adobe Photoshop, Illustrator, and XD. </td>
          </tr>
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">SEPTEMBER 2021</th>
            <td class="p-index__journey__inner__table__details">Due to some reasons, I took another exam at another company and surprisingly passed! This is it, an opportunity to be a Web Developer and I was so happy to know that it is focused in Front End developing.</td>
          </tr>
          <tr class="p-index__journey__inner__table__row u-text is-small">
            <th class="p-index__journey__inner__table__date">OCTOBER 2021</th>
            <td class="p-index__journey__inner__table__details">Start of my Web Developer career!<br>Finally, I was really able to use what I learned - HTML, CSS and JS. In addition, we use PHP and Wordpress.</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
