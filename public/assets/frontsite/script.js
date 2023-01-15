const hamburger = document.querySelector("#hamburger");
const isimateri = document.querySelector("#isi-materi");
const isifaq2 = document.querySelector("#isi-faq2");
const hamburger5 = document.querySelector("#hamburger5");
const isifaq = document.querySelector("#isi-faq");
const hamburger2 = document.querySelector("#hamburger2");
const hamburger3 = document.querySelector("#hamburger3");
const isifaq3 = document.querySelector("#isi-faq3");
const hamburger4 = document.querySelector("#hamburger4");
const isifaq4 = document.querySelector("#isi-faq4");
const totop = document.querySelector("#btn-top");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    isimateri.classList.toggle("hidden");
});
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger2-active");
    isifaq2.classList.toggle("hidden");
});

hamburger5.addEventListener("click", function () {
    hamburger5.classList.toggle("hamburger5-active");
    isifaq.classList.toggle("hidden");
});

hamburger3.addEventListener("click", function () {
    hamburger3.classList.toggle("hamburger3-active");
    isifaq3.classList.toggle("hidden");
});

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        totop.classList.add("active");
    } else {
        totop.classList.remove("remove");
    }
});

// hamburger4.addEventListener("click", function () {
//     hamburger4.classList.toggle("hamburger4-active");
//     isifaq4.classList.toggle("hidden");
// });
