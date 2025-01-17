document.addEventListener("DOMContentLoaded", function() {

    // Get hold of the 'button' elements for each page.
    watchlistBtn = document.querySelector("#watchlist-btn");
    aboutBtn = document.querySelector("#about-btn");
    registerBtn = document.querySelector("#register-btn");

    // The default is to show only 'watchlist'.
    document.querySelector("#about").style.display = "none";
    document.querySelector("#register").style.display = "none";

    // For each button, once it's clicked, show the corresponding 'div'
    // and hide the other two.
    watchlistBtn.addEventListener("click", () => {

        document.querySelector("#watchlist").style.display = "block";
        document.querySelector("#about").style.display = "none";
        document.querySelector("#register").style.display = "none";
    });

    aboutBtn.addEventListener("click", () => {
        
        document.querySelector("#watchlist").style.display = "none";
        document.querySelector("#about").style.display = "block";
        document.querySelector("#register").style.display = "none";
    });

    registerBtn.addEventListener("click", () => {
        
        document.querySelector("#watchlist").style.display = "none";
        document.querySelector("#about").style.display = "none";
        document.querySelector("#register").style.display = "block";
    });

    // just testing some stuff
    Particles.init({
        selector: '.background',
        color: ['#DA0463', '#404B69', '#DBEDF3'],
        connectParticles: true
    });

});