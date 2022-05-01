<?php

use LDAP\Result;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

date_default_timezone_set("Asia/Kolkata");
include 'db_config.php';

//Load Composer's autoloader
require 'vendor/autoload.php';
header("Access-Control-Allow-Origin: *");

$method = $_GET['method'];

$obj = new Zoedesk();

if ($method == 'getuscategory') {
    $obj->getuscategory();
} else if ($method == 'getusvideos') {
    $obj->getusvideos();
} else if ($method == 'getchartdataforcanada') {
    $obj->getchartdataforcanada();
} else if ($method == 'getchartdataforfrance') {
    $obj->getchartdataforfrance();
} else if ($method == 'getchartdataforbritan') {
    $obj->getchartdataforbritan();
} else if ($method == 'getchartdataforindia') {
    $obj->getchartdataforindia();
} else if ($method == 'getusvideosbycat') {
    $obj->getusvideosbycat();
} else if ($method == 'getchartdataforus') {
    $obj->getchartdataforus();
} else if ($method == 'getlikesforus') {
    $obj->getlikesforus();
} else if ($method == 'getcon') {
    $obj->getcon();
} else if ($method == 'getcondislike') {
    $obj->getcondislike();
} else if ($method == 'getconcomment') {
    $obj->getconcomment();
} else if ($method == 'getconview') {
    $obj->getconview();
} else if ($method == 'getlikesforcanada') {
    $obj->getlikesforcanada();
} else if ($method == 'getlikesforbritan') {
    $obj->getlikesforbritan();
} else if ($method == 'getlikesforfrance') {
    $obj->getlikesforfrance();
} else if ($method == 'getlikesforindia') {
    $obj->getlikesforindia();
} else if ($method == 'getdislikesforus') {
    $obj->getdislikesforus();
} else if ($method == 'getdislikesforcanada') {
    $obj->getdislikesforcanada();
} else if ($method == 'getdislikesforbritan') {
    $obj->getdislikesforbritan();
} else if ($method == 'getdislikesforfrance') {
    $obj->getdislikesforfrance();
} else if ($method == 'getdislikesforindia') {
    $obj->getdislikesforindia();
} else if ($method == 'getcommentsforus') {
    $obj->getcommentsforus();
} else if ($method == 'getcommentsforcanada') {
    $obj->getcommentsforcanada();
} else if ($method == 'getcommentsforbritan') {
    $obj->getcommentsforbritan();
} else if ($method == 'getcommentsforfrance') {
    $obj->getcommentsforfrance();
} else if ($method == 'getcommentsforindia') {
    $obj->getcommentsforindia();
} else if ($method == 'getactivecat') {
    $obj->getactivecat();
} else if ($method == 'gettop5byviewus') {
    $obj->gettop5byviewus();
} else if ($method == 'gettop5byviewca') {
    $obj->gettop5byviewca();
} else if ($method == 'gettop5byviewgb') {
    $obj->gettop5byviewgb();
} else if ($method == 'gettop5byviewfr') {
    $obj->gettop5byviewfr();
} else if ($method == 'gettop5byviewin') {
    $obj->gettop5byviewin();
} else if ($method == 'gettop5bylikesus') {
    $obj->gettop5bylikesus();
} else if ($method == 'gettop5bylikesca') {
    $obj->gettop5bylikesca();
} else if ($method == 'gettop5bylikesgb') {
    $obj->gettop5bylikesgb();
} else if ($method == 'gettop5bylikesfr') {
    $obj->gettop5bylikesfr();
} else if ($method == 'gettop5bylikesin') {
    $obj->gettop5bylikesin();
} else if ($method == 'gettop5bydislikesus') {
    $obj->gettop5bydislikesus();
} else if ($method == 'gettop5bydislikesca') {
    $obj->gettop5bydislikesca();
} else if ($method == 'gettop5bydislikesgb') {
    $obj->gettop5bydislikesgb();
} else if ($method == 'gettop5bydislikesfr') {
    $obj->gettop5bydislikesfr();
} else if ($method == 'gettop5bydislikesin') {
    $obj->gettop5bydislikesin();
} else if ($method == 'gettop5bycommentsus') {
    $obj->gettop5bycommentsus();
} else if ($method == 'gettop5bycommentsca') {
    $obj->gettop5bycommentsca();
} else if ($method == 'gettop5bycommentsgb') {
    $obj->gettop5bycommentsgb();
} else if ($method == 'gettop5bycommentsfr') {
    $obj->gettop5bycommentsfr();
} else if ($method == 'gettop5bycommentsin') {
    $obj->gettop5bycommentsin();
} else if ($method == 'getRegisteredData') {
    $obj->getRegisteredData();
} else if ($method == 'GetCityName') {
    $obj->GetCityName();
} else if ($method == 'getTravellerData') {
    $obj->getTravellerData();
} else if ($method == 'searchRegisteredData') {
    $obj->searchRegisteredData();
} else if ($method == 'getUserByGin') {
    $obj->getUserByGin();
} else {
    echo 'why are you here';
}
class Zoedesk
{

