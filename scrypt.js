document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector('header');
    function fixednavbar() {
        header.classList.toggle('scroll', window.pageYOffset > 0);
    }
    fixednavbar();
    window.addEventListener('scroll', fixednavbar);

    let menu = document.querySelector('#menu-btn');
    let userbtn = document.querySelector('#user-btn');
    menu.addEventListener('click', function() {
        let nav = document.querySelector('.navbar');
        nav.classList.toggle('active');
    })
    userbtn.addEventListener('click', function() {
        let userbox = document.querySelector('.user-box');
        userbox.classList.toggle('active');
    })
});
function showDescription(element) {
    var description = element.querySelector('.description');
    if (description.style.display === "block") {
        description.style.display = "none";
    } else {
        description.style.display = "block";
    }
}

function createPageButtons() {

    const oldPageLinks = document.querySelectorAll('.page-link');
    oldPageLinks.forEach(link => link.remove());

    let startPage = currentPage + 1;
    if (startPage % 5 !== 1) {
        startPage = Math.floor(startPage / 5) * 5 + 1;
    }

    
    for (let i = startPage; i <= startPage + 4; i++) {
        const pageLink = document.createElement('a');
        pageLink.href = '#';
        pageLink.classList.add('page-link');
        pageLink.textContent = i;
        pagination.insertBefore(pageLink, nextPage);
    }
    currentPage += 4;

    const newPageLinks = document.querySelectorAll('.page-link');
    newPageLinks.forEach(link => {
        link.addEventListener('click', function() {
            console.log("Clicked on page: " + link.textContent);
        });
    });
}





function showDescription(element) {
    var descriptions = document.querySelectorAll('.row .description');
    var addToCartButtons = document.querySelectorAll('.row .add-to-cart');

    descriptions.forEach(function(description) {
        description.style.display = 'none';
    });

    addToCartButtons.forEach(function(button) {
        button.style.display = 'none';
    });

    var description = element.querySelector('.description');
    var addToCartButton = element.querySelector('.add-to-cart');

    description.style.display = 'block';
    addToCartButton.style.display = 'block';
}
function addToCart(productElement) {
    const productName = productElement.querySelector('.price h4').innerText;
    const productPrice = productElement.querySelector('.price p').innerText;
    const productImage = productElement.querySelector('img').src;
    const productQuantity = productElement.querySelector('.quantity').value;

    const cartItem = {
        name: productName,
        price: productPrice,
        image: productImage,
        quantity: parseInt(productQuantity, 10)
    };

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(cartItem);
    localStorage.setItem('cart', JSON.stringify(cart));

    alert('Product added to cart!');
}
function removeFromCart(productName) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.name !== productName);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}
function loadCart() {
    const cartTableBody = document.querySelector('.cart-list tbody');
    cartTableBody.innerHTML = ''; // Clear the existing rows

    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalProducts = 0;
    let totalPrice = 0;

    cart.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${item.image}" alt=""></td>
            <td>${item.name}</td>
            <td>${item.price}</td>
            <td>${item.quantity}</td>
            <td>${(parseFloat(item.price.replace('EGP', '')) * item.quantity).toFixed(2)} EGP</td>
            <td><button class="btn" onclick="removeFromCart('${item.name}')">Remove</button></td>
        `;
        cartTableBody.appendChild(row);

        totalProducts += item.quantity;
        totalPrice += parseFloat(item.price.replace('EGP', '')) * item.quantity;
    });

    const totalRow = document.createElement('tr');
    totalRow.innerHTML = `
        <td colspan="2">Total Products = ${totalProducts}</td>
        <td colspan="4">Total Price = ${totalPrice.toFixed(2)} EGP</td>
    `;
    cartTableBody.appendChild(totalRow);
}

document.addEventListener('DOMContentLoaded', loadCart);


