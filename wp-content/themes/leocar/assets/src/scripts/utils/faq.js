export default function faq() {
    let faq = document.querySelector('.faq-list');
    if (faq) {
        let faqItems = faq.querySelectorAll('.faq-list > div');
        faqItems.forEach(item => {
            item.querySelector('h5').addEventListener('click', () => {
                // Close siblings with class 'open' before toggling this item
                item.parentElement.querySelectorAll('.open').forEach(openedItem => {
                    if (openedItem !== item) { // Exclude the clicked item itself
                        openedItem.classList.remove('open');
                    }
                });

                // Toggle the clicked item
                item.classList.toggle('open');
            });
        });
    }
}