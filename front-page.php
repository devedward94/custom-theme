<?php 
get_header();
?>

<section class="atf-section">
    <div class="content-width">
        <div class="atf-content">
            <div class="atf-top-content">
                <div class="atf-line" data-aos="fade-down" data-aos-duration="2000"></div>
                <div class="atf-title">
                    <span><?php the_field('atf_top_heading'); ?></span>
                    <h1><?php the_field('atf_main_heading'); ?></h1>
                </div>
                <?php the_field('atf_content'); ?>
                <strong class="free-web"><?php the_field('atf_sub_heading'); ?></strong>
                <div class="atf-btn">
                    <a href="<?php the_field('get_started_link'); ?>" class="button">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- atf-section -->

<section class="solution-section-wrap">
    <div class="content-width">
        <h2>if your problem is big, <strong>our solution is bigger.</strong></h2>
        <div class="solution-artilce-wrap">
            <div class="solution-photo-wrap"></div>
			
			<?php 
			if(have_rows('add_solutions_properties')):
			 while(have_rows('add_solutions_properties')):
			    the_row();
			?>
            <div class="solution-artilce">
                <div class="solution-artilce-text">
                    <h3><?php the_sub_field('solution_title'); ?></h3>
                    <p><?php the_sub_field('solution_content'); ?></p>
                </div>
                <div class="solution-photo">
				<img src="<?php the_sub_field('solution_image'); ?>" alt="">
				</div>
            </div>
			<?php endwhile; endif; ?>
            <div class="bdr-left"></div>
        </div>
    </div>
</section><!-- solution-section-wrap -->

<section class="practice-area-wrap">
    <div class="content-width">
        <div class="practice-area">
            <ul>
                <li>
                    <a href="#">
                        <span>dedicated</span>
                        <div class="practice-title">
                            <h3>law firm SEO</h3>
                            <em>learn more</em>
                        </div>
                        <span class="practice-apricot"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>world-class</span>
                        <div class="practice-title">
                            <h3>website design</h3>
                            <em>learn more</em>
                        </div>
                        <span class="practice-apricot"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>professional</span>
                        <div class="practice-title">
                            <h3>content writing</h3>
                            <em>learn more</em>
                        </div>
                        <span class="practice-apricot"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>strategic</span>
                        <div class="practice-title">
                            <h3>paid advertising</h3>
                            <em>learn more</em>
                        </div>
                        <span class="practice-apricot"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>relevant</span>
                        <div class="practice-title">
                            <h3>social media</h3>
                            <em>learn more</em>
                        </div>
                        <span class="practice-apricot"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section><!-- practice-area-wrap -->

<section class="ebook-section-wrap">
    <div class="content-width">
        <div class="ebook-secton-inner">
            <div class="ebook-content">
                <div class="ebook-content-inner">
                    <div class="ebook-title">
                        <span>get the inside scoop with our</span>
                        <h2>law firm SEO ebook</h2>
                    </div>
                    <div class="ebook-form-wrap">
                        <p>
                            Is your website lacking the nutrition it needs to rank in Google? Our ebook gives you an SEO prescription that allows you to harness your law firm’s full potential.
                        </p>
                        <div class="ebook-form">
                            <div class="field-wrap">
                                <div class="field-contain">
                                    <input type="text" placeholder="Name" class="form-control">
                                </div>
                                <div class="field-contain">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="button">DOWNLOAD NOW</button>
                        </div>
                    </div>
                </div>
                <div class="blob-form rotate"></div>
            </div>
            <div class="ebook-right">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/ebook.png" alt="">
            </div>
        </div>
    </div>
</section><!-- ebook-section-wrap -->


<section class="testimonial-section-wrap">

    <div class="testimonial-section">
        <div class="testimonial-title for-mobile">
            <h2><span>a reputation for</span> excellence</h2>
            <p>
                Real law firms all around the country trust ApricotLaw with their online marketing. <strong>These are their stories.</strong>
            </p>
        </div>

        <div class="testimonial-left">
            <div class="slider-for">
                <div>
                    <div class="testimonial-photo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial/brok-testimonial.png" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonial-photo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial/ch-testimonial.png" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonial-photo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial/help-testimonial.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-right">

            <div class="testimonial-title for-desktop">
                <h2><span>a reputation for</span> excellence</h2>
                <p>
                    Real law firms all around the country trust ApricotLaw with their online marketing. <strong>These are their stories.</strong>
                </p>
            </div>

            <div class="slider-nav">
                <div>
                    <div class="testimonial-content">
                        <p>
                            I have to say that I’m extremely pleased with ApricotLaw. When I Google my keywords, I see my site towards the top of the results and sometimes multiple times on the first page. I’m getting calls and signing new clients every month as a direct result of their work.”
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-author-inner">
                                <strong>larry brock</strong>
                                <span>family law, california</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-content">
                        <p>
                            I have to say that I’m extremely pleased with ApricotLaw. When I Google my keywords, I see my site towards the top of the results and sometimes multiple times on the first page. I’m getting calls and signing new clients every month as a direct result of their work.”
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-author-inner">
                                <strong>larry brock</strong>
                                <span>family law, california</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonial-content">
                        <p>
                            I have to say that I’m extremely pleased with ApricotLaw. When I Google my keywords, I see my site towards the top of the results and sometimes multiple times on the first page. I’m getting calls and signing new clients every month as a direct result of their work.”
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-author-inner">
                                <strong>larry brock</strong>
                                <span>family law, california</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-button">
                <a href="#" class="button">READ OUR STORIES</a>
            </div>
        </div>
    </div>
    
    
</section><!-- testimonial-section-wrap -->


<section class="form-section-wrap">
    <div class="content-width">
        <div class="form-section-inner">
            <div class="form-content">
                <div class="form-text">
                    <span>request a free</span>
                    <strong>website analysis</strong>
                    <p>
                        Enter your information for a free video website analysis. We’ll uncover what’s holding your site back and let you know how you can rise to the top.
                    </p>
                </div>
            </div>
            <div class="form-section">
                
            </div>
        </div>
    </div>
</section><!-- form-section-wrap -->

<?php get_footer(); ?>