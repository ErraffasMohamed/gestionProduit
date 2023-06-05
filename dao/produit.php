<?php

class ProduitCRUD {
    private $conn;
    $host="localhost";
    $username="root";
    $password="";
    $database="gestion_stock";
    // Constructor to establish database connection
    public function __construct() {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Create a new product
    public function createProduit($title, $price, $quantity, $category) {
        $sql = "INSERT INTO produit (title, price, qte, category) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdds",getLastInsertedId()+1,$title, $price, $quantity,$category);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //last id
    function getLastInsertedId() {

        // Perform a query to get the last inserted ID
        $query = "SELECT MAX(id) AS last_id FROM produit";
        $result = $this->conn->query($query);
        // Check if the query was successful
        if ($result) {
            $row = $result->fetch_assoc();
            $lastId = $row[0];
        } else {
            $lastId = null; // Error occurred or no rows found
        }
    
        // Return the last inserted ID
        return $lastId;
    }


    // Read all products
    public function readAllProduits() {
        $sql = "SELECT * FROM produit";
        $result = $this->conn->query($sql);
        $produits = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produits[] = $row;
            }
        }
        return $produits;
    }

    // Update a product
    public function updateProduit($id, $title, $price, $quantity, $category) {
        $sql = "UPDATE produit SET title=?, price=?, taxes=?, ads=?, discount=?, total=?, category=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdddddsi", $title, $price, $taxes, $ads, $discount, $total, $category, $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete a product
    public function deleteProduit($id) {
        $sql = "DELETE FROM produit WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Close the database connection
    public function closeConnection() {
        $this->conn->close();
    }
}
?>
