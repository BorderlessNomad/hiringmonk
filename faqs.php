<?php
$faqs = array();
$faqs[] = null;
$faqs[] = array(
	"q" => "How's HiringMonk different from other recruitment companies?",
	"a" => "(..and we thought you already knew the difference by now, anyway). HiringMonk is a unique blend and a link between Job boards and 
	conventional recruitment companies. We solve your pain of receiving irrelevant profiles and saving you the horror of expensive consulting charges.
	The recruiters @HiringMonk handle each operation separately resulting in better and quick hire. Moreover the pricing is such which allows every company (small or big)
	to try our services without any hesitation."
);
$faqs[] = array(
	"q" => "Why do i pay upfront?",
	"a" => "That's an entrepreneur talking, there are a couple of reasons for this, primarily the inexpensive cost of hiring dilutes the seriousness and secondly,
	it adds up more as a liability for us to perform better. Hence, with all our experience upfront commitment always gives a better result. But to ensure mutual
	interests we charge 50% of the fees on the commencement of the operation and 50% once you hire a candidate through HiringMonk."
);
$faqs[] = array(
	"q" => "You say upfront payment, but what if i don't hire? Whats the guarantee?",
	"a" => "True that, but something you should know: we have a hit ratio of 75 to 80% and the quality of resumes gets better and better after every feedback. Moreover,
	90% of our clients end-up recruiting at least one (and multiple, many a times). Yes, yes, we understand your apprehension, (what if i dont like anyone? 
	and I don't hire at all), in this case we have 100% Moneyback guarantee. "
);
$faqs[] = array(
	"q" => "How do we get CVs?",
	"a" => "Now, we are talking business, our skilled recruiters screen each and every application we receive and the ones which are relevant and are willing to work with 
	you are forwarded to your inbox in a batch of 2 to 5 cvs every alternate day."
);
$faqs[] = array(
	"q" => "How am i benefiting out of this?",
	"a" => "By now you must have realized, there's nothing to lose, but in terms of gaining, we take over all your hiring headache. All that you have to do is help us
	with your job description and hire the best. We post, we screen, we run a tele round of interview, we schedule interviews, we follow-up and YOU HIRE THE BEST!"
);
$faqs[] = array(
	"q" => "What is this probability check?",
	"a" => "As mentioned earlier, we care about your interest more. SO to be double sure of whether we can close the vacancy or not, the skilled recruiters @HiringMonk run
	a probability check to make sure that our delivery will be flawless and successful."
);
$faqs[] = array(
	"q" => "How many people can i hire through this?",
	"a" => "As many as you want. We undertake a guarantee that you will hire one candidate for sure. Rest you can hire as many as you want.
	PS. we don't charge even a single penny for extra hiring."
);
$faqs[] = array(
	"q" => "What is an operation?",
	"a" => "Every project we undertake we call it an operation, you see, it gives out recruiters a sense of mission to accomplish."
);
$faqs[] = array(
	"q" => "Is this all I have to pay?",
	"a" => "Goes without saying, The plan amount and the service tax. (which runs into government's pockets). Nothing apart from this."
);
$faqs[] = array(
	"q" => "Where's the poop?",
	"a" => "We knew this was running around in your mind. But honestly speaking, there's no poop. Our indigenous processes and professional recruiters make the job 10x easier
	and 5x cost effective. They say, when in doubt, take the next step! Try us."
);
/* Keep adding like this
$faqs[] = array(
	"q" => "",
	"a" => ""
);
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Proudly designed by Mayur Ahir (http://www.mayurahir.com) -->
		<meta charset="utf-8">
		<title>HiringMonk - HR recruitment consultancy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="hr recruitment consultancy">
		<meta name="author" content="prettystrap">
		<!-- Le styles -->
		<link href="assets/less/style.min.css" rel="stylesheet">
		<!--Import Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		        <![endif]-->
		<!-- Le fav  -->
		<link rel="shortcut icon" href="assets/ico/favicon.ico">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
		            if (typeof jQuery == 'undefined') {
		                document.write(unescape("%3Cscript src='assets/js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
		            }
		        </script>
		<!--Has to be in head, to lazy load images.
		        Minimize in production. -->
		<script src="assets/js/lazyload.js"></script>
		<script src="assets/js/jRespond.js"></script>
		<script src="assets/js/spin.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/lightbox.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Main js fail. -->
		<script src="assets/js/main.js"></script>
	</head>
	<body id="top" data-spy="scroll" data-target=".navbar">
		<div id="faqs" class="page color-4" style="padding-top: 0;">
			<div class="inner-page">
				<h2 class="page-headline">Frequently Asked Questions</h2>
			</div>
			<hr/>
			<div class="row-fluid inner-page" style="padding-top: 0;">
				<div class="span12">
					<!-- Accordions -->
					<div class="accordion" id="accordion">
						<?php for($i = 1; $i < count($faqs); $i++) : ?>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i; ?>">
									#<?php echo $i; ?> <?php echo $faqs[$i]['q']; ?> <i class="icon-plus"></i>
									</a>
								</div>
								<div id="collapse<?php echo $i; ?>" class="accordion-body collapse">
									<div class="accordion-inner">
										<p>
											 <?php echo $faqs[$i]['a']; ?>
										</p>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<!-- /Accordion -->
				</div>
			</div>
		</div>
	</body>
</html>