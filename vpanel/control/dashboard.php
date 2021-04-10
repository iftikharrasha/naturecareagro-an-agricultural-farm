<?php
include "../includes/sessions.php";
include "../includes/functions.php";

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location:../index.php?login_first");
}

//total products counts
$countProducts = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM nc_products");
$totalProducts = mysqli_fetch_assoc($countProducts);

//total visits count
$countViews = mysqli_query($con, "SELECT SUM(views) as TOTAL FROM nc_views");
$totalViews = mysqli_fetch_assoc($countViews);

if (isset($_POST['post-submit'])) {
    date_default_timezone_set('Asia/Manila');
    $time = time();

    $views = 0;
    $top = 0;

    $title = mysqli_real_escape_string($con, $_POST['post-title']);
    $dateTime = strftime('%Y-%m-%d', $time);

    $custom_title = str_replace(' ', '', $title); //delete spaces between words
    $image = $_FILES['post-image']['name'];
    $file_ext = substr($image, strripos($image, '.')); // get file name
    $newfilename = $custom_title . '_' . $dateTime . $file_ext; // Rename file

    $author = $_SESSION['username'];
    $title_length = strlen($title);
    $imageDirectory = "../../products/" . $newfilename;

    if (empty($title)) {
        $_SESSION['errorMessage'] = "Title Is Emtpy!";
    } else if ($title_length > 50) {
        $_SESSION['errorMessage'] = "Title Is Too Long!";
    } else {
        $query = "INSERT INTO nc_products (date_time, product_title, added_by, product_image, views)
    VALUES ('$dateTime', '$title','$author', '$newfilename', '$views')";

        $exec = Query($query);
        if ($exec) {
            move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
            $_SESSION['successMessage'] = "Post Added Successfully!";
            Redirect_To('./dashboard.php?upload_success');
        } else {
            $_SESSION['errorMessage'] = "Something Went Wrong Please Try Again!";
        }
    }
}

if (isset($_POST['delproduct-submit'])) {
    $pid = $_POST['delete_id'];
    $image = $_POST['this_image'];
    $imageUnlinkDir = "../../products/" . $image;
    if (!unlink($imageUnlinkDir)) {
        $_SESSION['errorMessage'] = "Can not unlink file!";
        Redirect_To('./dashboard.php');
    } else {
        $result = "DELETE FROM nc_products WHERE product_id='$pid'";

        $exec = Query($result);
        if ($exec) {
            $_SESSION['successMessage'] = "Product Deleted Successfully!";
            Redirect_To('dashboard.php?delete_success');
        } else {
            $_SESSION['errorMessage'] = "Please Try Again!";
        }
    }
}

include "../partpage/header.php";
?>
<div class="container-fluid">
  <div class="row">
    <?php include "../partpage/sidebar.php";?>
    <div class="col-md-10 content" style="margin-left:10px">
      <div class="panel-body-boots">
      <h3>
<?php //success message
if (isset($_POST['success'])) {
    $success = $_POST["success"];
    echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?>
        </h3>
      </div>
      <div class="four-grids" style="margin-bottom: 30px; ">
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_one">
              <div class="four-text">
                <h3>Total Products
                </h3>
                <h4><?php echo $totalProducts['TOTAL']; ?>
                </h4>
              </div>
          </div>
        </div>
        <div class="col-md-3 four-grid">
          <div class="vpanel_counts c_eight">
              <div class="four-text">
                <h3>Site Visits
                </h3>
                <h4><?php echo $totalViews['TOTAL'] ?? 0; ?>
                </h4>
              </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="well">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form" enctype="multipart/form-data">
              <p>Title
              </p>
              <input class="input-md thumbnail form-control" type="text" name="post-title" id="product_name" autofocus="" style="width:100%" placeholder="Product Name" required="">

              <p style="margin-bottom: 25px">Optimize image before uploading:
                <button type="button"> <a href="https://tinypng.com/" target="_blank">tinypng</a>
                </button>
              </p>
              <p>Add Image
              </p>
              <div style="background-color:#CCC">
                <input type="file" style="width:100%" name="post-image" class="btn thumbnail" id="picture">
              </div>
              <div align="center">
                <button type="submit" name="post-submit" id="submit" class="btn btn-info" style="margin-bottom: 20px;"> Add Product
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <p class="message">
          <?php echo Message(); ?>
      </p>

      <div class="col-xs-12">
          <h4>Products List:
          </h4>

<?php
$productNo = 1;
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $showPost = ($page * 10) - 10;
    if ($page <= 0) {
        $showPost = 0;
    }

    $sql = "SELECT * FROM nc_products ORDER BY product_id DESC LIMIT $showPost,10";

} else {
    $sql = "SELECT * FROM nc_products ORDER BY product_id DESC LIMIT 0,10";
}

