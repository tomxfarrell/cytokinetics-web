<?php
/**
 * Science Behind Muscles page template
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
          <img src="/wp-content/themes/cytokinetics/assets/images/hero-text-science-behind-muscles.svg" alt="">
        </div>
      </div>
    </div>
    
      <img src="/wp-content/themes/cytokinetics/assets/images/bg-mission-hero.png" alt="" class="hero-image">
  
</section>

<section class="breadcrumbs-block">
  <div class="container">
    <p><a href="/<?php echo get_post_field( 'post_name', $post->post_parent );?>"><?php echo get_the_title( wp_get_post_parent_id( get_the_ID() ) ); ?></a> / <?php the_title(); ?></p>
  </div>
</section>

<section class="image-content-block mb-5">
	<div class="container">
    <h2>Muscle health is key</h2>
		<div class="row">
			<div class="col-md-6 col-left">
				<img src="/wp-content/themes/cytokinetics/assets/images/photo-muscle-health-fpo.png" alt="">
			</div>
			<div class="col-md-6 col-right">
				<h3>Muscles pump blood through the body, enable breathing, and more.</h3>
				<p>The more than 600 muscles in the body help with performing a myriad of functions, from involuntary ones like breathing and breaking and digesting food to voluntary ones such as walking or lifting items.1 Within the body, there are 3 types of muscles: skeletal, smooth, and cardiac. Muscles working as they should literally keep you alive—so it's essential to keep them performing optimally. </p>
			</div>
		</div>
	</div>
</section>


<section class="content-block">
  <div class="container">
    <p>When muscles don't perform optimally, the consequences may significantly impact quality of life. For instance, when the diaphragm, the muscle that supports movement of air in the lungs, is compromised, the result can be difficulty in breathing and eventually respiratory failure.2 Or, for the heart to function well, it relies on the ability of the cardiac muscle to contract and pump enough blood through the body. If the cardiac muscle can't do that, it can cause fatigue, shortness of breath, dizziness and fluid buildup.<sup>3</sup></p>
    <p>Certain diseases, such as <a href="#">heart failure</a> and <a href="#">ALS</a>, can reduce signaling between nerves and muscle or otherwise malfunction, causing muscle weakness and ultimately, diminished performance of vital muscle systems. If muscle function can be enhanced, the debilitating effect of these diseases may be lessened, helping patients experience a better quality of life. The focus is on keeping critical muscles contracting and relaxing properly.</p>
  </div>
</section>


<section class="image-content-block bg-green-with-wave bg-white-row">
  <div class="container">
    <h2 class="lime text-center mb-5">The Sarcomere</h2>
    <div class="row">
      <div class="col-md-4">
        <img src="/wp-content/themes/cytokinetics/assets/images/graphic-sarcomere.png" alt="">
      </div>
      <div class="col-md-8">
        <h3 class="navy-blue">The Fundamental Unit of Muscle Contractility</h3>
        <p>Cardiac muscle, like skeletal muscle, is made up of sarcomeres that allow contractions that pump blood throughout the body. The sarcomere is a molecular structure found in skeletal and cardiac muscles that allows heart muscle cells, or cardiac myocytes, to contract and generate force. Sarcomeres contain a motor protein called myosin, which powers the muscle to contract by binding to another protein called actin and contracting. When the myosin releases the actin, the muscle relaxes. This process is regulated by another protein called troponin.</p>
      </div>
      <div class="col-md-12 mt-5">
      <p>This importance of the vital function that the sarcomere performs can't be overemphasized. Sarcomere malfunctions, either through increased or decreased contractability, play a central role in heart failure with reduced ejection fraction (HFrEF) and hypertrophic cardiomyopathy (HCM).4,5 Therapies with the potential to enhance sarcomere function could dramatically change patient outcomes. </p>
      </div>
    </div>
    
  </div>
</section>


<section class="image-content-block mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-left">
        <img src="/wp-content/themes/cytokinetics/assets/images/mission-image-fpo.png" alt="">
			</div>
			<div class="col-md-6 col-right">
				<h2>Addressing an
unmet need</h2>
				<p>In HFrEF, current first-line therapies concentrate on relieving vasoconstriction, lowering blood pressure, reducing biological stress, and improving heart function with an indirect address on cardiac contractility.6-8 There are no approved medications specifically for HCM, merely those that help with symptom and complication management.9,10  This lack of focus on an important aspect of heart disease management demonstrates the need for therapies targeted at impacting muscle function and contractability.</p>
        <p>That's why at Cytokinetics, we're pioneering innovative therapies to market that can have life-changing effects for patients. We're exploring cardiac muscle activators and inhibitors that modulate heart function either by powering up or powering down cardiac muscle contractility and skeletal muscle activators that amplify the magnitude of skeletal muscle contraction. We're driven to using our expertise in this realm to bring real solutions to people whose lives are impacted by severe and debilitating muscle diseases. </p>
			</div>
		</div>
	</div>
</section>

<p class="text-center pb-5"><a href="#" class="arrow-link icon-arrow-right-double"><span>Heart Failure</span></a></p>

<section class="references-block">
  <div class="container">
    <p>
      References
    </p>
    <ol>
      <li>Muscle. Cleveland Clinic. Available at <a href="https://clevelandclinic.org/muscle" target="_blank">https://clevelandclinic.org/muscle</a>. Accessed </li>
      <li>Heart Failure | National Heart, Lung, and Blood Institute (NHLBI). Nhlbi.nih.gov. 2019. Available at: <a href="https://www.nhlbi.nih.gov/health-topics/heart-failure" target="_blank">https://www.nhlbi.nih.gov/health-topics/heart-failure</a>. Accessed March 22, 2019.</li>
      <li>Amyotrophic Lateral Sclerosis (ALS) Fact Sheet | National Institute of Neurological Disorders and Stroke. Ninds.nih.gov. 2019. Available at: <a href="https://www.ninds.nih.gov/Disorders/Patient-Caregiver-Education/Fact-Sheets/Amyotrophic-Lateral-Sclerosis-ALS-Fact-Sheet" target="_blank">https://www.ninds.nih.gov/Disorders/Patient-Caregiver-Education/Fact-Sheets/Amyotrophic-Lateral-Sclerosis-ALS-Fact-Sheet</a>. Accessed March 22, 2019. </li>
      <li>Malik FI, Morgan BP. Cardiac myosin activation part 1: from concept to clinic. J Mol Cell Cardiol. 2011;51(4):454-461. </li>
      <li>Konno T, Chang S, Seidman JG, Seidman CE. Genetics of Hypertrophic Cardiomyopathy. Curr OpinCardiol. 2010;25(3). </li>
      <li>Malik FI, Hartman JJ, Elias KA, et al. Cardiac myosin activation: a potential therapeutic approach for systolic heart failure. Science. 2011;331(6023):1439-1443. </li>
      <li>Yancy Clyde W., Jessup Mariell, Bozkurt Biykem, et al. 2013 ACCF/AHA Guideline for the Management of Heart Failure. Circulation. 2013;128(16):e240-e327.</li>
      <li>Malik FI, Morgan BP. Cardiac myosin activation part 1: from concept to clinic. J Mol Cell Cardiol. 2011;51(4):454-461.</li>
      <li>Gersh BJ, Maron BJ, Bonow RO, Dearani JA, Fifer MA, Link MS, …Yancy CW. Guideline for the Diagnosis and Treatment of Hypertrophic Cardiomyopathy. American College of Cardiology Foundation and the American Heart Association. 2011;2768.</li>
      <li>Liew AC, Vassiliou VS, Cooper R, Raphael CE. Hypertrophic Cardiomyopathy—Past, Present and Future. J Clin Med. 2017;6(12).</li>
    </ol>
     
  </div>
</section>


<?php
get_footer();