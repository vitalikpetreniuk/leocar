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

    let receiveDateEdit = document.querySelector('.fields-right .receive-info .edit');
    let returnDateEdit = document.querySelector('.fields-right .return-info .edit');
    if(receiveDateEdit) {
        receiveDateEdit.addEventListener('click', () => {
            receiveDateEdit.parentElement.parentElement.classList.toggle('open');
        });
        returnDateEdit.addEventListener('click', () => {
            returnDateEdit.parentElement.parentElement.classList.toggle('open');
        });
    }

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


    let checkoutForm = document.querySelector('.checkoutForm');
    if(checkoutForm) {
        let receiveDate = document.querySelector('input#receive-date');
        let returnDate = document.querySelector('input#return-date');

        if(receiveDate) {
            let datepicker = new Datepicker(receiveDate, {
                daysOfWeekDisabled: [0,6],
                disableTouchKeyboard: true,
                format: 'dd/mm/yyyy',
                autohide: true,
            });
        }
        if(returnDate) {
            let datepicker = new Datepicker(returnDate, {
                daysOfWeekDisabled: [0,6],
                disableTouchKeyboard: true,
                format: 'dd/mm/yyyy',
                autohide: true,
            });
        }
        changeLocation(checkoutForm.querySelector('.choose-receive'),checkoutForm.querySelector('.choose-receive > span'),checkoutForm.querySelector('.choose-receive > ul'), checkoutForm.querySelector('.choose-receive > select'));
        changeLocation(checkoutForm.querySelector('.choose-return'),checkoutForm.querySelector('.choose-return > span'),checkoutForm.querySelector('.choose-return > ul'), checkoutForm.querySelector('.choose-return > select'));

        changeTime(checkoutForm.querySelector('#receive-time + div'), checkoutForm.querySelector('#receive-time'));
        changeTime(checkoutForm.querySelector('#return-time + div'), checkoutForm.querySelector('#return-time'));

        function changeLocation(block, blockSpan, blockUl, blockSelect){
            blockSpan.addEventListener('click', () => {
                block.classList.toggle('open');
            });
            let receiveOptions = blockUl.querySelectorAll('li');
            receiveOptions.forEach(option => {
                option.addEventListener('click', () => {
                    receiveOptions.forEach(item => item.classList.remove('active'));
                    option.classList.add('active');
                    block.classList.remove('empty');
                    blockSpan.innerHTML = option.innerHTML;
                    blockSelect.value = option.getAttribute('data-value');
                    block.classList.remove('open');
                });
            });
        }
        function changeTime(timeBlock, timeSelect){
            timeBlock.querySelector('span').addEventListener('click', () => {
                timeBlock.classList.toggle('open');
                console.log('yes');
            });

            let timeOptions = timeBlock.querySelectorAll('ul li');
            timeOptions.forEach(option => {
                option.addEventListener('click', () => {
                    timeOptions.forEach(item => item.classList.remove('active'));
                    option.classList.add('active');

                    timeBlock.querySelector('span').innerHTML = option.innerHTML;
                    timeSelect.value = option.getAttribute('data-value');
                    timeBlock.classList.remove('open');
                });
            });
        }
    }
}