$exec = Query($sql);
if (mysqli_num_rows($exec) < 1) {
    ?>
          <p class="lead">You Have 0 Products At This Moment!
          </p>
<?php
} else {
    ?>
          <div class="table-responsive text-center">
            <table class="display table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
                <tr>
                  <th class="text-center">No.
                  </th>
                  <th class="text-center">Product Name
                  </th>
                  <th class="text-center">Image
                  </th>
                  <th class="text-center">Author
                  </th>
                  <th class="text-center">Date
                  </th>
                  <th class="text-center">Delete
                  </th>
                </tr>
<?php
while ($post = mysqli_fetch_assoc($exec)) {
        $product_No = $productNo;
        $product_id = $post['product_id'];
        $title = $post['product_title'];
        $image = $post['product_image'];
        $date = $post['date_time'];
        $author = $post['added_by'];
        ?>
                <tr>
                  <td>
                    <?php echo $product_No; ?>
                  </td>
                  <td>
                    <?php echo $title; ?>
                  </td>
                  <td class="i1">
                      <?php echo "<img class='img-responsive' src='../../products/$image'>"; ?>
                  </td>
                  <td>
                      <?php echo $author; ?>
                  </td>
                  <td>
                      <?php echo $date; ?>
                  </td>
                  <td class="jsgrid-align-center">
                      <form action="dashboard.php?delete_id=<?php echo $product_id; ?>" method="post">
                          <input type="hidden" name="delete_id" value="<?php echo $product_id; ?>">
                          <input type="hidden" name="this_image" value="<?php echo $image; ?>">
                          <button type="submit" name="delproduct-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                              <i class="fa fa-trash-o"></i>
                          </button>
                    </form>
                  </td>
                </tr>

<?php
$productNo++;
    }
}
?>


              </tbody>
            </table>
            <!--</table>-->
          </div>
        </div>
        <div class="col-xs-12">
          <nav aria-label="Page navigation example" align="center">
            <ul class="pagination">

<?php
if ($page > 1) {
    ?>

              <li class="page-item">
                <a class="page-link" href="dashboard.php?page=<?php echo $page - 1; ?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;
                  </span>
                  <span class="sr-only">Previous
                  </span>
                </a>
              </li>

<?php
}
$sql = "SELECT COUNT(*) FROM nc_products";

$exec = Query($sql);
$rowCount = mysqli_fetch_array($exec);
$totalRow = array_shift($rowCount);
$postPerPage = ceil($totalRow / 10);

for ($count = 1; $count <= $postPerPage; $count++) {
    if ($page == $count) {
        ?>


              <li class="page-item">
                <a class="page-link" href="dashboard.php?page=<?php echo $count ?>"><?php echo $count ?>
                </a>
              </li>

<?php
} else {
        ?>

              <li class="page-item">
                <a class="page-link" href="dashboard.php?page=<?php echo $count ?>"> <?php echo $count ?>
                </a>
              </li>

<?php
}
}
if ($page < $postPerPage) {
    ?>
              <li class="page-item">
                <a class="page-link" href="dashboard.php?page=<?php echo $page + 1; ?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;
                  </span>
                  <span class="sr-only">Next
                  </span>
                </a>
              </li>

<?php
}

?>

            </ul>
          </nav>
        </div>
    </div>
  </div>
</div>
<?php include "../partpage/footer.php";?>
