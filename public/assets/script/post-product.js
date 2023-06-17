const listItem = document.querySelectorAll(".list-item");
const category = document.getElementById("category");

const fkProduct = document.querySelector(".product-name-fk");
const productNameInput = document.getElementById("product-name");

const fkQuantity = document.querySelector(".quantity-input");
const quantityInput = document.getElementById("quantity");

const fkPrice = document.querySelector(".price-input");
const priceInput = document.getElementById("price");

const uploadBtn = document.querySelector(".fake-upload-btn");
const files = document.querySelectorAll(".imgUpload");
const previewImage = document.querySelectorAll(".prev-img");

listItem.forEach((list) => {
    list.addEventListener("click", () => {
        category.value = listItem.value;
    });
});

fkProduct.addEventListener("input", () => {
    productNameInput.value = fkProduct.value;
});

fkQuantity.addEventListener("input", () => {
    quantityInput.value = fkQuantity.value;
});

fkPrice.addEventListener("input", () => {
    priceInput.value = fkPrice.value;
});

let currentIndex = 0;

uploadBtn.addEventListener("click", () => {
    files[currentIndex].click();

    files[currentIndex].addEventListener("change", (event) => {
        const file = event.target.files[0];
        let filePath = URL.createObjectURL(file);
        previewImage[currentIndex].src = filePath;
        console.log("hehe")
    });

    currentIndex = (currentIndex + 1) % files.length; 
    console.log(currentIndex);

});