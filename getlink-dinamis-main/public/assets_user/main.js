const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
const navAni = document.querySelectorAll(".navAni");
const aniLeft = document.querySelectorAll(".aniLeft");

hiddenElements.forEach((el) => observer.observe(el));
navAni.forEach((el) => observer.observe(el));
aniLeft.forEach((el) => observer.observe(el));

const buttonSide = document.querySelector(".button-side");
const aside = document.querySelector(".aside");

buttonSide.addEventListener("click", function () {
  aside.classList.toggle("tampil");
});

// const lanjut = document.getElementById("lanjut");

// function showDiv(divNumber) {
//   // sembunyikan semua div
//   document.getElementById("div").style.display = "none";
//   document.getElementById("div1").style.display = "none";
//   document.getElementById("div2").style.display = "none";
//   document.getElementById("div3").style.display = "none";
//   document.getElementById("div4").style.display = "none";
//   document.getElementById("div5").style.display = "none";

//   // tampilkan div yang dipilih
//   document.getElementById("div" + divNumber).style.display = "block";

//   lanjut.addEventListener("click", function () {
//     document.getElementById("div" + divNumber).style.display = "block";
//   })
// }








