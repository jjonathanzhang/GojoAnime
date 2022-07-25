document.addEventListener("DOMContentLoaded", () => {

    watchlistBtn = document.querySelector("#watchlist-btn");
    aboutBtn = document.querySelector("#about-btn");
    registerBtn = document.querySelector("#register-btn");

    watchlistBtn.addEventListener("click", () => {

        document.querySelector("#watchlist").style.display = "block";
        document.querySelector("#about").style.display = "hidden";
        document.querySelector("#register").style.display = "hidden";
    });

    aboutBtn.addEventListener("click", () => {
        
        document.querySelector("#watchlist").style.display = "hidden";
        document.querySelector("#about").style.display = "block";
        document.querySelector("#register").style.display = "hidden";
    });

    registerBtn.addEventListener("click", () => {
        
        document.querySelector("#watchlist").style.display = "hidden";
        document.querySelector("#about").style.display = "hidden";
        document.querySelector("#register").style.display = "block";
    });

});