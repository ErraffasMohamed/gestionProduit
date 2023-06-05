<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de stock</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <div class="crud">
        <div class="head">
            <!-- <h2>crud</h2> -->
            <p>GESTION DE STOCK</p>
        </div>

        <form action="../services/createProduit.service.php" method="post">
        <div class="inputs">
            <input name="title" placeholder="title" type="text" id="title">
            <div class="price">
                <input name="price " type="text" id="price unitaire" placeholder="price">
                <input name="quantity" type="text" id="qauntity" placeholder="quantity">

            </div>
            <input name="category" type="text" id="category" placeholder="category">
            <button id="submit" name="create">Create</button>

        </div>
        </form>
        <div class="outputs">
            <div class="searchBlock">
                <input onkeyup="searchData(this.value)" type="text" id="search" placeholder="search">
                <div class="btnSearch">
                    <button onclick="getSearchMood(this.id)" id="SearchTitle">Search By Title</button>
                    <button onclick="getSearchMood(this.id)" id="SearchCategory">Search By Category</button>
                </div>
            </div>
            <div id="deleteAll"></div>
            <table>
                <tr>
                    <th>reference</th>
                    <th>title</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>category</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                <tbody id="tbody">
                    <!--
                  <tr>
                    <td>1</td>
                    <td>sam</td>
                    <td>2000</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>2100</td>
                    <td>phone</td>
                    <td><button id="update">update</button></td>
                    <td><button id="delete">delete</button></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>sam</td>
                    <td>2000</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>2100</td>
                    <td>phone</td>
                    <td><button id="update">update</button></td>
                    <td><button id="delete">delete</button></td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>sam</td>
                    <td>2000</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>2100</td>
                    <td>phone</td>
                    <td><button id="update">update</button></td>
                    <td><button id="delete">delete</button></td>
                  </tr>
                -->
                </tbody>
            </table>

        </div>
    </div>
    <script src="javas.js"></script>

</body>

</html>
<!-- <?php
include_once("Produit.php");
if(isset($_POST['create'])){

        $title = $_POST['title'];
        $price = $_POST['price'];
        $taxes = $_POST['taxes'];
        $ads = $_POST['ads'];
        $discount = $_POST['discount'];
        $total = $_POST['total'];
        $count = $_POST['count'];
        $category = $_POST['category'];

        // Call the createProduit method
        $prd=new ProduitCRUD();
        $prd->createProduit($title, $price, $taxes, $ads, $discount, $total, $count, $category);
        echo "<div class=\"success\"  id=\"success-message\">
                                                Produit bien ajouter!
                                                </div>";
}
?> -->