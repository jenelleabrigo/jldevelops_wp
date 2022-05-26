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

    <?php get_template_part('page', 'works');?>

    <?php get_template_part('page', 'journey');?>

    </div>


<?php get_footer(); ?>
