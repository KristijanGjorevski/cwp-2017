<?php 


$host = "127.0.0.1";
$user = "root";
$password = "OXdPv08m04RhO6Cg";
$dbname = "pdoposts";


                # set DSN
$dsn = "mysql:host={$host};dbname={$dbname};";

                # create PDO instance
$pdo = new PDO($dsn,$user,$password);
# set default TYPE of DISPLAYING
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
#  fetch(PDO::FETCH_ASSOC) - $row["title"]  stigas do * title
#  fetch(PDO::FETCH_OBJ) -   $row->title    stigas do * title


                # PDO QUERY
$stmt = $pdo->query("SELECT * FROM posts");

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row["title"]."<br>";
// }

// while ($row = $stmt->fetch()) {
//     echo $row->title."<br>";
// }


                # PREPARED STATEMENTS (prepare & execute)


                # UNSAFE way !
//$sql_unsafe = "SELECT * FROM posts WHERE author = {$author}";


                # FETCH MULTIPLE POSTS

    // User Imput
$author = "Kiko";
$is_published = true;
$id = 5;


    // Positional Parametars

$sql = "SELECT * FROM posts WHERE author = ? && is_published = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$author, $is_published]);
$posts = $stmt->fetchAll();


    // Named Parametars

// $sql = "SELECT * FROM posts WHERE author = :author && is_published = :is_published";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["author"=>$author,"is_published"=>$is_published]);
// $posts = $stmt->fetchAll();

// //echo '<pre>'; print_r($posts); echo '</pre>';

// foreach ($posts as $post) {
//     echo $post->title."<br>";
// }



                # FETCH SINGLE POST

// $sql = "SELECT * FROM posts WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id"=>$id]);
// $posts = $stmt->fetch();

// echo $posts->body;


                # GET ROW COUNT

// $stmt = $pdo->prepare("SELECT * FROM posts WHERE author = ?");
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();

// echo $postCount;


                # INSERT DATA
// $title = "Post Five";
// $body = "This is post Five";
// $author = "Kevin";

// $sql = "INSERT INTO posts(title,body,author) VALUES (:title, :body, :author)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["title"=> $title, "body"=> $body, "author"=> $author ]);
// echo "Post added";


                # UPDATE DATA

// $id = 5;
//  $body = "The updated post";

// $sql = "UPDATE posts SET body = :body WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["body"=> $body, "id"=> $id]);
// echo "Post updated";


                # DELETE DATA
// $id = 7;

// $sql = "DELETE FROM posts WHERE id = :id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id"=> $id]);
// echo "Post Deleted";


                # SEARCH DATA
$search = "%o";
$sql = "SELECT * FROM posts WHERE title LIKE = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title."<br>";
}


?>



