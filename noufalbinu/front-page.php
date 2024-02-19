<?php require 'header.php'; ?>


<div class='banner'>

<div id='f1-container'>

<div class='bnr'>
<svg class="love" baseProfile="tiny" version="1.2" viewBox="0 0 5e3 4e3" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
	<path class="lovepath" stroke="#fff" d="m2937.1 2592c-1.43 0.43-2.99 0.71-4.42 1h-1096.5v-0.14h-14.39v-208.41c117.95 0.29 235.9 1.14 353.71 3.7 11.4 0.29 21.51-0.14 30.63-1.14h58.98v-139.6h227.92v139.6h64.53c16.81 0.85 37.32 1 62.68 1 80.77 0.29 161.54 2.56 242.17 0.14 64.53-1.99 106.13-44.45 103.56-102.42-2.71-61.68-38.04-99.15-98.86-99.57-21.37-0.14-42.88-0.29-64.25-0.43h-552v-317.53h-0.57c0.85-105.56 2.14-207.98-2.85-309.98-2.85-56.27-52.85-84.19-108.69-80.49-64.67 4.13-98.15 46.58-99.72 108.83-2.28 85.33 1.28 170.8 2.14 256.27 0.28 25.5 0 51 0 479.5h-217.67c2.56-446.02 0.57-494.17-1.71-542.17v-208.98c3.99-36.61 10.97-73.08 23.22-109.26 47.44-140.32 200.29-222.08 348.72-200.43 146.01 21.37 262.54 139.03 272.65 286.47 8.26 120.66 8.41 242.03 7.83 362.97-0.14 49.43 15.81 66.38 65.67 65.53 113.96-1.99 228.07-3.28 341.74 3.13 163.25 9.26 281.77 130.63 295.45 293.31 11.98 144.03-89.58 281.92-240.01 319.1z" fill="#fff"/>
</svg>


</div>

<div class="bx">
<div class='tagline'>

<h2 class='animated-text'>
            Hi! I'm Noufal a Freelance Web <br>
            <a href="" class="typewrite" data-period="2000" data-type='[ "Developer.", "Designer." ]'>
              <span class="wrap"></span>
              </a>
          </h2>
<p>I am an Indian guy with a nerdy side. Embracing technology in all its forms and expressions brings me immense joy. I have an insatiable thirst for knowledge, eagerly diving into new subjects every day, and fearlessly taking on fresh challenges..
</p><span class="dashicons dashicons-arrow-right-alt2"></span><br>
<a href='https://noufalbinu.com/portfolio/' class='anim-button' >My Portffolio </a>
</div>

</div></div></div>

<!-- MAIN CONTAINER -->
<div id='main-container'>


<div id="services"><h2>Latest Blog Posts</h2><div class='sc'>
<?php $args = array( 'posts_per_page' => 4, 'order' => 'DESC' );
$rp = new WP_Query( $args );
if($rp->have_posts()) :
while($rp->have_posts()) : $rp->the_post(); ?>
<div class='web'>
<div class='scub'>
<div class="excerpt-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( array(300, 200) );  } ?></div><h3>
<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></h3></a>

</div></div>
<?php endwhile; wp_reset_postdata(); endif;?>
</div>
</div>


            <div class="findme-container">
              <div class='welcome'>
                  <div class="second">
                    <div class="bxslider">
                    <div class='tstm-container'>
                        <b>Gaurav Sundaram
President, ProKonsul Consulting</b>
                        <p>"I found Noufal Binu through Upwork . He handled the project extremely well - there were multiple challenges with my website - Frequent website down, malware had to be removed . 
                          The job was done very smoothly and without fuss. Thank you for your work !"</p>
                        <b class="stars">★★★★★</b>
                     </div>
                     <div class='tstm-container'>
                        <b>Christina Strigas</b>
                        <p>"I am very happy with the work he did on my website. Excellent job. I would recommend him to anyone who is looking to improve or build a website."</p>
                        <b class="stars">★★★★★</b>
                     </div>
                     <div class='tstm-container'>
                        <b>Amritpal Kaur</b>
                        <p>"Noufal went above and beyond to finish the project successfully in a timely manner. He was also very responsive and made changes immediately. Will definetly hire again.Thanks"</p>
                        <b class="stars">★★★★★</b>
                     </div>
                     <div class='tstm-container'>
                        <b>Triken Studios</b>
                        <p>"Did a excellent work for me always .. Hired him in a lot of projects always happy and satisfied with the work.. will hire him in future too."</p>
                        <b class="stars">★★★★★</b>
                     </div>

                    </div>
                  </diV>
              </diV>
              <div class="findme">
                <h3>DO YOU HAVE A PROJECT?</h3>
                <b>That fits my skills?</b>
                <p>You can hire me through Upwork or Fiverr, I'm always accepting of long term & short term projects</p>
                <a href="https://www.upwork.com/freelancers/~01ff9bc58dec1f46b6'">Upwork</a>
                <a href="https://www.noufalbinu.com/contact'">Contact Me</a>
              </div>
            </div>

</div><!-- MAIN END--></div><!-- MAIN CONTAINER END-->



<?php require 'footer.php'; ?>