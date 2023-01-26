<?php
/**
 * Heart Failure page template
 *
 * @author   TF
 * @version  1.0.0
 * @package  <Package>
 */

get_header();
?>

<section class="internal-hero-block">
  
    <div class="container">
      <div class="row row-internal-hero">
        <div class="col-md-5"></div>
        <div class="col-md-7 col-hero-text">
          <img src="/wp-content/themes/cytokinetics/assets/images/hero-text-heart-failure.svg" alt="">
        </div>
      </div>
    </div>
    
      <img src="/wp-content/themes/cytokinetics/assets/images/bg-mission-hero-gray.png" alt="" class="hero-image">
  
</section>

<section class="breadcrumbs-block bg-light-gray">
  <div class="container">
    <p><a href="/<?php echo get_post_field( 'post_name', $post->post_parent );?>"><?php echo get_the_title( wp_get_post_parent_id( get_the_ID() ) ); ?></a> / <?php the_title(); ?></p>
  </div>
</section>


<section class="video-content-block">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="/wp-content/themes/cytokinetics/assets/images/video-heart-failure.png" alt="">
      </div>
      <div class="col-md-6">
        <h2>Behind HF: The John Crofut Story</h2>
        <p>John is a father and veteran who lives with severe heart failure. This is John's perspective on how he continues to pursue his passions.</p>
        <p><a href="#" class="arrow-link icon-arrow-right"><span>Watch John's story</span></a></p>
      </div>
    </div>
  </div>
</section>


<section class="image-content-block">
	<div class="container">
    <h3>1 out of 9 deaths in the US can be attributed to heart failure<sup>1</sup></h3>
		<div class="row">
			<div class="col-md-6 col-right">
				<p>An estimated 6 million people in the US are living with heart failure—and that number is predicted to expand to more than 8 million Americans by 2030.<sup>1</sup> These skyrocketing numbers may be attributed to a number of factors—an aging population, the epidemics of diabetes and obesity, and medical advances that help people survive heart attacks but face higher risk for heart failure afterwards.<sup>2</sup></p>
				<p>Despite the name, heart failure doesn't mean the heart isn't working at all, it means the heart can't keep up with its workload. The heart pumps oxygen- and nutrient-rich blood to nourish the body's cells so the body can work as it should.<sup>3</sup></p>
			</div>
      <div class="col-md-6 col-left">
				<img src="/wp-content/themes/cytokinetics/assets/images/text-heart-failure-stat.svg" alt="">
			</div>
      <div class="col-md-12">
        <p>With heart failure, the heart becomes enlarged, thickened or rigid so that it becomes too weak or stiff to pump blood throughout the body, and it can't supply the cells with enough blood. This may be a result of dysfunction within the sarcomere, a complex mechanism of interacting proteins driving heart contraction.</p>
        <p>There are two major types of heart failure: <strong>heart failure with reduced ejection fraction (HFrEF)</strong> and <strong>heart failure with preserved ejection fraction (HFpEF)</strong>.<sup>4</sup></p>
        <p>People with heart failure may experience fatigue, shortness of breath, coughing, or fluid retention. Every day, they struggle with simple activities like walking, climbing stairs, or carrying things. Managing the disease is a challenge, which may be why it's the leading cause of hospitalization and readmission in people age 65 and older.<sup>5</sup></p>
      </div>
		</div>
	</div>
</section>



<section class="image-content-block bg-green-with-wave bg-white-row mb-0">
  <div class="container">
    <h2 class="lime text-center mb-5">Accessibility & Health Economics</h2>
    <div class="row">
      <div class="col-md-4">
        <img src="/wp-content/themes/cytokinetics/assets/images/graphic-sarcomere.png" alt="">
      </div>
      <div class="col-md-8">
        <p>It's not enough to discover and develop new medicines for patients; our job does not end there. We must also work to ensure that medicines are affordable and accessible for the patients who need them.</p>
        <p>Aligned with this view and with patients as our North Star, we plan to have a dedicated patient services hub with educational and financial support for patients who need potential medicines. Cytokinetics is committed to supporting patients and caregivers through reimbursement education, co-pay assistance where applicable, and comprehensive models for patient support so that those in need of our investigational medicines will be able to access it.</p>
      </div>
      <div class="col-md-12 mt-5">
      <p>We are also committed to ensuring that patients in underserved communities and at high risk for heart failure and worse outcomes receive education about the disease and treatment options. As part of our launch strategy, we plan to implement an equitable access initiative partnering with physicians, advocates, and non-profit organizations to bring education and awareness to Black and Latino patients.</p>

      </div>
    </div>

    <p class="text-center pt-5 pb-5"><a href="#" class="arrow-link icon-arrow-right-double-green-white"><span>Hypertrophic Cardiomyopathy (HCM)</span></a></p>
    
  </div>
</section>




<section class="references-block">
  <div class="container">
    <p>
      References
    </p>
    <ol>
      <li>Mozaffarian D, et al. Heart disease and stroke statistics-2016 update a report from the American Heart Association. Circulation. 2016.</li> 
      <li>Heart failure projected to increase dramatically, according to new statistics. American Heart Association. Available at <a href="https://www.heart.org/en/news/2018/05/01/heart-failure-projected-to-increase-dramatically-according-to-new-statistics" target="_blank">https://www.heart.org/en/news/2018/05/01/heart-failure-projected-to-increase-dramatically-according-to-new-statistics</a>. Accessed January 1,2023.</li>
      <li>Heart failure. American Heart Association. Available at <a href="https://www.heart.org/en/health-topics/heart-failure" target="_blank">https://www.heart.org/en/health-topics/heart-failure</a>. Accessed January 1, 2023.</li>
      <li>Types of Heart Failure. American Heart Association. <a href="https://www.heart.org/en/health-topics/heart-failure/what-is-heart-failure/types-of-heart-failure" target="_blank"></a>. Accessed August 17, 2020.
<a href="https://www.heart.org/en/health-topics/heart-failure/what-is-heart-failure/types-of-heart-failure" target="_blank"></a></li>
<li>Heart Failure | National Heart, Lung, and Blood Institute (NHLBI). Nhlbi.nih.gov. 2019. Available at: <a href="https://www.nhlbi.nih.gov/health-topics/heart-failure" target="_blank"></a>. Accessed March 22, 2019.</li>
<li>Savarese G, Lund LH. Global Public Health Burden of Heart Failure.Card Fail Rev. 2017;3(1):7-11. doi:10.15420/cfr.2016:25:2</li>
<li>Malik FI, Hartman JJ, Elias KA, et al. Cardiac myosin activation: a potential therapeutic approach for systolic heart failure. Science. 2011;331(6023):1439-1443.</li>
<li>Yancy CW, Jessup M, Bozkurt B, et al. 2013 ACCF/AHA Guideline for the Management of Heart Failure. Circulation. 2013;128(16):e240-e327.</li>
<li>Kass DA, Solaro RJ. Mechanisms and Use of Calcium-Sensitizing Agents in the Failing Heart. Circulation. 2006;113(2):305-315.</li>
<li>Psotka MA, Gottlieb SS, Francis GS, et al. Cardiac Calcitropes, Myotropes, and Mitotropes: JACC Review Topic of the Week. J Am Coll Cardiol. 2019;73(18):2345-2353.</li>
    </ol>
     
  </div>
</section>


<?php
get_footer();