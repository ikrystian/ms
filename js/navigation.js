(() => {
    const searchButton = document.querySelector('.search-button');
    const closeSearchButton = document.querySelector('.close-search')
    const body = document.querySelector('body');
    const searchBox = document.querySelector('.search-box');

    const openSearchBox = () => {
        body.classList.add('disabled');
        searchBox.style.display = 'flex';
    }

    const close = () => {
        body.classList.remove('disabled');
        searchBox.style.display = 'none';
    }

    searchButton.addEventListener('click', () => {
        openSearchBox();
    });

    closeSearchButton.addEventListener('click', () => {
        close();
    });


    const moreButton = document.querySelector('.about-us-boxes__more-button');
    if (moreButton) {
        const moreBoxes = document.querySelector('.about-us-more-boxes');
        moreButton.addEventListener('click', () => {
            moreBoxes.classList.toggle('active');
            moreButton.innerText = moreBoxes.classList.contains('active') ? 'Ukryj część nagród' : 'Zobacz więcej nagród';
        });
    }


    const galleryButton = document.querySelectorAll('.services-featured__image--gallery');
    galleryButton.forEach(button => {
        button.addEventListener('click', () => {
            const gallery = button.parentElement.querySelector('.gallery');
            gallery.classList.add('active');
        })

    })

    const closeGalleryButton = document.querySelectorAll('.close-gallery');
    closeGalleryButton.forEach(button => {
        button.addEventListener('click', () => {
            document.querySelector('.gallery.active').classList.remove('active');
        })

    })

    const dropDown = document.querySelector('select[name="menu-126"]');

    function changeFormEmail() {
        const subject = dropDown.value;
        let email;
        switch (subject) {
            case 'Zapytanie ofertowe':
                email = 'zapytanie@msservices.pl';
                break;
            case 'Dla dostawców':
                email = 'biuro@msservices.pl';
                break;
            case 'Dla Pracowników':
                email = 'kadry@msservices.pl';
                break;
            case 'Rekrutacja':
                email = 'hr@msservices.pl';
                break;
            case 'RODO':
                email = 'ochrona@msservices.pl';
                break;
            case 'Inne':
                email = 'biuro@msservices.pl';
                break;
            default:
                email = 'zapytanie@msservices.pl';
        }

        console.log(subject)

        document.querySelector('#recipient').value = email;
    }

    if (dropDown) {
        changeFormEmail();
        dropDown.addEventListener('input', changeFormEmail)
    }



    const dropDownEn = document.querySelector('select[name="menu-127"]');

    function changeFormEmailEn() {
        const subject = dropDownEn.value;
        let email;
        switch (subject) {
            case 'General Issues':
                email = 'biuro@msservices.pl';
                break;
            case 'Ask for an offer':
                email = 'zapytanie@msservices.pl';
                break;
            case 'For suppliers':
                email = 'office@msservices.pl';
                break;
            case 'Employee Issues':
                email = 'kadry@msservices.pl';
                break;
            case 'Recruitment':
                email = 'hr@msservices.pl';
                break;
            case 'GDPR':
                email = 'ochrona@msservices.pl';
                break;
            default:
                email = 'biuro@msservices.pl';
        }

        console.log(subject)

        document.querySelector('#recipient').value = email;
    }

    if (dropDownEn) {
        changeFormEmailEn();
        dropDownEn.addEventListener('input', changeFormEmailEn)
    }



})()