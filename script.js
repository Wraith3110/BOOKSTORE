
const bar=document.getElementById('ham');
const close=document.getElementById('close');
const nav=document.getElementById('navBar');
 if(bar){
   bar.addEventListener('click',()=>{
    nav.classList.add('show');
   })
 }
 if(close){
    close.addEventListener('click',()=>{
     nav.classList.remove('show');
    })
  }
// $('c3').onclick{
//   $('pr3').hide();
//  }



