<!-- <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    if (isset($_POST['buy'])) {
        $sql = "Select * from nft where nft_id= 255";
        $result = mysqli_query($con, $sql);
        $collection = $result['collection'];
        $charges = $result['price'];
        $blockchain = $result['blockchain'];
        $standard = $result['std'];
    }
    echo $result['collection'];
}
//?> 