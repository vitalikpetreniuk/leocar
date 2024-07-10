export default function catalog() {
    let body = document.body;

    let catalog = document.querySelector('.catalog-list');
    if(catalog) {
        let catalogItems = catalog.querySelectorAll('.leo-catalog .catalog-item:not(.catalog-item-require)');
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

    let catalogBtn = document.querySelector('.show-catalog');
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

    let flipItems = document.querySelectorAll('.leo-catalog .flip-card, .leo-catalog-home .flip-card');
    if(flipItems) {
        flipItems.forEach(item => {
            item.addEventListener('click', () => {
                if(item.classList.contains('flipped')) {
                    flipItems.forEach(allItems => allItems.classList.remove('flipped'));
                    item.classList.remove('flipped');
                }else{

                    flipItems.forEach(allItems => allItems.classList.remove('flipped'));
                    item.classList.add('flipped');
                }
            });
        });
    }

    let catalogItemsHome = document.querySelectorAll('.leo-catalog-home .catalog-item');
    if(catalogItemsHome.length) {
        let carTerms;
        catalogItemsHome.forEach(item => {
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

    let catalogSort = document.querySelector('.catalog-sort');
    let catalogItems = document.querySelectorAll('.leo-catalog-home .catalog-list > .catalog-item:not(:last-child)');

    if(catalogSort) {
        let typeList = catalogSort.querySelectorAll('.sort-type > ul li');
        let modelList = catalogSort.querySelectorAll('.sort-model > ul li');

        catalogSort.querySelector('.sort-type > div').addEventListener('click', () => {
            catalogSort.querySelector('.sort-model').classList.remove('active');
            catalogSort.querySelector('.sort-type').classList.toggle('active');
        })
        catalogSort.querySelector('.sort-model > div').addEventListener('click', () => {
            catalogSort.querySelector('.sort-type').classList.remove('active');
            catalogSort.querySelector('.sort-model').classList.toggle('active');
        })

        catalogSortSwitch(typeList, catalogSort.querySelector('.sort-type'), catalogSort.querySelector('.sort-type > div'));
        catalogSortSwitch(modelList, catalogSort.querySelector('.sort-model'), catalogSort.querySelector('.sort-model > div'));
    }

    let catalogPage = document.querySelector('.leo-catalog-page');
    if(catalogPage) {
        catalogPage.querySelector('.filter-button').addEventListener('click', () => {
            body.classList.add('filter-open');
        });
        catalogPage.querySelector('.close-filter').addEventListener('click', () => {
            body.classList.remove('filter-open');
        });

        let filterTypes = catalogPage.querySelectorAll('.filter-catalog ul li');
        filterTypes.forEach(type => {
            type.addEventListener('click', () => {
                type.classList.toggle('active');
            });
        });
    }

    document.addEventListener('mouseup', function(e) {
        // Назва контейнеру
        let container = document.querySelector('div.sort-type');
        if(container){
            let container2 = document.querySelector('div.sort-model');
            // Умова, щоб працювало тільки коли попап відкритий
            if (container.classList.contains('active')) {
                if (!container.contains(e.target)) {
                    container.classList.remove('active');
                }
            }
            if (container2.classList.contains('active')) {
                if (!container2.contains(e.target)) {
                    container2.classList.remove('active');
                }
            }
        }
    });

    function catalogSortSwitch(sortList, sortDiv, sortDivInner){
        sortList.forEach(item => {
            item.addEventListener('click', () => {
                sortList.forEach(allItems => allItems.classList.remove('active'));
                item.classList.add('active');

                sortDivInner.innerHTML = item.innerHTML;
                sortDiv.classList.remove('active');

                let chosenType = catalogSort.querySelector('.sort-type > ul li.active').getAttribute('data-type');
                let chosenModel = catalogSort.querySelector('.sort-model > ul li.active').getAttribute('data-model');

                catalog.classList.add('open');
                catalogBtn.style.display = 'none';
                catalogItems.forEach(allItems => allItems.classList.add('sorted-out'));

                if(chosenType === 'all' && chosenModel === 'all') {
                    catalogItems.forEach(allItems => allItems.classList.remove('sorted-out'));
                    catalog.classList.remove('open');
                    catalogBtn.style.display = 'block';
                }else{
                    if(chosenType === 'all') {
                        catalogItems.forEach(item => {
                            if (item.dataset.model === chosenModel) {
                                item.classList.remove('sorted-out');
                            }
                        });
                    }else if(chosenModel === 'all') {
                        catalogItems.forEach(item => {
                            if (item.dataset.type === chosenType) {
                                item.classList.remove('sorted-out');
                            }
                        });
                    }else{
                        catalogItems.forEach(item => {
                            if (item.dataset.type === chosenType && item.dataset.model === chosenModel) {
                                item.classList.remove('sorted-out');
                            }
                        });
                    }
                }

            });
        });
    }
}