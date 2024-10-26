//REMOVE WISHLIST TEXT
let pweza_product_wishlist = document.getElementsByClassName("pweza-product-wishlist")
if(pweza_product_wishlist){
    for(let counter = 0; counter < pweza_product_wishlist.length; counter++){
        let pweza_product_wishlist_anchor = pweza_product_wishlist[counter].querySelector('a')
        function pwezaIconUpdate(){
            pweza_product_wishlist_anchor.style.opacity=0;
            let pweza_product_wishlist_anchor_icon = pweza_product_wishlist_anchor.querySelector('i').outerHTML
            pweza_product_wishlist_anchor.innerHTML= pweza_product_wishlist_anchor_icon
            setTimeout(()=>{
                pweza_product_wishlist_anchor.style.opacity=1;
            },3000)
        }
        pwezaIconUpdate()
        pweza_product_wishlist_anchor.addEventListener("click", pwezaIconUpdate)
    }
}