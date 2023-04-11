<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const bars = document.getElementById("bars")

    bars.addEventListener("click", function() {
        if (bars.classList.contains("fa-xmark")) {
            bars.classList.remove("fa-xmark");
            bars.classList.add("fa-bars");
        } else {
            bars.classList.remove("fa-bars");
            bars.classList.add("fa-xmark");
        }
    })
    const buttonSide = document.querySelector(".button-side");
    const aside = document.querySelector(".aside");

    buttonSide.addEventListener("click", function() {
        aside.classList.toggle("tampil");
    });
</script>
<script>
    const buttonSide = document.querySelector(".button-side");
    const aside = document.querySelector(".asideLang");

    buttonSide.addEventListener("click", function() {
        aside.classList.toggle("tampilLang");
    });
</script>
<script>
    const buttonSide = document.querySelector(".pages5-buttonside");
    const aside = document.querySelector(".pages2-aside");

    buttonSide.addEventListener("click", function() {
        aside.classList.toggle("pages5-tampil");
    });

    const buttons = document.querySelectorAll(
        ".pages2-button1, .pages2-button2, .pages2-button3, .pages2-button4, .pages2-button5"
    );
    const specialClasses = [
        "special1",
        "special2",
        "special3",
        "special4",
        "special5",
    ];

    const spesSvg = [
        "spesSvg1",
        "spesSvg2",
        "spesSvg3",
        "spesSvg4",
        "spesSvg5",
    ];

    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            buttons.forEach((btn) => {
                specialClasses.forEach((cls) => {
                    btn.classList.remove(cls);
                });
                spesSvg.forEach((asa) => {
                    btn.classList.remove(asa);
                });
            });
            button.classList.add(specialClasses[index]);
            button.classList.add(spesSvg[index]);
        });
    });
</script>
<script>
    const button1 = document.getElementById("btn-1");
    const button2 = document.getElementById("btn-2");
    const button3 = document.getElementById("btn-3");
    const button4 = document.getElementById("btn-4");
    const button5 = document.getElementById("btn-5");

    const div = document.getElementById("div");
    const div1 = document.getElementById("div1");
    const div2 = document.getElementById("div2");
    const div3 = document.getElementById("div3");
    const div4 = document.getElementById("div4");
    const div5 = document.getElementById("div5");

    const buttons = document.querySelectorAll(
        ".pages3-card1, .pages3-card2, .pages3-card3, .pages3-card4, .pages3-card5"
    );

    const specialClasses = ["spec1", "spec2", "spec3", "spec4", "spec5"];

    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            buttons.forEach((btn) => {
                specialClasses.forEach((cls) => {
                    btn.classList.remove(cls);
                });
            });
            button.classList.add(specialClasses[index]);
        });
    });

    button1.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "block";
        // button1.classList.add("spec1");
        div2.style.display = "none";
        div3.style.display = "none";
        div4.style.display = "none";
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button1");
    });

    button2.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "block";
        // button2.classList.add("spec2");
        div3.style.display = "none";
        div4.style.display = "none";
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button2");
    });

    button3.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "block";
        // button3.classList.add("spec3");
        div4.style.display = "none";
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button3");
    });

    button4.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "none";
        div4.style.display = "block";
        // button4.classList.add("spec4");
        div5.style.display = "none";
        sessionStorage.setItem("lastButtonClicked", "button4");
    });

    button5.addEventListener("click", () => {
        div.style.display = "none";
        div1.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "none";
        div4.style.display = "none";
        div5.style.display = "block";
        // button5.classList.add("spec5");
        sessionStorage.setItem("lastButtonClicked", "button5");
    });

    const buttonSide = document.querySelector(".pages5-buttonside");
    const aside = document.querySelector(".pages3-aside");

    buttonSide.addEventListener("click", function() {
        aside.classList.toggle("pages5-tampil");
    });

    var Commodal = document.getElementById("CompoModal");

    // Get the button that opens the modal
    var Combtn = document.getElementById("CCOpmBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("compo-close")[0];

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == Commodal) {
            Commodal.style.display = "none";
        }
    };
