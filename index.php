<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_listview.css">
    <link rel="stylesheet" href="style_treeview.css">
    <link rel="stylesheet" href="style_aboutview.css">
    <script src="script.js"></script>
    <title>To DO List</title>
</head>

<body>
    <?php
    //echo "<p>xn--giiphpngin-w4a19cq2dh40rka.vn<p>"
    ?>
    <hr>
    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'List')">List</button>
        <button class="tablinks" onclick="openTab(event, 'Tree')">Tree</button>
        <button class="tablinks" onclick="openTab(event, 'About')">About</button>
    </div>

    <!-- Tab content -->
    <!-- https://www.w3schools.com/howto/howto_js_tabs.asp -->
    <div id="List" class="tabcontent">
        <div class="tab_container">
            <div class="tab_list-content">
                <?php include "tab_list-container.php"; ?>
            </div>
        </div>
    </div>

    <div id="Tree" class="tabcontent">
        <div class="tab_container">
            <div class="tab_tree-content">
                <?php include "tab_tree-container.php"; ?>
            </div>
        </div>
    </div>

    <div id="About" class="tabcontent">
        <div class="tab_container">
            <div class="tab_about-content">
                <?php include "tab_about-container.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>