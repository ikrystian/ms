</div><!-- #page -->

<footer class="footer">
    <div class="ms-container">
        <div>
            <ul>
                <li><a href="/o-nas/">o nas</a></li>
                <li><a href="/uslugi/">usługi</a></li>
                <li><a href="/career/">kariera</a></li>
                <li><a href="#contact">kontakt</a></li>
                <li><a href="/privacy-policy/">polityka prywatnośći</a></li>
                <li><a href="/polityka-plikow-cookies/">cookies</a></li>
<!-- 				<li style="display: flex; align-items: center; gap: 0.6rem;">by <a href="https://wedobots.pl/" target="_blank"><img src="/wp-content/uploads/2023/11/wedo.png"></a></li> -->
            </ul>
        </div>
        <div class="footer__container">
            <strong>MS Services Sp. z o. o. | ul. Bociana 22, 31-231 Kraków, | tel./fax.(012) 61 45 238</strong>, | NIP:
            679
            278 19 20, REGON: 356761571,<br>
            Kapitał zakładowy: 220.000 PLN, Spółka zarejestrowana w Sądzie Rejonowym dla Krakowa-Śródmieścia w Krakowie
            XI
            Wydział Gospodarczy Krajowego
            Rejestru Sądowego pod numerem KRS 0000177832
        </div>
    </div>
</footer>
<a href="#back-to-top" class="back-to-top" title="back-to-top" >
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
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
	
		if(document.querySelector('.mobile-navigation a[href="#contact"]')) {
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
data-boturl="https://app.wedobots.pl"> </div>
<script src="https://app.wedobots.pl/js/bot.js"></script>
</body>
</html>