</script>
<script>
    const lastButtonClicked = sessionStorage.getItem("lastButtonClicked");
    const dav = document.getElementById("div");

    if (lastButtonClicked === "button1") {
        dav.style.display = "none";
        div1.style.display = "block";
    } else if (lastButtonClicked === "button2") {
        dav.style.display = "none";
        div2.style.display = "block";
    } else if (lastButtonClicked === "button3") {
        dav.style.display = "none";
        div3.style.display = "block";
    } else if (lastButtonClicked === "button4") {
        dav.style.display = "none";
        div4.style.display = "block";
    } else if (lastButtonClicked === "button5") {
        dav.style.display = "none";
        div5.style.display = "block";
    }

    const buttonSide = document.querySelector(".pages5-buttonside");
    const aside = document.querySelector(".pages4-aside");

    buttonSide.addEventListener("click", function() {
        aside.classList.toggle("pages5-tampil");
    });

    var Commodal = document.getElementById("CompoModal");

    // Get the button that opens the modal
    var Combtn = document.getElementById("CCOpmBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("compo-close")[0];

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == Commodal) {
            Commodal.style.display = "none";
        }
    };
</script>
<script src="{{ asset('assets/summernote/summernote-lite.js') }}"></script>

<script>
    const parent = document.getElementById("pgKr");
    const children = document.querySelectorAll(".pages5-komponen-2");

    let draggingChild = null;

    children.forEach((child) => {
        const grandchild = child.querySelector(".div3Dot-drop");
        if (grandchild) {
            const upButton = grandchild.querySelector(".up");
            const downButton = grandchild.querySelector(".down");

            upButton.addEventListener("click", () => {
                const prevSibling = child.previousElementSibling;
                if (prevSibling) {
                    parent.insertBefore(child, prevSibling);
                }
            });

            downButton.addEventListener("click", () => {
                const nextSibling = child.nextElementSibling;
                if (nextSibling) {
                    parent.insertBefore(nextSibling, child);
                } else {
                    parent.appendChild(child);
                }
            });

            grandchild.addEventListener("dragstart", () => {
                draggingChild = child;
            });

            grandchild.addEventListener("dragend", () => {
                draggingChild = null;
            });

            grandchild.addEventListener("dragover", (e) => {
                e.preventDefault();
                const target = e.target.closest(".pages5-komponen-2");
                if (target && target !== draggingChild) {
                    const rect = target.getBoundingClientRect();
                    const y = e.clientY - rect.top;
                    if (y < rect.height / 2) {
                        parent.insertBefore(draggingChild, target);
                    } else {
                        parent.insertBefore(draggingChild, target.nextElementSibling);
                    }
                }
            });
        }
    });
</script>

