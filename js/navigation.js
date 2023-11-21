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
        if(moreButton) {
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
	


})()