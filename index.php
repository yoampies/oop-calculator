<!DOCTYPE html>
<html>
    <head>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>
    <body class="bg-warning">

        <div class="row">
            <div class="container border border-light rounded mt-5 bg-white">
                <h3 class="text-secondary text-center pt-4">Calculator</h2>
                <form class="m-3 p-3" action="result.php" method="POST">
                    <div class="form-group">
                        <label for="firstnumber">First number of the operation</label>
                        <input type="number" class="form-control" name="firstnumber" placeholder="Write any number you want here">
                    </div>
                    <div class="form-group">
                        <label for="secondnumber">Second number of the operation</label>
                        <input type="number" class="form-control" name="secondnumber" placeholder="Write any number you want here">
                    </div>
                    <div class="form-group">
                        <label for="operation">What operation do you want to happen between the First and Second Number</label>
                        <select class="form-control" name="operation">
                            <option>Addition</option>
                            <option>Subtraction</option>
                            <option>Multiplication</option>
                            <option>Division</option>
                        </select>
                        <input type="submit" value="Calculate" class="btn btn-primary mt-3">                    
                </form>
            </div>
        </div>
        
    </body>
</html>