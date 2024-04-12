export default function seo() {
    let seo = document.querySelector('.leo-seo');
    if (seo) {
        let toggleButton = seo.querySelector('.button');
        toggleButton.addEventListener('click', toggleHeight);
    }

    function toggleHeight() {
        let outerDiv = seo.querySelector('.outer-text');
        let innerDiv = seo.querySelector('.inner-text');
        let toggleButton = seo.querySelector('.button');

        let borderHeight = '182px'

        if (window.screen.width > 1099) {
            borderHeight = '104px'
        }

        if (outerDiv.style.height === borderHeight || outerDiv.style.height === '') {
            outerDiv.style.height = innerDiv.clientHeight + 'px';
            toggleButton.textContent = 'Приховати';
        } else {
            outerDiv.style.height = borderHeight;
            toggleButton.textContent = 'Дивитись все';
        }
    }
}