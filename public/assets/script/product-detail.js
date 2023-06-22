const quantity = document.getElementById("quantity");
const product = document.querySelector(".product-name");
const productId = product.getAttribute('data-id');
const submitBtn = document.querySelector(".order-button");
const rlQuantity = document.getElementById("rl-quantity");
const rlSubmit = document.getElementById("rl-submit-btn");


submitBtn.addEventListener("click", () => {
    rlQuantity.value = quantity.value;
    rlSubmit.click();
});

