<?php
require_once './controllers/admin/MenuUpdateController.php';
$MenuUpdateController = new MenuUpdateController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Global Styles -->
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- Local Styles -->
    <link rel="stylesheet" href="../../css/adminMenuUpdate.css">
    <title>kitchen Menu</title>
    <!-- <script type="text/javascript" src="../../js/kitchendisplay.js"></script> -->

</head>

<body>
    <!-- -----navi bar ---------- -->
    <div class="navbar">
        <div class="columns group">
            <div class="column is-2">
                <img src="../../img/logo.png" height=56 width="224" />
            </div>
            <div class="column is-6 ml-5"></div>
            <div class="column is-3 has-text-right nav-logout">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span class="mr-1">Kitchen Manager</span>
                <button class="button is-primary">Logout</button>
            </div>
        </div>
    </div>
    <!--------xx-----navi bar --------xx------->

    <!----------- navigetable buttons------------>
    <section>
    <div class="row buttons-row">
            <a href="/inventory">
                <button class="button is-primary right-radius idle" >Inventory</button>

            </a>
            <a href="/grn">
                <button class="button is-primary left-radius right-radius idle">GRN</button>
            </a>
            <a href="/admin/menu/update">
                <button class="button is-primary button-is-active  left-radius right-radius idle">Menue</button>
            </a>
            <a href="/admin/staffmanage">
                <button class="button is-primary left-radius idle">Staff Manage</button>
            </a>
        </div>
    </section>
    <!-------XX---- navigetable buttons-----XX------->

    <section>
        <div class="columns group">
            <div class="content">
                <div class="column is-3">
                    <h2>Men<span class="change-menu-color">ue</span></h2>

                    <?php $MenuUpdateController->renderMainMenu(); ?>

                </div>
                <div class="column is-3">
                    <h2>Star<span class="change-menu-color">ters</span></h2>

                    <?php $MenuUpdateController->renderStarters(); ?>

                </div>
                <div class="column is-3">
                    <h2>Beve<span class="change-menu-color">rages</span></h2>

                    <?php $MenuUpdateController->renderBeverages(); ?>

                </div>
                <div class="column is-3">
                    <h2>Desse<span class="change-menu-color">rts</span></h2>

                    <?php $MenuUpdateController->renderDesserts(); ?>

                </div>
            </div>
        </div>
    </section>
    <script>
        function hideOpen(id) {
            document.getElementById(id).style.visibility = "visible";
            document.getElementById('btnUpdate-'+id).style.visibility="visible";
        }

        function hideClose(id) {
            document.getElementById(id).style.visibility = "hidden";
            document.getElementById('btnUpdate-'+id).style.visibility="hidden";
        }
        function hideUpdatebtn(id) {
            // 
            document.getElementById('btnUpdate-'+id).style.visibility="hidden";
           
        }

        function togglePopup1() {
            document.getElementById('editOverlay').style.display="block";
            document.getElementById("popup-1").classList.toggle("active");
        }

        function closepopup01() {
            document.getElementById("popup-1").style.display = "none";
        }
    </script>

<!-- --------kitchen display js file -->
    <script type="text/javascript" src="../../js/kitchendisplay.js"></script>
</body>

</html>