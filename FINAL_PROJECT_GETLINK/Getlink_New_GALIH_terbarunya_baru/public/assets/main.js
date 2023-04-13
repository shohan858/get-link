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
const aniRight = document.querySelectorAll(".aniRight");

hiddenElements.forEach((el) => observer.observe(el));
navAni.forEach((el) => observer.observe(el));
aniLeft.forEach((el) => observer.observe(el));
aniRight.forEach((el) => observer.observe(el));

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




// Get the modal
// var sudahModal = document.getElementById("sudah");

// Get the button that opens the modal
// var sudahBtn = document.getElementById("btnSudah");

// Get the <span> element that closes the modal
// var sudahSpan = document.getElementsByClassName("sudahClose")[0];

// When the user clicks the button, open the modal 
// sudahBtn.onclick = function () {
//   window.location.href = "dashboard.html"
//   sudahModal.style.display = "block";
// };

// When the user clicks on <span> (x), close the modal
// sudahSpan.onclick = function () {
//   sudahModal.style.display = "none";
// };

// When the user clicks anywhere outside of the modal, close it
// sudahModal.onclick = function (event) {
//   if (event.target == sudahModal) {
//     sudahModal.style.display = "none";
//   }
// };



