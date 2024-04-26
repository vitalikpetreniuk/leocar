export default function catalog() {
    let body = document.body;

    let catalog = document.querySelector('.leo-catalog .catalog-list');
    if(catalog) {
        let catalogItems = catalog.querySelectorAll('.catalog-item:not(.catalog-item-require)');
        catalogItems.forEach(item => {
            let leaseItems = item.querySelectorAll('ul.lease li');
            item.querySelector('.amount').innerHTML = item.querySelector('ul.lease li.active').getAttribute('data-price');

            leaseItems.forEach(lease => {
                let price = lease.getAttribute('data-price');

                lease.addEventListener('click', () => {
                    leaseItems.forEach(allItems => allItems.classList.remove('active'));
                    lease.classList.add('active');
                    item.querySelector('.amount').innerHTML = lease.getAttribute('data-price');
                });
            });
        });
    }

    let catalogBtn = document.querySelector('.leo-catalog .show-catalog');
    if (catalogBtn) {
        catalogBtn.addEventListener('click', () => {
            catalog.classList.toggle('open');

            if (catalogBtn.textContent === "Показати все") {
                catalogBtn.textContent = "Приховати";
            } else {
                catalogBtn.textContent = "Показати все";
            }
        });
    }
    //
    // let flipItems = document.querySelectorAll('.leo-catalog .flip-card');
    // if(flipItems) {
    //     flipItems.forEach(item => {
    //         item.addEventListener('click', () => {
    //             flipItems.forEach(allItems => allItems.classList.remove('flipped'));
    //             item.classList.toggle('flipped');
    //         });
    //     });
    // }

    let chooseCar = document.querySelector('button.choose-car');
}