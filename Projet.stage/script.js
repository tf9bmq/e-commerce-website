document.getElementById("mobile-menu-toggle").addEventListener("click", () => {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
});
document.getElementById("mobile-menu").addEventListener("click", () => {
    const menu = document.getElementById("mobile-menu");
    menu.classList.toggle("hidden");
});
window.addEventListener('click', function (event) {
    const menu = document.getElementById("mobile-menu");
    if (!menu.contains(event.target) && !document.getElementById("mobile-menu-toggle").contains(event.target)) {
        menu.classList.add('hidden');
    }
});
var mainimg = document.getElementById("mainimg");
var smallimg = document.getElementsByClassName("smallimg")
smallimg[0].onclick = function () {
    mainimg.src = smallimg[0].src;
}
smallimg[1].onclick = function () {
    mainimg.src = smallimg[1].src;
}
smallimg[2].onclick = function () {
    mainimg.src = smallimg[2].src;
}
smallimg[3].onclick = function () {
    mainimg.src = smallimg[3].src;
}
smallimg[4].onclick = function () {
    mainimg.src = smallimg[4].src;
};


