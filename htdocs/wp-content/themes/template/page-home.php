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

    <section
      id="main-carousel"
      class="splide"
      aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
    >
      <div class="splide__track">
    		<ul class="splide__list">
    			<li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/jquery.png" alt="jquery" class="p-index__techstack__inner__section__logo">
    			</li>
    			<li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/react.png" alt="jquery" class="p-index__techstack__inner__section__logo">
    			</li>
    			<li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/js.png" alt="jquery" class="p-index__techstack__inner__section__logo">
    			</li>
    		</ul>
      </div>
    </section>
<section
  id="thumbnail-carousel"
  class="splide"
  aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
>
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
                <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/jquery.png" alt="jquery" class="p-index__techstack__inner__section__logo">
			</li>
			<li class="splide__slide">
                <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/react.png" alt="jquery" class="p-index__techstack__inner__section__logo">
			</li>
			<li class="splide__slide">
                <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/js.png" alt="jquery" class="p-index__techstack__inner__section__logo">
			</li>
		</ul>
  </div>
</section>

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
                        <span class="p-index__techstack__inner__section__name__span u-font-serif">Visual Studio Code</span>
                        <img src="<?php echo get_template_directory_uri()?>/data/img/common/techstack/vsc.png" alt="visual-studio" class="p-index__techstack__inner__section__logo">
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
                    <?php get_template_part('page', 'modal');?>
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
                    <?php get_template_part('page', 'modal');?>
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
                    <?php get_template_part('page', 'modal');?>
                </div>
                <div class="p-index__works__inner__item-container">
                    <div class="p-index__works__inner__item">
                        <div class="p-index__works__inner__item__img-container">
                            <img src="<?php echo get_template_directory_uri();?>/data/img/works/img-sample.jpg" alt="project1" class="p-index__works__inner__item__img-container__img">
                        </div>
                        <div class="p-index__works__inner__item__text-container">
                            <p class="p-index__works__inner__item__text-container__title u-text is-big u-font-serif">PROJECT modal test</p>
                            <p class="p-index__works__inner__item__text-container__description u-text is-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada posuere massa, non viverra tellus euismod a. Morbi consequat blandit sem, et luctus leo consequat id.</p>
                        </div>
                    </div>
                    <?php get_template_part('page', 'modal');?>
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
