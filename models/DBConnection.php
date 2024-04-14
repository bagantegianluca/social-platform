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

    public function getPosts()
    {
        // Prepare statement to prevent SQL injection
        $stmt = $this->conn->prepare("SELECT      P.id
        ,           P.title
        ,           P.date
        ,           P.tags
        ,           U.username
        ,           COUNT(L.post_id) AS likes
        FROM        `posts` P
        LEFT JOIN   `likes` L ON L.post_id = P.id
        LEFT JOIN   `users` U ON U.id = P.user_id
        GROUP BY	P.id
        ,           P.title
        ,           P.date
        ,           P.tags
        ,           U.username
        ORDER BY 	P.date DESC;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function closeConnection()
    {
        // Close database connection
        $this->conn = null;
    }
}
