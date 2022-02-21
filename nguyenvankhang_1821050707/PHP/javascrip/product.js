const product_check = document.querySelectorAll('.nav_banner_product_item');
const product_icon  = document.querySelector('.product__child');

function showCategory() {
    product_icon.classList.toggle('action');
}

for (const product of product_check){
    product.addEventListener('click', showCategory)
}