    public function getuscategory()
    {
        include 'db_config.php';
        $sql = "SELECT * FROM us_category_id";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    public function getusvideos()
    {

        include 'db_config.php';
        $sql = "SELECT * from mytable_us";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    public function getusvideosbycat()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * from mytable_us where category_id = '$cat_id'";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    // Multiple line and Bar chart - category details with respect to likes, dislikes and views

    // US data
    public function getchartdataforus()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        $from = isset($_POST['from']) ? $_POST['from'] : "";
        $to = isset($_POST['to']) ? $_POST['to'] : "";
        include 'db_config.php';
        $dataset = [];
        $jsondataset = [];
        $dataforset = [];
        $views = '';
        for ($i = 1; $i <= 24; $i++) {
            $sql = "SELECT `views` FROM mytable WHERE `trending_date` BETWEEN '$from' AND '$to' AND category_id = '$cat_id'";
            $result = mysqli_query($link, $sql);

            $from = str_replace(".", "-", $from);
            $datax = date('M - y', strtotime($from));

            $from = (string) $from;
            $from = str_replace(".", "-", $from);
            $from = date('y-m-d', strtotime($from . ' + 1 months'));
            $from = str_replace("-", ".", $from);

            $to = (string) $to;
            $to = str_replace(".", "-", $to);
            $to = date('y-m-d', strtotime($to . ' + 1 months'));
            $to = str_replace("-", ".", $to);

            while ($row = mysqli_fetch_assoc($result)) {
                $views = $row['views'] + $views;
                $data[] = $row;
            }
            $dataset['x'] = $datax;
            $dataset['y'] = $views;
            array_push($dataforset, $dataset);
        }
        //array_push($jsondataset,"label: 'Category-1'");
        array_push($jsondataset, $dataforset);
        echo json_encode($dataforset);
    }

    // Canada data
    public function getchartdataforcanada()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        $from = isset($_POST['from']) ? $_POST['from'] : "";
        $to = isset($_POST['to']) ? $_POST['to'] : "";
        include 'db_config.php';
        $dataset = [];
        $jsondataset = [];
        $dataforset = [];
        $views = '';
        for ($i = 1; $i <= 24; $i++) {
            $sql = "SELECT `views` FROM mytable_ca WHERE `trending_date` BETWEEN '$from' AND '$to' AND category_id = '$cat_id'";
            $result = mysqli_query($link, $sql);

            $from = str_replace(".", "-", $from);
            $datax = date('M - y', strtotime($from));

            $from = (string) $from;
            $from = str_replace(".", "-", $from);
            $from = date('y-m-d', strtotime($from . ' + 1 months'));
            $from = str_replace("-", ".", $from);

            $to = (string) $to;
            $to = str_replace(".", "-", $to);
            $to = date('y-m-d', strtotime($to . ' + 1 months'));
            $to = str_replace("-", ".", $to);

            while ($row = mysqli_fetch_assoc($result)) {
                $views = $row['views'] + $views;
                $data[] = $row;
            }
            $dataset['x'] = $datax;
            $dataset['y'] = $views;
            array_push($dataforset, $dataset);
        }
        //array_push($jsondataset,"label: 'Category-1'");
        array_push($jsondataset, $dataforset);
        echo json_encode($dataforset);
    }


