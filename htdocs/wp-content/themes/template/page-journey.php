<section class="p-index__journey" id="journey">
    <div class="u-layout">
        <h2 class="c-headline is-white u-font-serif">JOURNEY</h2>

        <div class="p-index__journey__inner">
            <table class="p-index__journey__inner__table">
                <?php

                if ( get_query_var('paged') ) {
                    $paged = get_query_var('paged');
                } else {
                    $paged = 1;
                }

                $args = array(
                    'post_type' => 'cp_journey',
                    'paged' => $paged,
                    'order' => 'ASC',
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()):
                     ?>
                     <?php while($wp_query->have_posts()): $wp_query->the_post();?>
                <tr class="p-index__journey__inner__table__row u-text is-small">
                    <th class="p-index__journey__inner__table__date"><?php the_field('date'); ?></th>
                    <td class="p-index__journey__inner__table__details"><?php the_field('story'); ?></td>
                </tr>
                <?php endwhile; endif; ?>
                <!-- <tr class="p-index__journey__inner__table__row u-text is-small">
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
                </tr> -->
            </table>
        </div>
    </div>
</section>
