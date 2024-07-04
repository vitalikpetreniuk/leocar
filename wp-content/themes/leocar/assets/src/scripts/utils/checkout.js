export default function checkout() {
    let body = document.body;

    const safetyItems = document.querySelectorAll('.safety-fields input[type="radio"]');
    const additionalItems = document.querySelectorAll('.additional-fields input[type="checkbox"]');

    if(document.querySelector('.leo-checkout')){
        calculatePrice();
    }

    safetyItems.forEach(safetyItem => {
        safetyItem.addEventListener("change", calculatePrice);
    });
    additionalItems.forEach(additionalItem => {
        additionalItem.addEventListener("change", calculatePrice);
    });

    function calculatePrice(){
        let leoCurrency = '€';
        let totalDays = 1;
        let perDayPrice = parseInt(document.querySelector('.car-info > input').getAttribute('data-price'));
        let depositPrice = parseInt(document.querySelector('.car-info > input').getAttribute('data-deposit'));
        let safetyPrice = parseInt(document.querySelector('.safety-fields input[type="radio"]:checked').getAttribute('data-price'));
        let safetyType = document.querySelector('.safety-fields input[type="radio"]:checked').getAttribute('id');
        let totalPrice = (perDayPrice*totalDays)+(safetyPrice*totalDays);

        let additionalItemsChecked = document.querySelectorAll('.additional-fields input[type="checkbox"]:checked');
        let additionalInfoBlock = document.querySelector('.car-info .car-content > div');
        let additionalInfoContent = '<li>Оренда авто<span>'+perDayPrice*totalDays+' '+leoCurrency+'</span></li>';
        if(safetyPrice > 0) {
            if(safetyType === 'additional') {
                additionalInfoContent += '<li>Додаткова безпека<span>'+safetyPrice*totalDays+' '+leoCurrency+'</span></li>';
            }else{
                additionalInfoContent += '<li>Додаткова безпека +<span>'+safetyPrice*totalDays+' '+leoCurrency+'</span></li>';
            }
        }

        if(additionalItemsChecked.length){
            additionalInfoBlock.classList.add('not-empty');

            additionalItemsChecked.forEach(additionalItemChecked => {
                let additionalItemCheckedTitle = additionalItemChecked.value;
                let additionalItemCheckedPrice = parseInt(additionalItemChecked.getAttribute('data-price'));

                totalPrice += (additionalItemCheckedPrice*totalDays);
                additionalInfoContent += '<li>'+additionalItemCheckedTitle+'<span>'+additionalItemCheckedPrice*totalDays+' '+leoCurrency+'</span></li>';
            });
            additionalInfoBlock.querySelector('ul').innerHTML = additionalInfoContent;
        }else{
            additionalInfoBlock.classList.remove('not-empty');
            additionalInfoBlock.querySelector('ul').innerHTML = '';
        }


        document.querySelector('.fields-right .total-price').innerText = totalPrice;
        document.querySelector('.deposit span').innerText = depositPrice;
    }
}