kate<script>
    const buttonPrew = document.querySelector(".pages5-tambah-prew");
    const prew1 = document.getElementById("prew1");
    const prew2 = document.getElementById("prew2");

    buttonPrew.addEventListener("click", function() {
        prew1.classList.toggle("pages5kirPrew");
        prew2.classList.toggle("pages5Prew");
        buttonPrew.classList.add("preew");
    });

    window.onclick = function(event) {
        if (event.target == buttonPrew) {
            buttonPrew.classList.remove("preew");
        }
    };

    const buttonSide = document.querySelector(".pages5-buttonside");
    const aside = document.querySelector(".pages5-aside");

    buttonSide.addEventListener("click", function() {
        aside.classList.toggle("pages5-tampil");
    });

    var delmodal = document.getElementById("DelComModal");

    // Get the button that opens the modal
    var delbtn1 = document.getElementById("del1");

    // Get the <span> element that closes the modal
    var delspan = document.getElementsByClassName("del-close")[0];

    // When the user clicks the button, open the modal
    delbtn1.onclick = function() {
        delmodal.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    delspan.onclick = function() {
        delmodal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == delmodal) {
            delmodal.style.display = "none";
        }
    };

    const elements = document.querySelectorAll(".pages5-komponen-2");

    let currentElement = null;

    elements.forEach((element) => {
        element.addEventListener("dragstart", () => {
            currentElement = element;
        });

        element.addEventListener("dragover", (event) => {
            event.preventDefault();
        });

        element.addEventListener("drop", () => {
            const dropZone = event.target.closest(".pages5-komponen-2");

            if (dropZone && dropZone !== currentElement) {
                const parent = currentElement.parentNode;
                const indexCurrentElement = Array.prototype.indexOf.call(
                    parent.children,
                    currentElement
                );
                const indexDropZone = Array.prototype.indexOf.call(
                    parent.children,
                    dropZone
                );

                if (indexCurrentElement < indexDropZone) {
                    parent.insertBefore(currentElement, dropZone.nextSibling);
                } else {
                    parent.insertBefore(currentElement, dropZone);
                }
            }

            currentElement = null;
        });
    });

    var Commodal = document.getElementById("CompoModal");

    // Get the button that opens the modal
    var Combtn = document.getElementById("CCOpmBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("compo-close")[0];

    var sdhPlh = document.getElementById("sudahPilih");

    // When the user clicks the button, open the modal
    Combtn.onclick = function() {
        Commodal.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        Commodal.style.display = "none";
    };

    sdhPlh.onclick = function() {
        console.log("098");
        Commodal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == Commodal) {
            Commodal.style.display = "none";
        }
    };

    $(document).ready(function() {
        $("#summernote").summernote({
            focus: true,

            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["font", ["fontsize", "forecolor"]],
                ["color", ["backcolor"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["height", ["height"]],
                ["insert", ["link"]],
                ["view", ["fullscreen", "codeview", "help"]],
            ],
            disablePicture: true,
            disableVideo: true,
        });
    });

    $(document).ready(function() {
        $("#summernote2").summernote({
            focus: true,

            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["font", ["fontsize", "forecolor"]],
                ["color", ["backcolor"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["height", ["height"]],
                ["insert", ["link"]],
                ["view", ["fullscreen", "codeview", "help"]],
            ],
            disablePicture: true,
            disableVideo: true,
        });
    });

    $(document).ready(function() {
        $("#summernote3").summernote({
            focus: true,

            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["font", ["fontsize", "forecolor"]],
                ["color", ["backcolor"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["height", ["height"]],
                ["insert", ["link"]],
                ["view", ["fullscreen", "codeview", "help"]],
            ],
            disablePicture: true,
            disableVideo: true,
        });
    });

    // Dropdown

    var dropdownBtn0 = document.getElementById("dropdown-btn-0");
    var dropdownBtn1 = document.getElementById("dropdown-btn-1");
    var dropdownBtn3 = document.getElementById("dropdown-btn-2");
    var dropdownBtn4 = document.getElementById("dropdown-btn-3");
    var dropdownBtn5 = document.getElementById("dropdown-btn-4");
    var dropdownBtn6 = document.getElementById("dropdown-btn-5");
    var dropdownBtn7 = document.getElementById("dropdown-btn-6");
    var dropdownBtn8 = document.getElementById("dropdown-btn-7");
    var dropdownBtn9 = document.getElementById("dropdown-btn-8");
    var dropdownBtn10 = document.getElementById("dropdown-btn-9");
    var dropdownBtn11 = document.getElementById("dropdown-btn-10");
    var dropdownContent0 = document.getElementById("dropdown-content-0");
    var dropdownContent1 = document.getElementById("dropdown-content1");
    var dropdownContent3 = document.getElementById("dropdown-content-2");
    var dropdownContent4 = document.getElementById("dropdown-content-3");
    var dropdownContent5 = document.getElementById("dropdown-content-4");
    var dropdownContent6 = document.getElementById("dropdown-content-5");
    var dropdownContent7 = document.getElementById("dropdown-content-6");
    var dropdownContent8 = document.getElementById("dropdown-content-7");
    var dropdownContent9 = document.getElementById("dropdown-content-8");
    var dropdownContent10 = document.getElementById("dropdown-content-9");
    var dropdownContent11 = document.getElementById("dropdown-content-10");

    dropdownBtn1.addEventListener("click", function() {
        dropdownContent1.classList.toggle("drop-tampil-1");
    });

    dropdownBtn0.addEventListener("click", function() {
        dropdownContent0.classList.toggle("drop-tampil-1");
    });

    dropdownBtn3.addEventListener("click", function() {
        dropdownContent3.classList.toggle("drop-tampil-1");
    });

    dropdownBtn4.addEventListener("click", function() {
        dropdownContent4.classList.toggle("drop-tampil-1");
    });

    dropdownBtn5.addEventListener("click", function() {
        dropdownContent5.classList.toggle("drop-tampil-1");
    });

    dropdownBtn6.addEventListener("click", function() {
        dropdownContent6.classList.toggle("drop-tampil-1");
    });
    dropdownBtn7.addEventListener("click", function() {
        dropdownContent7.classList.toggle("drop-tampil-1");
    });

    dropdownBtn8.addEventListener("click", function() {
        dropdownContent8.classList.toggle("drop-tampil-1");
    });
    dropdownBtn9.addEventListener("click", function() {
        dropdownContent9.classList.toggle("drop-tampil-1");
    });
    dropdownBtn10.addEventListener("click", function() {
        dropdownContent10.classList.toggle("drop-tampil-1");
    });
    dropdownBtn11.addEventListener("click", function() {
        dropdownContent11.classList.toggle("drop-tampil-1");
    });

    // End dropdown

    // Switch

    const btnSwitch1 = document.getElementById("btnSwitch");
    const btnSwitch2 = document.getElementById("btnSwitch2");
    const btnSwitch3 = document.getElementById("btnSwitch3");
    const btnSwitch4 = document.getElementById("btnSwitch4");
    const btnSwitch5 = document.getElementById("btnSwitch5");
    const btnSwitch6 = document.getElementById("btnSwitch6");
    const btnSwitch7 = document.getElementById("btnSwitch7");
    const btnSwitch8 = document.getElementById("btnSwitch8");
    const btnSwitch9 = document.getElementById("btnSwitch9");
    const btnSwitch10 = document.getElementById("btnSwitch10");
    const btnSwitch11 = document.getElementById("btnSwitch11");
    const comp1 = document.getElementById("pages5Kom1");
    const comp2 = document.getElementById("pages5Kom2");
    const comp3 = document.getElementById("pages5Kom3");
    const comp4 = document.getElementById("pages5Kom4");
    const comp5 = document.getElementById("pages5Kom5");
    const comp6 = document.getElementById("pages5Kom6");
    const comp7 = document.getElementById("pages5Kom7");
    const comp8 = document.getElementById("pages5Kom8");
    const comp9 = document.getElementById("pages5Kom9");
    const comp10 = document.getElementById("pages5Kom10");
    const comp11 = document.getElementById("pages5Kom11");

    btnSwitch1.addEventListener("click", function() {
        if (comp1.style.opacity === "0.5") {
            comp1.style.opacity = "1";
        } else {
            comp1.style.opacity = "0.5";
        }
    });

    btnSwitch2.addEventListener("click", function() {
        if (comp2.style.opacity === "0.5") {
            comp2.style.opacity = "1";
        } else {
            comp2.style.opacity = "0.5";
        }
    });

    btnSwitch3.addEventListener("click", function() {
        if (comp3.style.opacity === "0.5") {
            comp3.style.opacity = "1";
        } else {
            comp3.style.opacity = "0.5";
            eye.src = "assets/img/";
        }
    });

    btnSwitch4.addEventListener("click", function() {
        if (comp4.style.opacity === "0.5") {
            comp4.style.opacity = "1";
        } else {
            comp4.style.opacity = "0.5";
        }
    });

    btnSwitch5.addEventListener("click", function() {
        if (comp5.style.opacity === "0.5") {
            comp5.style.opacity = "1";
        } else {
            comp5.style.opacity = "0.5";
            btnSwitch1;
        }
    });

    btnSwitch6.addEventListener("click", function() {
        if (comp6.style.opacity === "0.5") {
            comp6.style.opacity = "1";
        } else {
            comp6.style.opacity = "0.5";
        }
    });

    btnSwitch7.addEventListener("click", function() {
        if (comp7.style.opacity === "0.5") {
            comp7.style.opacity = "1";
        } else {
            comp7.style.opacity = "0.5";
        }
    });

    btnSwitch8.addEventListener("click", function() {
        if (comp8.style.opacity === "0.5") {
            comp8.style.opacity = "1";
        } else {
            comp8.style.opacity = "0.5";
        }
    });
    btnSwitch9.addEventListener("click", function() {
        if (comp9.style.opacity === "0.5") {
            comp9.style.opacity = "1";
        } else {
            comp9.style.opacity = "0.5";
        }
    });
    btnSwitch10.addEventListener("click", function() {
        if (comp10.style.opacity === "0.5") {
            comp10.style.opacity = "1";
        } else {
            comp10.style.opacity = "0.5";
        }
    });
    btnSwitch11.addEventListener("click", function() {
        if (comp11.style.opacity === "0.5") {
            comp11.style.opacity = "1";
        } else {
            comp11.style.opacity = "0.5";
        }
    });

    // End Switch

    // Trash

    const trash1 = document.getElementById("btnTrash1");
    const trash2 = document.getElementById("btnTrash2");
    const trash3 = document.getElementById("btnTrash3");
    const trash4 = document.getElementById("btnTrash4");
    const trash5 = document.getElementById("btnTrash5");
    const trash6 = document.getElementById("btnTrash6");
    const trash7 = document.getElementById("btnTrash7");
    const trash8 = document.getElementById("btnTrash8");
    const trash9 = document.getElementById("btnTrash9");
    const trash10 = document.getElementById("btnTrash10");
    const trash11 = document.getElementById("btnTrash11");

    trash1.addEventListener("click", function() {
        comp1.style.display = "none";
        delmodal.style.display = "none";
    });
    trash2.addEventListener("click", function() {
        comp2.style.display = "none";
    });
    trash3.addEventListener("click", function() {
        comp3.style.display = "none";
    });
    trash4.addEventListener("click", function() {
        comp4.style.display = "none";
    });
    trash5.addEventListener("click", function() {
        comp5.style.display = "none";
    });
    trash6.addEventListener("click", function() {
        comp6.style.display = "none";
    });
    trash7.addEventListener("click", function() {
        comp7.style.display = "none";
    });
    trash8.addEventListener("click", function() {
        comp8.style.display = "none";
    });
    trash9.addEventListener("click", function() {
        comp9.style.display = "none";
    });
    trash10.addEventListener("click", function() {
        comp10.style.display = "none";
    });
    trash11.addEventListener("click", function() {
        comp11.style.display = "none";
    });

    // End trash

    // 3 Dot

    // End 3 Dot

    // Add Comp

    const addtau = document.getElementById("btnModaltau");
    const addtw = document.getElementById("btnModaltw");
    const addInst = document.getElementById("btnModalIns");
    const addyt = document.getElementById("btnModalyt");
    const addtt = document.getElementById("btnModaltt");
    const addfb = document.getElementById("btnModalfb");

    addtau.addEventListener("click", function() {
        comp6.style.display = "block";
    });
    addtw.addEventListener("click", function() {
        comp7.style.display = "block";
    });
    addInst.addEventListener("click", function() {
        comp8.style.display = "block";
    });
    addyt.addEventListener("click", function() {
        comp9.style.display = "block";
    });
    addtt.addEventListener("click", function() {
        comp10.style.display = "block";
    });
    addfb.addEventListener("click", function() {
        comp11.style.display = "block";
    });

    // End add comp

    const lastButtonClicked = sessionStorage.getItem("lastButtonClicked");
    const dav = document.getElementById("div");

    if (lastButtonClicked === "button1") {
        dav.style.display = "none";
        div1.style.display = "block";
    } else if (lastButtonClicked === "button2") {
        dav.style.display = "none";
        div2.style.display = "block";
    } else if (lastButtonClicked === "button3") {
        dav.style.display = "none";
        div3.style.display = "block";
    } else if (lastButtonClicked === "button4") {
        dav.style.display = "none";
        div4.style.display = "block";
    } else if (lastButtonClicked === "button5") {
        dav.style.display = "none";
        div5.style.display = "block";
    }
</script>

@stack('scripts')
