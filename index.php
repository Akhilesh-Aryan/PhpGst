<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> GST calculator</title>
        <link href="bootstrap.css" rel="stylesheet">
    </head>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
       <a href="index.php" class="navbar-brand">GST Calculator</a>
   </nav>
   <div class="container mt-3">
       <div class="row">
           <div class="col-lg-6 mx-auto">
               <div class="card bg-light">
                   <div class="card-body">
                    <form action="index.php" method="get">
                       <h4 class="text-primary">GST Calculator</h4>
                       <hr>
                        <?php include "include/gst.php";?>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" placeholder="rs">
                        </div>
                         <div class="form-group">
                            <label for="gst_rate">GST Rate</label>
                            <input type="text" class="form-control" name="gst_rate" placeholder="%">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="calculate" class="btn btn-primary form-control">
                        </div>
                       
                    </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</html>