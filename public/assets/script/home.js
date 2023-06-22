var element = document.querySelectorAll('.product'); 

element.forEach((elm) => {
    elm.addEventListener('click', () => {
        productId = elm.getAttribute('data-id');
        window.location.href = "product-detail.php?id=" + productId; 
    });
});
