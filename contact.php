<?php
/*
Template Name: Contact Form
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="entry">
				<div class="page-badge"></div>
				<h2><?php the_title(); ?></h2>
			 	<div class="entry-body">
					<?php the_content(''); ?>
					
					<!-- begin contact form -->
					<form name="contact" id="contact" action="http://formmail.dreamhost.com/cgi-bin/formmail.cgi" method="post">
						<p><label for="Name">Name:</label>
						<input name="Name" id="name" type="text" tabindex="1" value="" /></p>
						<p><label for="Email">Email Address:</label>
						<input name="email" id="email" type="text" tabindex="2" value="" /></p>
						<?php /* not sure if I want folks setting their own subjects, ya know?
						<p><label for="Subject">Subject:</label>
						<input name="subject" id="subject" type="text" tabindex="3" value="SB: Contact Form Submission" /></p>
						*/ ?>
						<input name="subject" id="subject" type="hidden" value="SB: Contact Form Submission" />
						<p><label for="Message">Message:</label>
						<textarea cols="30" name="Message" id="message" rows="10" tabindex="4"></textarea></p>
					
						<p>
						<script type="text/javascript">
						/* <![CDATA[ */
						function hivelogic_enkoder(){var kode=
						"kode=\";)'':)1-htgnel.edok(tArahc.edok?htgnel.edok<i(+x=edok})i(tArahc.edo"+
						"k+)1+i(tArahc.edok=+x{)2=+i;)1-htgnel.edok(<i;0=i(rof;''=x;\\\")''n(oi.j()"+
						"seerev.r')('itpl.sdekoe=od;kk\\\"\\\\do=e\\\\\\\\\\\"\\\\kode\\\\\\\\\\\\"+
						"\\\\\\\\\\\\\\\"\\\\)=\\\\\\\\;\\\"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"+
						"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"+
						"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"\\\\\\\\\\\\g\\\\\\\\\\\\\\\\o\\\\\\\\rr"+
						"t.aesnoblurupfselua@\\\\\\\\i\\\\\\\\\\\\\\\\m\\\\\\\\\\\\\\\\\\\\\\\\\\\\"+
						"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"\\\\\\\\\\\\=\\\\\\\\\\\\\\\\u\\\\"+
						"\\\\ae l\\\\\\\\v\\\"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"+
						"\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n\\\\\\\\itieep\\"+
						"\\\\\\c\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"+
						"\\\\\\\\\\\\\\\\\"\\\\\\\\\\\\=\\\\\\\\\\\\\\\\m\\\\\\\\nenad ie=dphtetyp "+
						"iu\\\\\\\\n\\\\\\\\\\\\\\\\<\\\\\\\\\\\\\\\\(\\\"\\\\\\\\\\\\t\\\\\\\\re.i"+
						"nwmtcedu;o\\\\\\\\\\\\\\\\\\\\\\\\\\\"\\\\kode=kode.split('').reverse().jo"+
						"in('')\\\\\\\\\\\"\\\\x;'=;'of(r=i;0<ik(do.eelgnht1-;)+i2={)+xk=do.ehcratA"+
						"i(1++)okedc.ahAr(t)ik}do=e+xi(k<do.eelgnhtk?do.ehcratAk(do.eelgnht1-:)'';)"+
						"=\\\"\\\\deko\\\"=edok\";kode=kode.split('').reverse().join('')"
						;var i,c,x;while(eval(kode));}hivelogic_enkoder();
						/* ]]> */
						</script>
					
						<input type=hidden name="redirect" value="http://superfluousbanter.org/contact/thankyou/">
						<input type="submit" id="submit" name="post" value="&nbsp;Send your message &raquo;&nbsp;" /></p>
					</form>
				</div>
			 </div><!-- .entry -->
		
		</div></div></div><!-- #content divs -->

		<?php get_sidebar(); ?>
		
		<?php endwhile; endif; ?>

	<?php get_footer(); ?>

<?php wp_footer(); ?>