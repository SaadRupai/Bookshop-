// const logSec = document.getElementById('loginSection');
//     logSec.style.display = 'none';

//     const regSec = document.getElementById('regSection');
//     regSec.style.display = 'none';

//     const homeBtn = document.getElementById('homebtn');
//     homeBtn.addEventListener('click', function () {
//       document.getElementById('loginSection').style.display = 'none';
//       document.getElementById('regSection').style.display = 'none';
//       document.getElementById('homePage').style.display = 'block';
//     })
    
//     const navLoginBtn = document.getElementById('loginReg');
//     navLoginBtn.addEventListener('click', function () {
//       document.getElementById('homePage').style.display = 'none';
//       document.getElementById('loginSection').style.display = 'block';
//       document.getElementById('regSection').style.display = 'none';
//     })
    
//     const signUpBtn = document.getElementById('signUp');
//     signUpBtn.addEventListener('click', function () {
//       document.getElementById('loginSection').style.display = 'none';
//       document.getElementById('regSection').style.display = 'block';
//       document.getElementById('homePage').style.display = 'none';
//     })
    
//     const regSubBtn=document.getElementById('regbutton');
//     regSubBtn.addEventListener('click', function(){
//       alert('Registration Successful');
//     })

//     document.getElementById('shopping-cart').addEventListener('click', function(){
//       document.getElementById('loginSection').style.display = 'none';
//       document.getElementById('regSection').style.display = 'none';
//       document.getElementById('homePage').style.display = 'none';
//       document.getElementById('cart-section').style.display = 'block';
//     })

//     function shoppingCartUpdate(){
//       const shoppingCart = document.getElementById('shopping-icon');
//       const shoppingCartCount = parseInt(shoppingCart.innerText);
//       const shoppingCartCountNew = shoppingCartCount + 1;

//       shoppingCart.innerText = shoppingCartCountNew;
//     }



// document.getElementById('case-decrease').addEventListener('click', function(){
//     handleProductChange('case',false);
//  })

//  document.getElementById('phone-increase').addEventListener('click', function(){
//     handleProductChange('phone',true);
//  })

//  function handleProductChange(product, isIncrease){
//     const productInput=document.getElementById(product+'-count');
//     const productCount=parseInt(productInput.value);
//     let productNewCount=productCount;
//     if(isIncrease==true){
//        productNewCount=productCount+1;
//     }
//     if(isIncrease==false && productCount>0){
//        productNewCount=productCount-1;
//     }
//     productInput.value=productNewCount;
//     // const caseTotal=caseNewCount*59;
//     let productTotal=productNewCount;
//     if(product=='phone'){
//        productTotal=productNewCount*1219;
//     }
//     if(product=='case'){
//        productTotal=productNewCount*59;
//     }
//     document.getElementById(product+'-total').innerText='$' + productTotal;
//     calculateTotal();
//  }

//  function calculateTotal(){
//     const phoneInput=document.getElementById('phone-count');
//     const phoneCount=parseInt(phoneInput.value);
    
//     const caseCount=getInputValue('case');

//     const totalPrice=phoneCount*1219 + caseCount*59;
//     document.getElementById('total-price').innerText='$' + totalPrice;

//     const tax=(totalPrice * 0.1).toFixed(3);
//     document.getElementById('tax-amount').innerText='$' + tax;

//     const grandTotal=tax + totalPrice;
//     document.getElementById('grand-total').innerText='$' + grandTotal;

//  }

//  function getInputValue(product){
//     const productInput=document.getElementById(product+'-count');
//     const productCount=parseInt(productInput.value);
//     return productCount;
//  }