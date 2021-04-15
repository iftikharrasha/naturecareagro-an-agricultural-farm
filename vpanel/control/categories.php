<?php
include "../includes/sessions.php";
include "../includes/functions.php";

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("Location:../index.php?login_first");
}

date_default_timezone_set('Asia/Manila');
$time = time();

//all Categories
$allCategories = mysqli_query($con, "SELECT * FROM categories");

//adding category
if (isset($_POST['cat-submit'])) {
    $dateTime = strftime('%Y-%m-%d', $time);
    $cat_name = mysqli_real_escape_string($con, $_POST['category']);
    $author = $_SESSION['username'];

    if (empty($cat_name)) {
        $_SESSION['errorMessage'] = "Field Is Empty!";
    } else {
        $query = "INSERT INTO categories (date_time, cat_title, added_by)
			VALUES ('$dateTime', '$cat_name', '$author')";

        $exec = Query($query);
        if ($exec) {
            $_SESSION['successMessage'] = "Category Added Successfully!";
            Redirect_To('categories.php?category_added');
        } else {
            $_SESSION['errorMessage'] = "Please Try Again!";
        }
    }
}

//deleting category
if (isset($_POST['delcat-submit'])) {
    $catid = $_POST['delete_id'];

    $result = "DELETE FROM categories WHERE cat_id='$catid'";

    $exec = Query($result);
    if ($exec) {
        $_SESSION['successMessage'] = "Category Deleted Successfully!";
        Redirect_To('categories.php?deletesuccess');
    } else {
        $_SESSION['errorMessage'] = "Please Try Again!";
    }
}

include "../partpage/header.php";
?>
<div class="container-fluid">
  <div class="row">
    <?php include "../partpage/sidebar.php";?>
    <div class="col-md-10 content" style="margin-left:10px">
      <div class="row">
        <div class="col-md-5 well">

          <h4 class="m-b-0">Add Category
          </h4>
		  <p class="message">
              <?php echo Message(); ?>
           </p>
          <form action="categories.php" enctype="multipart/form-data" method="post" novalidate="novalidate">
            <div class="form-body">
              <div class="row ">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="category" class="form-control" id="firstName" required="" type="text" placeholder="" minlength="3" value="">
                  </div>
                </div>
                <!--/span-->
              </div>
              <!--/row-->
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit" name="cat-submit">
                <i class="fa fa-check">
                </i> Save
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-7 well">
          <h4>All Categories:
          </h4>
          <div class="table-responsive text-center">
            <table width="100%" class="display table table-hover table-striped table-bordered" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">Category Name
                  </th>
                  <th class="text-center">Delete
                  </th>
                </tr>
              </thead>
              <tbody>

<?php
foreach ($allCategories as $category) {
    ?>
                <tr>
                  <td>
					<?=$category['cat_title']?>
                  </td>
                  <td class="jsgrid-align-center">
                    <form action="categories.php" method="post">
                      <input type="hidden" name="delete_id" value="<?=$category['cat_id']?>">
                      <button type = "submit"  name="delcat-submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')">
                        <i class="fa fa-trash-o">
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
<?php
}
?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  </div>
</div>
<?php include "../partpage/footer.php";?>
