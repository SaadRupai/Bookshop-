document.getElementById('case-decrease').addEventListener('click', function(){
    handleProductChange('case',false);
 })

 document.getElementById('phone-increase').addEventListener('click', function(){
    handleProductChange('phone',true);
 })

 document.getElementById('check-out').addEventListener('click', function(){
     showAlert();
 })

 function showAlert(){
     alert('Check out Successful!');
 }
 function handleProductChange(product, isIncrease){
    const productInput=document.getElementById(product+'-count');
    const productCount=parseInt(productInput.value);
    let productNewCount=productCount;
    if(isIncrease==true){
       productNewCount=productCount+1;
    }
    if(isIncrease==false && productCount>0){
       productNewCount=productCount-1;
    }
    productInput.value=productNewCount;
    // const caseTotal=caseNewCount*59;
    let productTotal=productNewCount;
    if(product=='phone'){
       productTotal=productNewCount*50;
    }
    if(product=='case'){
       productTotal=productNewCount*70;
    }
    document.getElementById(product+'-total').innerText='$' + productTotal;
    calculateTotal();
 }

 function calculateTotal(){
    const phoneInput=document.getElementById('phone-count');
    const phoneCount=parseInt(phoneInput.value);
    
    const caseCount=getInputValue('case');

    const totalPrice=phoneCount*50 + caseCount*70;
    document.getElementById('total-price').innerText='$' + totalPrice;

    const tax=(totalPrice * 0.1).toFixed(3);
    document.getElementById('tax-amount').innerText='$' + tax;

    const grandTotal=(tax + totalPrice).toFixed(3);
    document.getElementById('grand-total').innerText='$' + grandTotal;

 }

 function getInputValue(product){
    const productInput=document.getElementById(product+'-count');
    const productCount=parseInt(productInput.value);
    return productCount;
 }