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

	document.addEventListener('mouseup', function(e) {
		// Назва контейнеру
		let container = document.querySelector('.modal.call');
		// Умова, щоб працювало тільки коли попап відкритий
		if (modalWrap.classList.contains('call')) {
  
			 if (!e.target.closest('a') && !container.contains(e.target)) {
				closeModals();
			}
		}
	});
	document.addEventListener('mouseup', function(e) {
		// Назва контейнеру
		let container = document.querySelector('.modal.drive');
		// Умова, щоб працювало тільки коли попап відкритий
		if (modalWrap.classList.contains('drive')) {
  
			 if (!e.target.closest('a') && !container.contains(e.target)) {
				closeModals();
			}
		}
	});
	document.addEventListener('mouseup', function(e) {
		// Назва контейнеру
		let container = document.querySelector('.modal.conditions');
		// Умова, щоб працювало тільки коли попап відкритий
		if (modalWrap.classList.contains('conditions')) {
  
			 if (!e.target.closest('a') && !container.contains(e.target)) {
				closeModals();
			}
		}
	});

	function closeModals() {
		modalWrap.classList.remove('call', 'drive', 'conditions');
		body.classList.remove('modal-open');
	}
}