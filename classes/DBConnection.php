<?php
class DBConnection
{
    private $conn;

    public function __construct($host, $username, $password, $dbname)
    {
        try {
            // Establish database connection
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Connection failed, handle the error here
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getUsersWithVideo()
    {
        // Prepare statement to prevent SQL injection
        $stmt = $this->conn->prepare("SELECT U.id
        , U.username
        , COUNT(M.path) as totalVideos
        FROM `users` U
        JOIN `medias` M ON M.user_id = U.id
        WHERE M.type = 'Video'
        GROUP BY U.id
        , U.username
        ORDER BY totalVideos DESC
        , U.id;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function closeConnection()
    {
        // Close database connection
        $this->conn = null;
    }
}
