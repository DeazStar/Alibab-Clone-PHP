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

const fkSubmitBtn = document.querySelector(".fake-submit-btn");
const submitBtn = document.getElementById("submit-btn");

listItem.forEach((list) => {
    list.addEventListener("click", () => {
        listItem.forEach((otherList) => {
            otherList.classList.remove('selected');
        });

        list.classList.add("selected");
        category.value = list.innerText;
        console.log(category.value);
    });
});

fkProduct.addEventListener("input", () => {
    productNameInput.value = fkProduct.value;
    console.log(productNameInput.value);
});

fkQuantity.addEventListener("input", () => {
    quantityInput.value = fkQuantity.value;
    console.log(quantityInput.value);
});

fkPrice.addEventListener("input", () => {
    priceInput.value = fkPrice.value;
    console.log(priceInput.value);
});

let currentIndex = 0;

uploadBtn.addEventListener("click", () => {
    files[currentIndex].click();

    files[currentIndex].addEventListener("change", (event) => {
        const file = event.target.files[0];
        let filePath = URL.createObjectURL(file);
        previewImage[currentIndex].src = filePath;
        currentIndex = (currentIndex + 1) % files.length; 
    });

});

fkSubmitBtn.addEventListener("click", () => {
    submitBtn.click();
})