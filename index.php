<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ms
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (have_posts()):

		if (is_home() && !is_front_page()):
			?>
			<header class="blog-page__header">
				<h1>Witaj na naszym blogu</h1>
				<p>Tutaj znajdziesz nasze publikacje, w tym porady i aktualności ze świata merchandisingu, wyprzedaży, a także
					aktualności <br>
					ze strony zespołu oraz informacje <br>
					o naszej działalności. </p>
				<span>Zapraszamy do lektury!</span>
			</header>
			<?php
		endif;
		?>
		<div class="post-list">
			<div class="desktop-blog-page-header">
				<h1>Witaj<br>na naszym<br>blogu</h1>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="123px"
					height="25px">
					<image x="0px" y="0px" width="123px" height="25px"
						xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAAZCAMAAAAmJaEcAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA81BMVEUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyX///+bWGi0AAAAT3RSTlMAagT50UApt6ceUdz1ewn0uCrQjA/u5mIBFJb9xzYxw50XWe9yDIbVVO1sPM/7jxAZov7ALXHwWtP6pr0GdPPjV0OIHam5J3jhUtmECrYkEQRPSQAAAAFiS0dEUONuTLwAAAAHdElNRQfnBxgTATm4ZoaaAAAAuklEQVRIx8XVRxaCQBAE0IERJQgGFFHMijkgZkXMOcz9b+MBdE3Vsjf/dS26CQkmHB8Q9Cc0JMDscISJEkyXlaiqoXBNjSkybHVJZPEETBeSVE+hcJ5LGxkTpWdzVr6AwkmxZJUrKNysGrU67NDZDdpsEQZLG2h3MJV3e/3BECI7I3c8gcj8dGbMMddFWCx1GyI7K3eN+Sbext/uIDLZN+kBU/fxxM4XiOxd/dsdIhPyoM8XiCbvz+/sC3lcWolvl9cfAAAAAElFTkSuQmCC">
					</image>
				</svg>
				<p>Tutaj znajdziesz nasze publikacje, w tym porady i aktualności ze świata merchandisingu, wyprzedaży, a
					także aktualności <br>
					ze strony zespołu oraz informacje <br>
					o naszej działalności. </p>
				<span>Zapraszamy do lektury!</span>
			</div>
			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_type());

			endwhile;
			?>
		</div>
		<?php
		the_posts_navigation();

	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<section class="contact" id="contact">
    <div class="contact__main-container">
        <div class="contact__form contact-footer-form">
            <div style="width: 100%">
                <h2 class="contact-footer-form__title">Pozostańmy w kontakcie</h2>
                <h3 class="contact-footer-form__subtitle">Skorzystaj z formularza, zapytaj nas<br>o ofertę i warunki
                    współpracy</h3>
                <?= do_shortcode('[contact-form-7 id="7c8ab02" title="Contact form 1"]'); ?>
            </div>
        </div>
        <div class="contact__info">
            <h2 class="contact__title">Zachęcamy<br>do kontaktu<br>z nami w przypadku<br>jakichkolwiek<br>pytań</h2>
            <ul>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="28px" height="30px">
                        <image x="0px" y="0px" width="28px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACBFBMVEX///8AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////96AHlmAAAAq3RSTlMAABljncXV1MObYBY0r/ycYjoqKzxkn/qrLgqW/QMFaI8HHNKMAsoX33p/2BUI0IHGjgZtj4WRg/sVnC4T+CSoawSaD3KaFF84V4v3DmWJYFSlWoGK0yyDN8jvEIeQAeP+AYYFFA/w9TcgduniHZYp1rlGQFhPsICTCot0M8yEJ2VDZENco5EdrFPLl3PC9jtI8iNbNj9OVPlXQuiFBgmIEZM5BI1318dxKDg5ThUKAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQdGBc33RwAAAHZSURBVCjPY2CAASZmFlY2dg5OLm4GdMDDy8cvICgkLCIqJi4hiSIlJS0jIAvjyMnzKSgi5JSUVVSR1SoqqKnD5TQ00W3R0taBMHT1MOQYGPQN5MC0oSGIZGQ0MjYxNTUxNmJkBPHNzEGksIUuWNLSypoRCKytLMGSNrZ2QNLeAazf0cmZEQycnRzBAi6uDAxu4hDD3T0YGT29vDwZGT3cIU7x9mHwdYW4wI+R0T+AkTHAn5HRDyISGARCYBDMyBgCMhVIBENEgNpCwyDMcKAgSBJIhENEIiIZoqIhzBhGxtg4Rsa4WEbGGGjYxDMkJEKYScmMHl4pKV4ejMlJEJHUNIZ0KQgzA+jOzKysTKCbMyAi3NkMObkQJmNeHMSfcXmMEJH8AobCIqhkcQlEsqQYKllaxqBVDpVkrKgEyVVWMEIlq6oZamphkpl1IMm6TJikdj0DA7sgVJKxoZGRsbGJESrZbAAkWlphkoxt7e1tjDDJjk4godrlAJOs7M6rhEn29IIDQLivHzMlTJg4CcKYnDAFXW4q3zQYk4tvOqrc5BkzEZxZs+fMRfDmzY9HsWjBwhnzFy0GseREDPuW+KDZwrTUwGLZ8shl4hwrMDMLEMxduSpipRySAAA02Fg3wk7cUAAAAABJRU5ErkJggg=="/>
                    </svg>
                    <span>02-384 Warszawa</span>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="28px" height="30px">
                        <image x="0px" y="0px" width="28px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACBFBMVEX///8AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////96AHlmAAAAq3RSTlMAABljncXV1MObYBY0r/ycYjoqKzxkn/qrLgqW/QMFaI8HHNKMAsoX33p/2BUI0IHGjgZtj4WRg/sVnC4T+CSoawSaD3KaFF84V4v3DmWJYFSlWoGK0yyDN8jvEIeQAeP+AYYFFA/w9TcgduniHZYp1rlGQFhPsICTCot0M8yEJ2VDZENco5EdrFPLl3PC9jtI8iNbNj9OVPlXQuiFBgmIEZM5BI1318dxKDg5ThUKAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQdGBc33RwAAAHZSURBVCjPY2CAASZmFlY2dg5OLm4GdMDDy8cvICgkLCIqJi4hiSIlJS0jIAvjyMnzKSgi5JSUVVSR1SoqqKnD5TQ00W3R0taBMHT1MOQYGPQN5MC0oSGIZGQ0MjYxNTUxNmJkBPHNzEGksIUuWNLSypoRCKytLMGSNrZ2QNLeAazf0cmZEQycnRzBAi6uDAxu4hDD3T0YGT29vDwZGT3cIU7x9mHwdYW4wI+R0T+AkTHAn5HRDyISGARCYBDMyBgCMhVIBENEgNpCwyDMcKAgSBJIhENEIiIZoqIhzBhGxtg4Rsa4WEbGGGjYxDMkJEKYScmMHl4pKV4ejMlJEJHUNIZ0KQgzA+jOzKysTKCbMyAi3NkMObkQJmNeHMSfcXmMEJH8AobCIqhkcQlEsqQYKllaxqBVDpVkrKgEyVVWMEIlq6oZamphkpl1IMm6TJikdj0DA7sgVJKxoZGRsbGJESrZbAAkWlphkoxt7e1tjDDJjk4godrlAJOs7M6rhEn29IIDQLivHzMlTJg4CcKYnDAFXW4q3zQYk4tvOqrc5BkzEZxZs+fMRfDmzY9HsWjBwhnzFy0GseREDPuW+KDZwrTUwGLZ8shl4hwrMDMLEMxduSpipRySAAA02Fg3wk7cUAAAAABJRU5ErkJggg=="/>
                    </svg>
                    <span>Ul. Włodarzewska 45A</span>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="28px" height="30px">
                        <image x="0px" y="0px" width="28px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACAVBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09DUl1DUl1DUl1PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9///Q7AAAAqnRSTlMAAAAdZ6LG29qfWg42s/2YXTkkJWCl+K0wDJr+Agdmkggf1IoBBI7OGBzhd37ZGQnRen3HBo2Qhi78EPqpaD2g53KdFvsUcdCsiveZAUKm03YWpFumWRfUQGSb0ywCRq1wEu961zrjfdGxWAkP8PQLM4zYo0np4MG5RqRTrIGMczPM2CfSOkdco7BPym10vin1SPEiTkRXXlI/5TiJPEB2w/nL3L9xFTQjA5WND1IAAAABYktHRACIBR1IAAAAB3RJTUUH5wcYFBwjvycFeQAAAcZJREFUKM9jYAACRhBgZmFlY+dg4+TiZmRABkApHl4+fgFBIWFBEVExcQkUSUkpaREZRiiQleOTV0BIKiopqzAiAVU1dQ2YnKaWNiMa0NHVg8jpGxgyYgAjYxOwpLwpIxZgZg6Ss7BUxSZpZS0ElLSxBTKZkICdvQNI1tGJgcHZRRVZ0tXN3cPTHiSp4MXNIOfNCJf08fXzDwhk8rADGxwUzBASCpMMCwj3i/BhYgp0ZwJLRkYxRMeAJWPj4t0TEsH6A9wgkoJsDElWIEZyin0q1FYff1eIpGYagzQ44NIzMrOyIZIRfkwQyZxchrx8iJ0FhUXFJUAbmfx8oZLOpQxlijAHxUaUlzAxJYb7QCVjohkqKhFeiahiYkoIYIJKVtcw6NQiJGOLspncw2CSdfUMDY0ISabCrNR4JphkUzMDQ0srQrIg0z4OJtnGBgz49g6ksM1IiYVJdnYBJWW6exCS6clMUMnePnBk90+YiBmdEydNhqSTKZaC6HJTLafAUpiAyzRUueliMxDpduYscwWElKRy2WzkFG9l5jVnrgk4Sc9Tm6AsiZodGJ3nL1jIsahxsdiSpcvQ8wo4oQsvb1ixEsiAiQMA5+RUHLI+XqwAAAAASUVORK5CYII="/>
                    </svg>
                    <a href="mailto:<?= $mail; ?>">biuro@msservices.pl</a><br>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="29px" height="30px">
                        <image x="0px" y="0px" width="29px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAeCAMAAADn2eWTAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACFlBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9WZidlAAAAsXRSTlMAAAAPN01UQSEBF3fN/ciyq77e6aE/C4n2iDICFl7AxjMw3IsNY/t8RPRmGpWiA/VSk5gS418qn5OaB51ioIQgogo3ezTxGC7+lRCUEn5olmIzB/iRCKgFbEm2m0NUSrWCfW8/JoUR7qhXBKcNaOsUukUjAdcoSn3SLbFOZeEecQQFZJvRIt2hcI/MNqQrOWCfc5iNHUjOBtpRhZRpbqlAh1ae5cKDWEul+q09p7u/tFpQdXiHAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQcB4Mk4agAAAHUSURBVCjPY2BgYIQBZhZWNnYOTgYUAJHi4ubh5eMXEBQSFhFFlxUTl5CUkgYrk5GVk1dAkVVUUlZhRABVNXVOhKyGphYjCtDW0dWDybLoGzCiA0MjqKyxiSkjI5OZuYWlFRMcMFrbQGRt7YBq7R0cmZyckWRdXN1Aku4enEBZTy+gkLcPQpbRF2y2rR/IHn+QUEAgkmxQsAwDg5imGEg2BCgSGhaOJMtoGMHAEBkFdmM0UCQmlglZNi6egSEhESyblMzElJKKIpuWzsCQkQmWzcrOYWLKzUWWZczLZygoBMsyFUUXI0uDxEpKGeREIbJMZeVMEOnwQB+IbEUlQ1U1VJapBqQxNzU2LMDb2QokVlvHYBgBk2WqB0mnxIQyMTlZAoUa1BoZmprhskw15cVQaz2BQu4tDAytbQhZprLoHDDt2A4U6ugEhmRXN0KWqSgb6G8mr55eoJB8H1C2fwKSLFPWxEmTvS2mAN08dRooFqbPmMmIDVRVg+O30CMNi2RCFTTlzJqNKTnHJB8qK51hKI0mOVe4Ep4m9WbPm48sx7lgRilyal8ovEAbJtdo47GIGTWnMCcuXrJ0mcb85R0rVq5ywchHjHqr1desXbe+c0M+QgoAR/db2P/7sIkAAAAASUVORK5CYII="/>
                    </svg>
                    <a href="phone:+48668178492">+48 668 178 492</a>
                </li>
                <li style="display: flex; flex-direction: column;">
                    <strong>Zapytanie ofertowe:</strong><br><a href="">zapytanie@msservices.pl</a>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="29px" height="30px">
                        <image x="0px" y="0px" width="29px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAeCAMAAADn2eWTAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACFlBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9WZidlAAAAsXRSTlMAAAAPN01UQSEBF3fN/ciyq77e6aE/C4n2iDICFl7AxjMw3IsNY/t8RPRmGpWiA/VSk5gS418qn5OaB51ioIQgogo3ezTxGC7+lRCUEn5olmIzB/iRCKgFbEm2m0NUSrWCfW8/JoUR7qhXBKcNaOsUukUjAdcoSn3SLbFOZeEecQQFZJvRIt2hcI/MNqQrOWCfc5iNHUjOBtpRhZRpbqlAh1ae5cKDWEul+q09p7u/tFpQdXiHAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQcB4Mk4agAAAHUSURBVCjPY2BgYIQBZhZWNnYOTgYUAJHi4ubh5eMXEBQSFhFFlxUTl5CUkgYrk5GVk1dAkVVUUlZhRABVNXVOhKyGphYjCtDW0dWDybLoGzCiA0MjqKyxiSkjI5OZuYWlFRMcMFrbQGRt7YBq7R0cmZyckWRdXN1Aku4enEBZTy+gkLcPQpbRF2y2rR/IHn+QUEAgkmxQsAwDg5imGEg2BCgSGhaOJMtoGMHAEBkFdmM0UCQmlglZNi6egSEhESyblMzElJKKIpuWzsCQkQmWzcrOYWLKzUWWZczLZygoBMsyFUUXI0uDxEpKGeREIbJMZeVMEOnwQB+IbEUlQ1U1VJapBqQxNzU2LMDb2QokVlvHYBgBk2WqB0mnxIQyMTlZAoUa1BoZmprhskw15cVQaz2BQu4tDAytbQhZprLoHDDt2A4U6ugEhmRXN0KWqSgb6G8mr55eoJB8H1C2fwKSLFPWxEmTvS2mAN08dRooFqbPmMmIDVRVg+O30CMNi2RCFTTlzJqNKTnHJB8qK51hKI0mOVe4Ep4m9WbPm48sx7lgRilyal8ovEAbJtdo47GIGTWnMCcuXrJ0mcb85R0rVq5ywchHjHqr1desXbe+c0M+QgoAR/db2P/7sIkAAAAASUVORK5CYII="/>
                    </svg>
                    <a href="phone:+48882126065">+48 882 126 065</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="contact__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.2992718816886!2d20.956629577033937!3d52.201608759753015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471933535fa93d23%3A0x100df180cb3cef25!2sW%C5%82odarzewska%2045A%2C%2002-384%20Warszawa!5e0!3m2!1spl!2spl!4v1690222948196!5m2!1spl!2spl"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php


get_footer();