    // India data
    public function getchartdataforindia()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        $from = isset($_POST['from']) ? $_POST['from'] : "";
        $to = isset($_POST['to']) ? $_POST['to'] : "";
        include 'db_config.php';
        $dataset = [];
        $jsondataset = [];
        $dataforset = [];
        $views = '';
        for ($i = 1; $i <= 24; $i++) {
            $sql = "SELECT `views` FROM mytable_ca WHERE `trending_date` BETWEEN '$from' AND '$to' AND category_id = '$cat_id'";
            $result = mysqli_query($link, $sql);

            $from = str_replace(".", "-", $from);
            $datax = date('M - y', strtotime($from));

            $from = (string) $from;
            $from = str_replace(".", "-", $from);
            $from = date('y-m-d', strtotime($from . ' + 1 months'));
            $from = str_replace("-", ".", $from);

            $to = (string) $to;
            $to = str_replace(".", "-", $to);
            $to = date('y-m-d', strtotime($to . ' + 1 months'));
            $to = str_replace("-", ".", $to);

            while ($row = mysqli_fetch_assoc($result)) {
                $views = $row['views'] + $views;
                $data[] = $row;
            }
            $dataset['x'] = $datax;
            $dataset['y'] = $views;
            array_push($dataforset, $dataset);
        }
        //array_push($jsondataset,"label: 'Category-1'");
        array_push($jsondataset, $dataforset);
        echo json_encode($dataforset);
    }


    // Great Britan data
    public function getchartdataforbritan()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        $from = isset($_POST['from']) ? $_POST['from'] : "";
        $to = isset($_POST['to']) ? $_POST['to'] : "";
        include 'db_config.php';
        $dataset = [];
        $jsondataset = [];
        $dataforset = [];
        $views = '';
        for ($i = 1; $i <= 24; $i++) {
            $sql = "SELECT `views` FROM mytable_gb WHERE `trending_date` BETWEEN '$from' AND '$to' AND category_id = '$cat_id'";
            $result = mysqli_query($link, $sql);

            $from = str_replace(".", "-", $from);
            $datax = date('M - y', strtotime($from));

            $from = (string) $from;
            $from = str_replace(".", "-", $from);
            $from = date('y-m-d', strtotime($from . ' + 1 months'));
            $from = str_replace("-", ".", $from);

            $to = (string) $to;
            $to = str_replace(".", "-", $to);
            $to = date('y-m-d', strtotime($to . ' + 1 months'));
            $to = str_replace("-", ".", $to);

            while ($row = mysqli_fetch_assoc($result)) {
                $views = $row['views'] + $views;
                $data[] = $row;
            }
            $dataset['x'] = $datax;
            $dataset['y'] = $views;
            array_push($dataforset, $dataset);
        }
        //array_push($jsondataset,"label: 'Category-1'");
        array_push($jsondataset, $dataforset);
        echo json_encode($dataforset);
    }


    // france data
    public function getchartdataforfrance()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        $from = isset($_POST['from']) ? $_POST['from'] : "";
        $to = isset($_POST['to']) ? $_POST['to'] : "";
        include 'db_config.php';
        $dataset = [];
        $jsondataset = [];
        $dataforset = [];
        $views = '';
        for ($i = 1; $i <= 24; $i++) {
            $sql = "SELECT `views` FROM mytable_fr WHERE `trending_date` BETWEEN '$from' AND '$to' AND category_id = '$cat_id'";
            $result = mysqli_query($link, $sql);

            $from = str_replace(".", "-", $from);
            $datax = date('M - y', strtotime($from));

            $from = (string) $from;
            $from = str_replace(".", "-", $from);
            $from = date('y-m-d', strtotime($from . ' + 1 months'));
            $from = str_replace("-", ".", $from);

            $to = (string) $to;
            $to = str_replace(".", "-", $to);
            $to = date('y-m-d', strtotime($to . ' + 1 months'));
            $to = str_replace("-", ".", $to);

            while ($row = mysqli_fetch_assoc($result)) {
                $views = $row['views'] + $views;
                $data[] = $row;
            }
            $dataset['x'] = $datax;
            $dataset['y'] = $views;
            array_push($dataforset, $dataset);
        }
        //array_push($jsondataset,"label: 'Category-1'");
        array_push($jsondataset, $dataforset);
        echo json_encode($dataforset);
    }


        // like
        public function getcon()
        {
            include 'db_config.php';
            $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
            $likes = [];
            $xd = [];
    
            $sqlus = "SELECT avg(likes) FROM `mytable` WHERE `category_id` = '$cat_id'";
            $sqlca = "SELECT avg(likes) FROM `mytable_ca` WHERE `category_id` = '$cat_id'";
            $sqlgb = "SELECT avg(likes) FROM `mytable_gb` WHERE `category_id` = '$cat_id'";
            $sqlfr = "SELECT avg(likes) FROM `mytable_fr` WHERE `category_id` = '$cat_id'";
            $sqlin = "SELECT avg(likes) FROM `mytable` WHERE `category_id` = '$cat_id'";
            
            $resultus = mysqli_query($link,$sqlus);
            $resultca = mysqli_query($link,$sqlca);
            $resultgb = mysqli_query($link,$sqlgb);
            $resultfr = mysqli_query($link,$sqlfr);
            $resultin = mysqli_query($link,$sqlin);
    
            $us = mysqli_fetch_assoc($resultus);
            $ca = mysqli_fetch_assoc($resultca);
            $gb = mysqli_fetch_assoc($resultgb);
            $fr = mysqli_fetch_assoc($resultfr);
            $in = mysqli_fetch_assoc($resultin);
    
            $likes['x'] = 'United States';
            $likes['y'] = $us['avg(likes)'];
            array_push($xd, $likes);
            $likes['x'] = 'Canada';
            $likes['y'] = $ca['avg(likes)'];
            array_push($xd, $likes);
            $likes['x'] = 'Great Britan';
            $likes['y'] = $gb['avg(likes)'];
            array_push($xd, $likes);
            $likes['x'] = 'France';
            $likes['y'] = $fr['avg(likes)'];
            array_push($xd, $likes);
            $likes['x'] = 'India';
            $likes['y'] = $in['avg(likes)'];
            array_push($xd, $likes);
    
    
            echo json_encode($xd);
        }
    
        // Dislike
        public function getcondislike()
        {
            include 'db_config.php';
            $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
            $likes = [];
            $xd = [];
    
            $sqlus = "SELECT avg(dislikes) FROM `mytable` WHERE `category_id` = '$cat_id'";
            $sqlca = "SELECT avg(dislikes) FROM `mytable_ca` WHERE `category_id` = '$cat_id'";
            $sqlgb = "SELECT avg(dislikes) FROM `mytable_gb` WHERE `category_id` = '$cat_id'";
            $sqlfr = "SELECT avg(dislikes) FROM `mytable_fr` WHERE `category_id` = '$cat_id'";
            $sqlin = "SELECT avg(dislikes) FROM `mytable` WHERE `category_id` = '$cat_id'";
            
            $resultus = mysqli_query($link,$sqlus);
            $resultca = mysqli_query($link,$sqlca);
            $resultgb = mysqli_query($link,$sqlgb);
            $resultfr = mysqli_query($link,$sqlfr);
            $resultin = mysqli_query($link,$sqlin);
    
            $us = mysqli_fetch_assoc($resultus);
            $ca = mysqli_fetch_assoc($resultca);
            $gb = mysqli_fetch_assoc($resultgb);
            $fr = mysqli_fetch_assoc($resultfr);
            $in = mysqli_fetch_assoc($resultin);
    
            $likes['x'] = 'United States';
            $likes['y'] = $us['avg(dislikes)'];
            array_push($xd, $likes);
            $likes['x'] = 'Canada';
            $likes['y'] = $ca['avg(dislikes)'];
            array_push($xd, $likes);
            $likes['x'] = 'Great Britan';
            $likes['y'] = $gb['avg(dislikes)'];
            array_push($xd, $likes);
            $likes['x'] = 'France';
            $likes['y'] = $fr['avg(dislikes)'];
            array_push($xd, $likes);
            $likes['x'] = 'India';
            $likes['y'] = $in['avg(dislikes)'];
            array_push($xd, $likes);
    
    
            echo json_encode($xd);
        }

    // comment
    public function getconcomment()
    {
        include 'db_config.php';
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        $likes = [];
        $xd = [];

        $sqlus = "SELECT avg(comment_count) FROM `mytable` WHERE `category_id` = '$cat_id'";
        $sqlca = "SELECT avg(comment_count) FROM `mytable_ca` WHERE `category_id` = '$cat_id'";
        $sqlgb = "SELECT avg(comment_count) FROM `mytable_gb` WHERE `category_id` = '$cat_id'";
        $sqlfr = "SELECT avg(comment_count) FROM `mytable_fr` WHERE `category_id` = '$cat_id'";
        $sqlin = "SELECT avg(comment_count) FROM `mytable` WHERE `category_id` = '$cat_id'";
        
        $resultus = mysqli_query($link,$sqlus);
        $resultca = mysqli_query($link,$sqlca);
        $resultgb = mysqli_query($link,$sqlgb);
        $resultfr = mysqli_query($link,$sqlfr);
        $resultin = mysqli_query($link,$sqlin);

        $us = mysqli_fetch_assoc($resultus);
        $ca = mysqli_fetch_assoc($resultca);
        $gb = mysqli_fetch_assoc($resultgb);
        $fr = mysqli_fetch_assoc($resultfr);
        $in = mysqli_fetch_assoc($resultin);

        $likes['x'] = 'United States';
        $likes['y'] = $us['avg(comment_count)'];
        array_push($xd, $likes);
        $likes['x'] = 'Canada';
        $likes['y'] = $ca['avg(comment_count)'];
        array_push($xd, $likes);
        $likes['x'] = 'Great Britan';
        $likes['y'] = $gb['avg(comment_count)'];
        array_push($xd, $likes);
        $likes['x'] = 'France';
        $likes['y'] = $fr['avg(comment_count)'];
        array_push($xd, $likes);
        $likes['x'] = 'India';
        $likes['y'] = $in['avg(comment_count)'];
        array_push($xd, $likes);


        echo json_encode($xd);
    }

    // // View
    // public function getconview()
    // {
    //     include 'db_config.php';
    //     $likes = [];
    //     $xd = [];

    //     $sqlus = 'SELECT avg(views) FROM `mytable`';
    //     $sqlca = 'SELECT avg(views) FROM `mytable_ca`';
    //     $sqlgb = 'SELECT avg(views) FROM `mytable_gb`';
    //     $sqlfr = 'SELECT avg(views) FROM `mytable_fr`';
    //     $sqlin = 'SELECT avg(views) FROM `mytable`';
        
    //     $resultus = mysqli_query($link,$sqlus);
    //     $resultca = mysqli_query($link,$sqlca);
    //     $resultgb = mysqli_query($link,$sqlgb);
    //     $resultfr = mysqli_query($link,$sqlfr);
    //     $resultin = mysqli_query($link,$sqlin);

    //     $us = mysqli_fetch_assoc($resultus);
    //     $ca = mysqli_fetch_assoc($resultca);
    //     $gb = mysqli_fetch_assoc($resultgb);
    //     $fr = mysqli_fetch_assoc($resultfr);
    //     $in = mysqli_fetch_assoc($resultin);

    //     $likes['x'] = 'United States';
    //     $likes['y'] = $us['avg(views)'];
    //     array_push($xd, $likes);
    //     $likes['x'] = 'Canada';
    //     $likes['y'] = $ca['avg(views)'];
    //     array_push($xd, $likes);
    //     $likes['x'] = 'Great Britan';
    //     $likes['y'] = $gb['avg(views)'];
    //     array_push($xd, $likes);
    //     $likes['x'] = 'France';
    //     $likes['y'] = $fr['avg(views)'];
    //     array_push($xd, $likes);
    //     $likes['x'] = 'India';
    //     $likes['y'] = $in['avg(views)'];
    //     array_push($xd, $likes);


    //     echo json_encode($xd);
    // }

    // Multiple Line and bar chart - Likes bar/line
    public function getlikesforus()
    {
        include 'db_config.php';
        $likes = [];
        $dataforsetl = [];
        $like = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($row1 = mysqli_fetch_assoc($resultforcat)) {

            $id = $row1['id'];
            $sql1 = "SELECT * FROM mytable WHERE category_id = '$id'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $like = $row2['likes'] + $like;
                }
                $cat_nm = $row1['title'];
                $likes['x'] = $cat_nm;
                $likes['y'] = $like;
                array_push($dataforsetl, $likes);
            }
        }
        echo json_encode($dataforsetl);
    }

    // canada
    public function getlikesforcanada()
    {
        include 'db_config.php';
        $likes = [];
        $dataforsetl = [];
        $like = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($row1 = mysqli_fetch_assoc($resultforcat)) {

            $id = $row1['id'];
            $sql1 = "SELECT * FROM mytable_ca WHERE category_id = '$id'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $like = $row2['likes'] + $like;
                }
                $cat_nm = $row1['title'];
                $likes['x'] = $cat_nm;
                $likes['y'] = $like;
                array_push($dataforsetl, $likes);
            }
        }
        echo json_encode($dataforsetl);
    }

    // britan
    public function getlikesforbritan()
    {
        include 'db_config.php';
        $likes = [];
        $dataforsetl = [];
        $like = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($row1 = mysqli_fetch_assoc($resultforcat)) {

            $id = $row1['id'];
            $sql1 = "SELECT * FROM mytable_gb WHERE category_id = '$id'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $like = $row2['likes'] + $like;
                }
                $cat_nm = $row1['title'];
                $likes['x'] = $cat_nm;
                $likes['y'] = $like;
                array_push($dataforsetl, $likes);
            }
        }
        echo json_encode($dataforsetl);
    }

    // france
    public function getlikesforfrance()
    {
        include 'db_config.php';
        $likes = [];
        $dataforsetl = [];
        $like = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($row1 = mysqli_fetch_assoc($resultforcat)) {

            $id = $row1['id'];
            $sql1 = "SELECT * FROM mytable_fr WHERE category_id = '$id'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $like = $row2['likes'] + $like;
                }
                $cat_nm = $row1['title'];
                $likes['x'] = $cat_nm;
                $likes['y'] = $like;
                array_push($dataforsetl, $likes);
            }
        }
        echo json_encode($dataforsetl);
    }

    // india
    public function getlikesforindia()
    {
        include 'db_config.php';
        $likes = [];
        $dataforsetl = [];
        $like = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($row1 = mysqli_fetch_assoc($resultforcat)) {

            $id = $row1['id'];
            $sql1 = "SELECT * FROM mytable WHERE category_id = '$id'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row2 = mysqli_fetch_assoc($result1)) {
                    $like = $row2['likes'] + $like;
                }
                $cat_nm = $row1['title'];
                $likes['x'] = $cat_nm;
                $likes['y'] = $like;
                array_push($dataforsetl, $likes);
            }
        }
        echo json_encode($dataforsetl);
    }

    // Multiple Line and bar chart - Dislikes bar/line
    public function getdislikesforus()
    {
        include 'db_config.php';
        $dislikes = [];
        $datafordislike = [];
        $dislike = '';

        $sqlforcatd = "SELECT * FROM us_category_id";
        $resultforcatd = mysqli_query($link, $sqlforcatd);

        while ($rowd = mysqli_fetch_assoc($resultforcatd)) {

            $id_dis = $rowd['id'];
            $sql1 = "SELECT * FROM mytable WHERE category_id = '$id_dis'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $dislike = $row1['dislikes'] + $dislike;
                }
                $cat_dis = $rowd['title'];
                $dislikes['x'] = $cat_dis;
                $dislikes['y'] = $dislike;
                array_push($datafordislike, $dislikes);
            } else {
            }
        }
        echo json_encode($datafordislike);
    }

    // canada
    public function getdislikesforcanada()
    {
        include 'db_config.php';
        $dislikes = [];
        $datafordislike = [];
        $dislike = '';

        $sqlforcatd = "SELECT * FROM us_category_id";
        $resultforcatd = mysqli_query($link, $sqlforcatd);

        while ($rowd = mysqli_fetch_assoc($resultforcatd)) {

            $id_dis = $rowd['id'];
            $sql1 = "SELECT * FROM mytable_ca WHERE category_id = '$id_dis'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $dislike = $row1['dislikes'] + $dislike;
                }
                $cat_dis = $rowd['title'];
                $dislikes['x'] = $cat_dis;
                $dislikes['y'] = $dislike;
                array_push($datafordislike, $dislikes);
            } else {
            }
        }
        echo json_encode($datafordislike);
    }

    // britan
    public function getdislikesforbritan()
    {
        include 'db_config.php';
        $dislikes = [];
        $datafordislike = [];
        $dislike = '';

        $sqlforcatd = "SELECT * FROM us_category_id";
        $resultforcatd = mysqli_query($link, $sqlforcatd);

        while ($rowd = mysqli_fetch_assoc($resultforcatd)) {

            $id_dis = $rowd['id'];
            $sql1 = "SELECT * FROM mytable_gb WHERE category_id = '$id_dis'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $dislike = $row1['dislikes'] + $dislike;
                }
                $cat_dis = $rowd['title'];
                $dislikes['x'] = $cat_dis;
                $dislikes['y'] = $dislike;
                array_push($datafordislike, $dislikes);
            } else {
            }
        }
        echo json_encode($datafordislike);
    }

    // france
    public function getdislikesforfrance()
    {
        include 'db_config.php';
        $dislikes = [];
        $datafordislike = [];
        $dislike = '';

        $sqlforcatd = "SELECT * FROM us_category_id";
        $resultforcatd = mysqli_query($link, $sqlforcatd);

        while ($rowd = mysqli_fetch_assoc($resultforcatd)) {

            $id_dis = $rowd['id'];
            $sql1 = "SELECT * FROM mytable_fr WHERE category_id = '$id_dis'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $dislike = $row1['dislikes'] + $dislike;
                }
                $cat_dis = $rowd['title'];
                $dislikes['x'] = $cat_dis;
                $dislikes['y'] = $dislike;
                array_push($datafordislike, $dislikes);
            } else {
            }
        }
        echo json_encode($datafordislike);
    }

    // india
    public function getdislikesforindia()
    {
        include 'db_config.php';
        $dislikes = [];
        $datafordislike = [];
        $dislike = '';

        $sqlforcatd = "SELECT * FROM us_category_id";
        $resultforcatd = mysqli_query($link, $sqlforcatd);

        while ($rowd = mysqli_fetch_assoc($resultforcatd)) {

            $id_dis = $rowd['id'];
            $sql1 = "SELECT * FROM mytable WHERE category_id = '$id_dis'";
            $result1 = mysqli_query($link, $sql1);
            if (mysqli_num_rows($result1) > 1) {
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $dislike = $row1['dislikes'] + $dislike;
                }
                $cat_dis = $rowd['title'];
                $dislikes['x'] = $cat_dis;
                $dislikes['y'] = $dislike;
                array_push($datafordislike, $dislikes);
            } else {
            }
        }
        echo json_encode($datafordislike);
    }

    // Multiple Line and bar chart - Dislikes bar/line
    public function getcommentsforus()
    {
        include 'db_config.php';
        $comment_count = [];
        $dataforcomments = [];
        $comment = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($rowd = mysqli_fetch_assoc($resultforcat)) {
            $idcmnt = $rowd['id'];
            $sql = "SELECT * FROM mytable WHERE category_id = '$idcmnt'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $comment = $row['comment_count'] + $comment;
                }
                $cat_com = $rowd['title'];
                $comment_count['x'] = $cat_com;
                $comment_count['y'] = $comment;
                array_push($dataforcomments, $comment_count);
            }
        }
        echo json_encode($dataforcomments);
    }

    // canada
    public function getcommentsforcanada()
    {
        include 'db_config.php';
        $comment_count = [];
        $dataforcomments = [];
        $comment = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($rowd = mysqli_fetch_assoc($resultforcat)) {
            $idcmnt = $rowd['id'];
            $sql = "SELECT * FROM mytable_ca WHERE category_id = '$idcmnt'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $comment = $row['comment_count'] + $comment;
                }
                $cat_com = $rowd['title'];
                $comment_count['x'] = $cat_com;
                $comment_count['y'] = $comment;
                array_push($dataforcomments, $comment_count);
            }
        }
        echo json_encode($dataforcomments);
    }

    // britan
    public function getcommentsforbritan()
    {
        include 'db_config.php';
        $comment_count = [];
        $dataforcomments = [];
        $comment = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($rowd = mysqli_fetch_assoc($resultforcat)) {
            $idcmnt = $rowd['id'];
            $sql = "SELECT * FROM mytable_gb WHERE category_id = '$idcmnt'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $comment = $row['comment_count'] + $comment;
                }
                $cat_com = $rowd['title'];
                $comment_count['x'] = $cat_com;
                $comment_count['y'] = $comment;
                array_push($dataforcomments, $comment_count);
            }
        }
        echo json_encode($dataforcomments);
    }

    // france
    public function getcommentsforfrance()
    {
        include 'db_config.php';
        $comment_count = [];
        $dataforcomments = [];
        $comment = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($rowd = mysqli_fetch_assoc($resultforcat)) {
            $idcmnt = $rowd['id'];
            $sql = "SELECT * FROM mytable_fr WHERE category_id = '$idcmnt'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $comment = $row['comment_count'] + $comment;
                }
                $cat_com = $rowd['title'];
                $comment_count['x'] = $cat_com;
                $comment_count['y'] = $comment;
                array_push($dataforcomments, $comment_count);
            }
        }
        echo json_encode($dataforcomments);
    }

    // india
    public function getcommentsforindia()
    {
        include 'db_config.php';
        $comment_count = [];
        $dataforcomments = [];
        $comment = '';

        $sqlforcat = "SELECT * FROM us_category_id";
        $resultforcat = mysqli_query($link, $sqlforcat);

        while ($rowd = mysqli_fetch_assoc($resultforcat)) {
            $idcmnt = $rowd['id'];
            $sql = "SELECT * FROM mytable WHERE category_id = '$idcmnt'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $comment = $row['comment_count'] + $comment;
                }
                $cat_com = $rowd['title'];
                $comment_count['x'] = $cat_com;
                $comment_count['y'] = $comment;
                array_push($dataforcomments, $comment_count);
            }
        }
        echo json_encode($dataforcomments);
    }

    // Pie-Chart - Top 5 Videos per category based on views
    // United States
    public function gettop5byviewus()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY views DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $views = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $views = $row['views'];
            $title = $row['title'];
            $dataset['x'] = $views;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Canada
    public function gettop5byviewca()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_ca WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY views DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $views = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $views = $row['views'];
            $title = $row['title'];
            $dataset['x'] = $views;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Great Britan
    public function gettop5byviewgb()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_gb WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY views DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $views = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $views = $row['views'];
            $title = $row['title'];
            $dataset['x'] = $views;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // France
    public function gettop5byviewfr()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_fr WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY views DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $views = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $views = $row['views'];
            $title = $row['title'];
            $dataset['x'] = $views;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // India
    public function gettop5byviewin()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY views DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $views = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $views = $row['views'];
            $title = $row['title'];
            $dataset['x'] = $views;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Fetching the unique and best category
    public function getactivecat()
    {
        include 'db_config.php';
        $sql = "SELECT a.title , a.id FROM us_category_id AS a RIGHT JOIN mytable AS b ON a.id = b.category_id GROUP BY a.id";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    // Pie-Chart - Top 5 Videos per category based on likes
    // United States
    public function gettop5bylikesus()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY likes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $likes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $likes = $row['likes'];
            $title = $row['title'];
            $dataset['x'] = $likes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Canada
    public function gettop5bylikesca()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_ca WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY likes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $likes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $likes = $row['likes'];
            $title = $row['title'];
            $dataset['x'] = $likes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Great Britan
    public function gettop5bylikesgb()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_gb WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY likes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $likes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $likes = $row['likes'];
            $title = $row['title'];
            $dataset['x'] = $likes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // France
    public function gettop5bylikesfr()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_fr WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY likes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $likes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $likes = $row['likes'];
            $title = $row['title'];
            $dataset['x'] = $likes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // India
    public function gettop5bylikesin()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY likes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $likes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $likes = $row['likes'];
            $title = $row['title'];
            $dataset['x'] = $likes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Pie-Chart - Top 5 Videos per category based on dislikes
    // United States
    public function gettop5bydislikesus()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY dislikes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $dislikes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dislikes = $row['dislikes'];
            $title = $row['title'];
            $dataset['x'] = $dislikes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Canada
    public function gettop5bydislikesca()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_ca WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY dislikes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $dislikes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dislikes = $row['dislikes'];
            $title = $row['title'];
            $dataset['x'] = $dislikes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Great Britan
    public function gettop5bydislikesgb()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_gb WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY dislikes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $dislikes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dislikes = $row['dislikes'];
            $title = $row['title'];
            $dataset['x'] = $dislikes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // France
    public function gettop5bydislikesfr()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_fr WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY dislikes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $dislikes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dislikes = $row['dislikes'];
            $title = $row['title'];
            $dataset['x'] = $dislikes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // India
    public function gettop5bydislikesin()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY dislikes DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $dislikes = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dislikes = $row['dislikes'];
            $title = $row['title'];
            $dataset['x'] = $dislikes;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Pie-Chart - Top 5 Videos per category based on comments
    // United States
    public function gettop5bycommentsus()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY comment_count DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $comment_count = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comment_count = $row['comment_count'];
            $title = $row['title'];
            $dataset['x'] = $comment_count;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Canada
    public function gettop5bycommentsca()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_ca WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY comment_count DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $comment_count = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comment_count = $row['comment_count'];
            $title = $row['title'];
            $dataset['x'] = $comment_count;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // Great Britan
    public function gettop5bycommentsgb()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_gb WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY comment_count DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $comment_count = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comment_count = $row['comment_count'];
            $title = $row['title'];
            $dataset['x'] = $comment_count;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // France
    public function gettop5bycommentsfr()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable_fr WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY comment_count DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $comment_count = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comment_count = $row['comment_count'];
            $title = $row['title'];
            $dataset['x'] = $comment_count;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }

    // India
    public function gettop5bycommentsin()
    {
        $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : "";
        include 'db_config.php';
        $sql = "SELECT * FROM mytable WHERE category_id = '$cat_id' GROUP BY video_id ORDER BY comment_count DESC LIMIT 5";
        $result = mysqli_query($link, $sql);
        $comment_count = '';
        $title = "";
        $dataset = [];
        $datasent = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comment_count = $row['comment_count'];
            $title = $row['title'];
            $dataset['x'] = $comment_count;
            $dataset['y'] = $title;
            array_push($datasent, $dataset);
        }
        echo json_encode($datasent);
    }


