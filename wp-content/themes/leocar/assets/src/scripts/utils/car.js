export default function car() {
    let body = document.body;

    let showDeals = document.querySelector('.show-prices');
    if(showDeals) {
        showDeals.addEventListener('click', () => {
            window.scrollTo({ top: document.querySelector('.leo-safety').offsetTop - 80, behavior: 'smooth' });
        })
    }
}