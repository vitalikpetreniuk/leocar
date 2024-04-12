export default function popup() {
    let body = document.body;

    let message = document.querySelector('.leo-message')
    if (message) {
        message.querySelector('span').addEventListener('click', () => {
            message.classList.toggle('open');
        });
    }
}