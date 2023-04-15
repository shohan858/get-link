<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<script>
    // Aside
    var lpBtn = document.getElementById("lp_btn");
    var acBtn = document.getElementById("ac_btn");
    var lpContent = document.getElementById("lp_content");
    var acContent = document.getElementById("ac_content");
    var lpArrow = document.getElementById("lp_arrow");
    var acArrow = document.getElementById("ac_arrow");

    lpBtn.addEventListener("click", function() {
        lpBtn.classList.toggle("drop_hov")
        lpContent.classList.toggle("lp_show");
        if (lpArrow.classList.contains("fa-angle-right")) {
            lpArrow.classList.remove("fa-angle-right");
            lpArrow.classList.add("fa-angle-down");
        } else {
            lpArrow.classList.add("fa-angle-right");
            lpArrow.classList.remove("fa-angle-down");
        }
    });

    acBtn.addEventListener("click", function() {
        acBtn.classList.toggle("drop_hov")
        acContent.classList.toggle("lp_show");
        if (acArrow.classList.contains("fa-angle-right")) {
            acArrow.classList.remove("fa-angle-right");
            acArrow.classList.add("fa-angle-down");
        } else {
            acArrow.classList.add("fa-angle-right");
            acArrow.classList.remove("fa-angle-down");
        }
    });

    // $(document).ready(function() {
    //     $("#lp_content").on("click", ".lp_isi", function() {
    //         var lpIsiElements = $(".lp_isi");
    //         lpIsiElements.removeClass("is_hov");
    //         $(this).addClass("is_hov");
    //     });
    // });

    function preview(){
            var tampil = document.getElementById("iframe");
            tampil.style.display = "flex";
        }

        function close_preview(){
            var tampil = document.getElementById("iframe");
            tampil.style.display = "none";
        }
</script>
<?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/admin/layout/script.blade.php ENDPATH**/ ?>