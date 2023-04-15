<aside class="aniLeft">
    <div class="aside">
        <a href="/dashboard_user">
            <button class="aside-button">Dashboard</button>
        </a>
        <!-- <a href="index.html"> -->
        <div id="aside_btn" class="aside-drop">
            <button class="aside-button">
                Microsite
                <i id="aside_arrow" class="fa-solid fa-angle-right rriggt"></i>
            </button>
            <div class="dropdowncontent">
                <a class="drop-top drop_a" href="/regular">Microsite regular</a>
                <a class="drop-bottom drop_a" href="/langganan">Microsite langganan</a>
            </div>
        </div>
        <!-- </a> -->
        <a href="/shortlink">
            <button class="aside-button">Short link</button>
        </a>
    </div>
</aside>
<script>
    const asbtn = document.getElementById("aside_btn")
    const arrow = document.getElementById("aside_arrow")
    const isdrop = document.querySelector(".dropdowncontent")

    asbtn.addEventListener("click", function() {
        isdrop.classList.toggle("adrop_show")
        if (arrow.classList.contains("fa-angle-right")) {
            arrow.classList.remove("fa-angle-right");
            arrow.classList.add("fa-angle-down");
        } else {
            arrow.classList.remove("fa-angle-down");
            arrow.classList.add("fa-angle-right");
        }
    })

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
<?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/layout/Dashboard_User/_aside.blade.php ENDPATH**/ ?>