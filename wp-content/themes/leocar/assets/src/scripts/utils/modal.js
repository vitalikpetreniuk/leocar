export default function modal() {
    let body = document.body;
    let modalWrap = document.getElementById('leo-modals');
    let closeButtons = document.querySelectorAll('.modal .close');

    let modalTriggers = document.querySelectorAll('.require-call, button.test-drive');

    if(modalTriggers) {
        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                body.classList.add('modal');
                modalWrap.classList.toggle('call', trigger.classList.contains('require-call'));
                modalWrap.classList.toggle('drive', trigger.classList.contains('test-drive'));
            });
        });
    }

    if (modalWrap) {
        modalWrap.addEventListener('click', function(event) {
            if (event.target === modalWrap) {
                closeModals();
            }
        });
        closeButtons.forEach((element) => {
            element.addEventListener('click', () => {
                const modal = element.closest('.modal');
                if (!modal) return;
                closeModals();
            });
        });
    }

    function closeModals() {
        modalWrap.classList.remove('call', 'drive');
        body.classList.remove('modal');
    }
}