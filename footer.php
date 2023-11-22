</div><!-- #page -->

<section class="contact" id="contact">
    <div class="contact__main-container">
        <div class="contact__form contact-footer-form">
            <div style="width: 100%">
                <h2 class="contact-footer-form__title"><?php the_field('contact_form_title', 'option'); ?></h2>
                <h3 class="contact-footer-form__subtitle"><?php the_field('contact_form_subtitle', 'option'); ?></h3>

                <?php
                $my_current_lang = apply_filters('wpml_current_language', NULL);
                if ($my_current_lang !== 'en') {
                    echo do_shortcode('[contact-form-7 id="7c8ab02" title="Contact form 1"]');
                } else {
                    echo do_shortcode('[contact-form-7 id="a46ab42" title="Cf1"]');
                } ?>
            </div>
        </div>
        <div class="contact__info">
            <h2 class="contact__title"><?php the_field('contact_title', 'option'); ?></h2>
            <ul>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="28px" height="30px">
                        <image x="0px" y="0px" width="28px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACBFBMVEX///8AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////96AHlmAAAAq3RSTlMAABljncXV1MObYBY0r/ycYjoqKzxkn/qrLgqW/QMFaI8HHNKMAsoX33p/2BUI0IHGjgZtj4WRg/sVnC4T+CSoawSaD3KaFF84V4v3DmWJYFSlWoGK0yyDN8jvEIeQAeP+AYYFFA/w9TcgduniHZYp1rlGQFhPsICTCot0M8yEJ2VDZENco5EdrFPLl3PC9jtI8iNbNj9OVPlXQuiFBgmIEZM5BI1318dxKDg5ThUKAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQdGBc33RwAAAHZSURBVCjPY2CAASZmFlY2dg5OLm4GdMDDy8cvICgkLCIqJi4hiSIlJS0jIAvjyMnzKSgi5JSUVVSR1SoqqKnD5TQ00W3R0taBMHT1MOQYGPQN5MC0oSGIZGQ0MjYxNTUxNmJkBPHNzEGksIUuWNLSypoRCKytLMGSNrZ2QNLeAazf0cmZEQycnRzBAi6uDAxu4hDD3T0YGT29vDwZGT3cIU7x9mHwdYW4wI+R0T+AkTHAn5HRDyISGARCYBDMyBgCMhVIBENEgNpCwyDMcKAgSBJIhENEIiIZoqIhzBhGxtg4Rsa4WEbGGGjYxDMkJEKYScmMHl4pKV4ejMlJEJHUNIZ0KQgzA+jOzKysTKCbMyAi3NkMObkQJmNeHMSfcXmMEJH8AobCIqhkcQlEsqQYKllaxqBVDpVkrKgEyVVWMEIlq6oZamphkpl1IMm6TJikdj0DA7sgVJKxoZGRsbGJESrZbAAkWlphkoxt7e1tjDDJjk4godrlAJOs7M6rhEn29IIDQLivHzMlTJg4CcKYnDAFXW4q3zQYk4tvOqrc5BkzEZxZs+fMRfDmzY9HsWjBwhnzFy0GseREDPuW+KDZwrTUwGLZ8shl4hwrMDMLEMxduSpipRySAAA02Fg3wk7cUAAAAABJRU5ErkJggg=="/>
                    </svg>
                    <span><?php the_field('address_1', 'option'); ?></span>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="28px" height="30px">
                        <image x="0px" y="0px" width="28px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACBFBMVEX///8AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09DUl1DUl1DUl1PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////96AHlmAAAAq3RSTlMAABljncXV1MObYBY0r/ycYjoqKzxkn/qrLgqW/QMFaI8HHNKMAsoX33p/2BUI0IHGjgZtj4WRg/sVnC4T+CSoawSaD3KaFF84V4v3DmWJYFSlWoGK0yyDN8jvEIeQAeP+AYYFFA/w9TcgduniHZYp1rlGQFhPsICTCot0M8yEJ2VDZENco5EdrFPLl3PC9jtI8iNbNj9OVPlXQuiFBgmIEZM5BI1318dxKDg5ThUKAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQdGBc33RwAAAHZSURBVCjPY2CAASZmFlY2dg5OLm4GdMDDy8cvICgkLCIqJi4hiSIlJS0jIAvjyMnzKSgi5JSUVVSR1SoqqKnD5TQ00W3R0taBMHT1MOQYGPQN5MC0oSGIZGQ0MjYxNTUxNmJkBPHNzEGksIUuWNLSypoRCKytLMGSNrZ2QNLeAazf0cmZEQycnRzBAi6uDAxu4hDD3T0YGT29vDwZGT3cIU7x9mHwdYW4wI+R0T+AkTHAn5HRDyISGARCYBDMyBgCMhVIBENEgNpCwyDMcKAgSBJIhENEIiIZoqIhzBhGxtg4Rsa4WEbGGGjYxDMkJEKYScmMHl4pKV4ejMlJEJHUNIZ0KQgzA+jOzKysTKCbMyAi3NkMObkQJmNeHMSfcXmMEJH8AobCIqhkcQlEsqQYKllaxqBVDpVkrKgEyVVWMEIlq6oZamphkpl1IMm6TJikdj0DA7sgVJKxoZGRsbGJESrZbAAkWlphkoxt7e1tjDDJjk4godrlAJOs7M6rhEn29IIDQLivHzMlTJg4CcKYnDAFXW4q3zQYk4tvOqrc5BkzEZxZs+fMRfDmzY9HsWjBwhnzFy0GseREDPuW+KDZwrTUwGLZ8shl4hwrMDMLEMxduSpipRySAAA02Fg3wk7cUAAAAABJRU5ErkJggg=="/>
                    </svg>
                    <span><?php the_field('address_2', 'option'); ?></span>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="28px" height="30px">
                        <image x="0px" y="0px" width="28px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACAVBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09DUl1DUl1DUl1PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9///Q7AAAAqnRSTlMAAAAdZ6LG29qfWg42s/2YXTkkJWCl+K0wDJr+Agdmkggf1IoBBI7OGBzhd37ZGQnRen3HBo2Qhi78EPqpaD2g53KdFvsUcdCsiveZAUKm03YWpFumWRfUQGSb0ywCRq1wEu961zrjfdGxWAkP8PQLM4zYo0np4MG5RqRTrIGMczPM2CfSOkdco7BPym10vin1SPEiTkRXXlI/5TiJPEB2w/nL3L9xFTQjA5WND1IAAAABYktHRACIBR1IAAAAB3RJTUUH5wcYFBwjvycFeQAAAcZJREFUKM9jYAACRhBgZmFlY+dg4+TiZmRABkApHl4+fgFBIWFBEVExcQkUSUkpaREZRiiQleOTV0BIKiopqzAiAVU1dQ2YnKaWNiMa0NHVg8jpGxgyYgAjYxOwpLwpIxZgZg6Ss7BUxSZpZS0ElLSxBTKZkICdvQNI1tGJgcHZRRVZ0tXN3cPTHiSp4MXNIOfNCJf08fXzDwhk8rADGxwUzBASCpMMCwj3i/BhYgp0ZwJLRkYxRMeAJWPj4t0TEsH6A9wgkoJsDElWIEZyin0q1FYff1eIpGYagzQ44NIzMrOyIZIRfkwQyZxchrx8iJ0FhUXFJUAbmfx8oZLOpQxlijAHxUaUlzAxJYb7QCVjohkqKhFeiahiYkoIYIJKVtcw6NQiJGOLspncw2CSdfUMDY0ISabCrNR4JphkUzMDQ0srQrIg0z4OJtnGBgz49g6ksM1IiYVJdnYBJWW6exCS6clMUMnePnBk90+YiBmdEydNhqSTKZaC6HJTLafAUpiAyzRUueliMxDpduYscwWElKRy2WzkFG9l5jVnrgk4Sc9Tm6AsiZodGJ3nL1jIsahxsdiSpcvQ8wo4oQsvb1ixEsiAiQMA5+RUHLI+XqwAAAAASUVORK5CYII="/>
                    </svg>
                    <a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a><br>

                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="29px" height="30px">
                        <image x="0px" y="0px" width="29px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAeCAMAAADn2eWTAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACFlBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9WZidlAAAAsXRSTlMAAAAPN01UQSEBF3fN/ciyq77e6aE/C4n2iDICFl7AxjMw3IsNY/t8RPRmGpWiA/VSk5gS418qn5OaB51ioIQgogo3ezTxGC7+lRCUEn5olmIzB/iRCKgFbEm2m0NUSrWCfW8/JoUR7qhXBKcNaOsUukUjAdcoSn3SLbFOZeEecQQFZJvRIt2hcI/MNqQrOWCfc5iNHUjOBtpRhZRpbqlAh1ae5cKDWEul+q09p7u/tFpQdXiHAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQcB4Mk4agAAAHUSURBVCjPY2BgYIQBZhZWNnYOTgYUAJHi4ubh5eMXEBQSFhFFlxUTl5CUkgYrk5GVk1dAkVVUUlZhRABVNXVOhKyGphYjCtDW0dWDybLoGzCiA0MjqKyxiSkjI5OZuYWlFRMcMFrbQGRt7YBq7R0cmZyckWRdXN1Aku4enEBZTy+gkLcPQpbRF2y2rR/IHn+QUEAgkmxQsAwDg5imGEg2BCgSGhaOJMtoGMHAEBkFdmM0UCQmlglZNi6egSEhESyblMzElJKKIpuWzsCQkQmWzcrOYWLKzUWWZczLZygoBMsyFUUXI0uDxEpKGeREIbJMZeVMEOnwQB+IbEUlQ1U1VJapBqQxNzU2LMDb2QokVlvHYBgBk2WqB0mnxIQyMTlZAoUa1BoZmprhskw15cVQaz2BQu4tDAytbQhZprLoHDDt2A4U6ugEhmRXN0KWqSgb6G8mr55eoJB8H1C2fwKSLFPWxEmTvS2mAN08dRooFqbPmMmIDVRVg+O30CMNi2RCFTTlzJqNKTnHJB8qK51hKI0mOVe4Ep4m9WbPm48sx7lgRilyal8ovEAbJtdo47GIGTWnMCcuXrJ0mcb85R0rVq5ywchHjHqr1desXbe+c0M+QgoAR/db2P/7sIkAAAAASUVORK5CYII="/>
                    </svg>
                    <a href="phone:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
                </li>
                <li style="display: flex; flex-direction: column; gap: 0.8rem; text-align: left; align-items: flex-start;">
                    <strong><?php the_field('half_title', 'option'); ?></strong>
                    <div style="display: flex; align-items: center; gap: 1.6rem;">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="28px" height="30px">
                            <image x="0px" y="0px" width="28px" height="30px"
                                   xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAMAAAAIG46tAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACAVBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09DUl1DUl1DUl1PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9///Q7AAAAqnRSTlMAAAAdZ6LG29qfWg42s/2YXTkkJWCl+K0wDJr+Agdmkggf1IoBBI7OGBzhd37ZGQnRen3HBo2Qhi78EPqpaD2g53KdFvsUcdCsiveZAUKm03YWpFumWRfUQGSb0ywCRq1wEu961zrjfdGxWAkP8PQLM4zYo0np4MG5RqRTrIGMczPM2CfSOkdco7BPym10vin1SPEiTkRXXlI/5TiJPEB2w/nL3L9xFTQjA5WND1IAAAABYktHRACIBR1IAAAAB3RJTUUH5wcYFBwjvycFeQAAAcZJREFUKM9jYAACRhBgZmFlY+dg4+TiZmRABkApHl4+fgFBIWFBEVExcQkUSUkpaREZRiiQleOTV0BIKiopqzAiAVU1dQ2YnKaWNiMa0NHVg8jpGxgyYgAjYxOwpLwpIxZgZg6Ss7BUxSZpZS0ElLSxBTKZkICdvQNI1tGJgcHZRRVZ0tXN3cPTHiSp4MXNIOfNCJf08fXzDwhk8rADGxwUzBASCpMMCwj3i/BhYgp0ZwJLRkYxRMeAJWPj4t0TEsH6A9wgkoJsDElWIEZyin0q1FYff1eIpGYagzQ44NIzMrOyIZIRfkwQyZxchrx8iJ0FhUXFJUAbmfx8oZLOpQxlijAHxUaUlzAxJYb7QCVjohkqKhFeiahiYkoIYIJKVtcw6NQiJGOLspncw2CSdfUMDY0ISabCrNR4JphkUzMDQ0srQrIg0z4OJtnGBgz49g6ksM1IiYVJdnYBJWW6exCS6clMUMnePnBk90+YiBmdEydNhqSTKZaC6HJTLafAUpiAyzRUueliMxDpduYscwWElKRy2WzkFG9l5jVnrgk4Sc9Tm6AsiZodGJ3nL1jIsahxsdiSpcvQ8wo4oQsvb1ixEsiAiQMA5+RUHLI+XqwAAAAASUVORK5CYII="/>
                        </svg>
                        <a href="<?php the_field('mail_2', 'option'); ?>"><?php the_field('mail_2', 'option'); ?></a>
                    </div>
                </li>
                <li>
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="29px" height="30px">
                        <image x="0px" y="0px" width="29px" height="30px"
                               xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAeCAMAAADn2eWTAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACFlBMVEX///9PT08AAABPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09DUl1DUl1PT09PT09PT09PT09DUl1PT09PT09DUl1PT09PT09PT09PT09PT09PT09PT09DUl1PT09PT09PT09PT09DUl1DUl1PT09PT09PT09DUl1DUl1DUl1DUl1PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0////9WZidlAAAAsXRSTlMAAAAPN01UQSEBF3fN/ciyq77e6aE/C4n2iDICFl7AxjMw3IsNY/t8RPRmGpWiA/VSk5gS418qn5OaB51ioIQgogo3ezTxGC7+lRCUEn5olmIzB/iRCKgFbEm2m0NUSrWCfW8/JoUR7qhXBKcNaOsUukUjAdcoSn3SLbFOZeEecQQFZJvRIt2hcI/MNqQrOWCfc5iNHUjOBtpRhZRpbqlAh1ae5cKDWEul+q09p7u/tFpQdXiHAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+cHGBQcB4Mk4agAAAHUSURBVCjPY2BgYIQBZhZWNnYOTgYUAJHi4ubh5eMXEBQSFhFFlxUTl5CUkgYrk5GVk1dAkVVUUlZhRABVNXVOhKyGphYjCtDW0dWDybLoGzCiA0MjqKyxiSkjI5OZuYWlFRMcMFrbQGRt7YBq7R0cmZyckWRdXN1Aku4enEBZTy+gkLcPQpbRF2y2rR/IHn+QUEAgkmxQsAwDg5imGEg2BCgSGhaOJMtoGMHAEBkFdmM0UCQmlglZNi6egSEhESyblMzElJKKIpuWzsCQkQmWzcrOYWLKzUWWZczLZygoBMsyFUUXI0uDxEpKGeREIbJMZeVMEOnwQB+IbEUlQ1U1VJapBqQxNzU2LMDb2QokVlvHYBgBk2WqB0mnxIQyMTlZAoUa1BoZmprhskw15cVQaz2BQu4tDAytbQhZprLoHDDt2A4U6ugEhmRXN0KWqSgb6G8mr55eoJB8H1C2fwKSLFPWxEmTvS2mAN08dRooFqbPmMmIDVRVg+O30CMNi2RCFTTlzJqNKTnHJB8qK51hKI0mOVe4Ep4m9WbPm48sx7lgRilyal8ovEAbJtdo47GIGTWnMCcuXrJ0mcb85R0rVq5ywchHjHqr1desXbe+c0M+QgoAR/db2P/7sIkAAAAASUVORK5CYII="/>
                    </svg>
                    <a href="phone:<?php the_field('phone_2', 'option'); ?>"><?php the_field('phone_2', 'option'); ?></a>
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
<footer class="footer">
    <div class="ms-container">
        <div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-2',
                    'menu_id' => 'footer-menu',
                    'container' => false
                )
            );
            ?>
        </div>
        <div class="footer__container">
            <?php the_field('copyright', 'option'); ?>
        </div>
    </div>