// END
    public function GetCityName()
    {
        include 'db_config.php';
        $sql = "SELECT city FROM oc_hotel GROUP BY city";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    public function getRegisteredData()
    {
        include 'db_config.php';
        $start_date = isset($_POST['start_date']) ? $_POST['start_date'] : "";
        $end_date = isset($_POST['end_date']) ? $_POST['end_date'] : "";
        if ($start_date == "") {
            $sql = "SELECT * FROM `oc_registration` GROUP BY ref_id order by booking_date desc ";
        } else {
            $sql = "SELECT * FROM `oc_registration` where booking_date BETWEEN '$start_date' AND '$end_date' GROUP BY ref_id";
        }
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        if (mysqli_num_rows($result) > 0) {
            echo json_encode($data);
        } else {
            echo '0';
        }
    }

    public function getTravellerData()
    {
        include 'db_config.php';
        $ref_id = $_POST['ref_id'];
        $sql = "SELECT * FROM `oc_registration` where ref_id = '$ref_id'";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    public function searchRegisteredData()
    {
        include 'db_config.php';
        $ref_id = $_POST['ref_id'];
        $sql = "SELECT * FROM `oc_registration` where ref_id LiKE '%$ref_id%' order by booking_date desc";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    public function getUserByGin()
    {
        include 'db_config.php';
        /*$gin = isset($_POST['gin']) ? $_POST['gin'] : "";*/
        $gin = "1234";
        $sql = "SELECT * FROM `oc_registration` WHERE `gin_id` = '$gin' GROUP BY gin_id";

        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        if (mysqli_num_rows($result) > 0) {
            echo json_encode($data);
        } else {
            echo '0';
        }
    }
}
