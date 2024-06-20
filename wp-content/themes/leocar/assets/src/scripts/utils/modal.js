export default function modal() {
    let body = document.body;
    let modalWrap = document.getElementById('leo-modals');
    let closeButtons = document.querySelectorAll('.modal .close');

    let modalTriggers = document.querySelectorAll('.require-call, button.test-drive, button.show-conditions');

    if(modalTriggers) {
        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                body.classList.add('modal-open');
                modalWrap.classList.toggle('call', trigger.classList.contains('require-call'));
                modalWrap.classList.toggle('drive', trigger.classList.contains('test-drive'));
                modalWrap.classList.toggle('conditions', trigger.classList.contains('show-conditions'));
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
        modalWrap.classList.remove('call', 'drive', 'conditions');
        body.classList.remove('modal-open');
    }
}