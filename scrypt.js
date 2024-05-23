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

