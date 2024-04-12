export default function catalog() {
    let body = document.body;

    let catalog = document.querySelector('.leo-catalog .catalog-list');
    if(catalog) {
        let catalogItems = catalog.querySelectorAll('.catalog-item');
        catalogItems.forEach(item => {
            item.addEventListener('click', () => {
                let leaseItems = item.querySelectorAll('ul.lease li');
                leaseItems.forEach(lease => {
                    lease.addEventListener('click', () => {
                        leaseItems.forEach(allItems => allItems.classList.remove('active'));
                        lease.classList.add('active');
                    });
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

    let chooseCar = document.querySelector('button.choose-car');
}