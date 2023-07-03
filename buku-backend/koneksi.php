<?php
    function getConnection() {
        $host = 'localhost';
        $dbname = 'fikrinic_uaspweb';
        $username = 'fikrinic_fikri_uasweb';
        $password = 'fikri_123';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>