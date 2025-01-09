// scripts.js
const buttons = document.querySelectorAll("button");
buttons.forEach(button => {
    button.addEventListener("click", () => {
        alert("Produit ajouté au panier !");
    });
});
