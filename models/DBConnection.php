<?php
class DBConnection
{
    private $conn;

    public function __construct($host, $username, $password, $dbname)
    {
        // Establish database connection
        $this->conn = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getPosts()
    {
        // Prepare the SQL query
        $sql = "SELECT P.id,
                   P.title,
                   P.date,
                   P.tags,
                   U.username,
                   COUNT(L.post_id) AS likes
            FROM `posts` P
            LEFT JOIN `likes` L ON L.post_id = P.id
            LEFT JOIN `users` U ON U.id = P.user_id
            GROUP BY P.id, P.title, P.date, P.tags, U.username
            ORDER BY P.date DESC";

        // Execute the query
        $result = $this->conn->query($sql);

        // Check if the query was successful
        if ($result === false) {
            die("Error executing query: " . $this->conn->error);
        }

        // Fetch all rows as associative array
        $posts = [];
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }

        // Free result set
        $result->free();

        return $posts;
    }

    public function closeConnection()
    {
        // Close database connection
        $this->conn->close();
    }
}
