<?php

    $dbhost= DB_HOST;
    $dbuser= DB_USER;
    $dbpass= DB_PASSWORD;
    $dbname= DB_NAME;
    $connection= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


    if(mysqli_connect_errno()) {

        die("database connection is failed:". mysqli_connect_error(). "(" . mysqli_connect_errno() . ")"


        );

    } else {

        //Make sure that it is a POST request.
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {

            //Make sure that the content type of the POST request has been set to application/json
            $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

            if (strcasecmp($contentType, 'application/json') != 0) {
                throw new Exception('Content type must be: application/json');
            }

            //Receive the RAW post data.
            $content = trim(file_get_contents("php://input"));

            //Attempt to decode the incoming RAW post data from JSON.
            $body = json_decode($content, true);

            //If json_decode failed, the JSON is invalid.
            if (!is_array($body)) {
                throw new Exception('Received content contained invalid JSON!');
            }

            $comment = mysqli_real_escape_string($connection, $body["comments"]);
            $query = "INSERT INTO wp_workload_comments (comments) VALUES ('$comment')";
            $result= mysqli_query($connection, $query);

            if(!empty($result)){
                echo "Success!";
                exit();
            }

        } elseif (strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') == 0) {

            $bodyg=$_GET['comments'];

            if (empty($bodyg)) {
                echo "no comment is given!";
                exit();
            }

            $commentg = mysqli_real_escape_string($connection, $bodyg);
            $queryg = "INSERT INTO wp_workload_comments (comments) VALUES ('$commentg')";
            $resultg= mysqli_query($connection, $queryg);

            if (!empty($resultg)) {
                echo "Success!";
                exit();
            } else {
                echo "Failed!";
                exit();
            }

        } else {
            exit();
        }

    }
?>