</footer>
<a href="#back-to-top" class="back-to-top" title="back-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/>
    </svg>
</a>
<?php wp_footer(); ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/wp-content/themes/ms/js/particles.min.js"></script>
<script>
    if (document.querySelector('#particles-js')) {
        particlesJS.load('particles-js', '/wp-content/themes/ms/js/particles.json', function () {
            console.log('callback - particles.js config loaded');
        });
    }
    const menuButton = document.querySelector('.menu-button');
    const mobileMenu = document.querySelector('.mobile-navigation')

    if (menuButton) {
        menuButton.addEventListener('click', () => {
            mobileMenu.style.display = 'grid';
        })

        document.querySelector('.close-menu-button').addEventListener('click', () => {
            mobileMenu.style.display = 'none';
        })

    }

    if (document.querySelector('.mobile-navigation a[href="#contact"]')) {
        document.querySelector('.mobile-navigation a[href="#contact"]').addEventListener('click', () => {
            mobileMenu.style.display = 'none';
        })
    }

    const menu = document.querySelector('.header');

    function debounce(func, wait, immediate) {
        let timeout;
        return function () {
            const context = this;
            const args = arguments;
            const later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    const checkScroll = function () {
        if (window.scrollY > 50) {
            menu.classList.add('scrolled');
        } else {
            menu.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', debounce(checkScroll, 200));
    const resultsBox = document.querySelector('#search-results');

    document.querySelector('#search-form').addEventListener('submit', (e) => {
        const input = document.querySelector('#search');

        e.preventDefault();
        resultsBox.innerHTML = '';
        fetch(`/?s=${input.value}`).then(resp => resp.text()).then(data => {
            input.value = '';
            const parser = new DOMParser();
            const html = parser.parseFromString(data, 'text/html');
            const searchResults = html.querySelector('#primary .ms-container');
            resultsBox.append(searchResults);
        })
    });

    const swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        allowTouchMove: false,
        autoplay: {
            delay: 2000
        },
        breakpoints: {
            560: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        }
    });

</script>
<div id="wedobots-plugin"
     data-botid="5d9eab1d-b6aa-46f9-8d0c-01f1e9d45e37"
     data-boturl="https://app.wedobots.pl"></div>
<script src="https://app.wedobots.pl/js/bot.js"></script>
</body>
</html>
