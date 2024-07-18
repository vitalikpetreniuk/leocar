export default function prices() {
    let body = document.body;

    let priceListCars = document.querySelectorAll('.prices-mobile > div');
    if(priceListCars.length) {
        let carTerms;
        priceListCars.forEach(item => {
            carTerms = item.querySelectorAll('ul.terms li');
            carTerms.forEach(term => {
                term.addEventListener('click', () => {
                    item.querySelectorAll('ul.terms li').forEach(allItems => allItems.classList.remove('active'));
                    term.classList.add('active');

                    item.querySelector('.price > span:nth-child(1)').innerText = term.getAttribute('data-price');
                    if (term.getAttribute('data-old-price') !== null) {
                        item.querySelector('.price > span.old-price span').innerText = term.getAttribute('data-old-price');
                    }
                });
            });
        });
    }

    let termsCatalogItem = document.querySelectorAll('.leo-catalog-page .catalog-item');
    if(termsCatalogItem.length) {
        let carTerms;
        termsCatalogItem.forEach(item => {
            carTerms = item.querySelectorAll('ul.terms li');
            carTerms.forEach(term => {
                term.addEventListener('click', () => {
                    item.querySelectorAll('ul.terms li').forEach(allItems => allItems.classList.remove('active'));
                    term.classList.add('active');

                    item.querySelector('.amount').innerText = term.getAttribute('data-price');
                    item.querySelector('.deposit span').innerText = term.getAttribute('data-deposit');
                });
            });
        });
    }

}