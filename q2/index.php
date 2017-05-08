<html>
    <head>
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <?php 
            $msg = "";
            if(isset($_POST['submit']) && $_POST['first_number']!="" && $_POST['second_number']!=""){
                $first=$_POST['first_number'];
                $second=$_POST['second_number'];
                if(!preg_match('/^[1-9][0-9]*$/', $first) || !preg_match('/^[1-9][0-9]*$/', $second)){
                    echo "The string must contain only numbers and the leading number should not be a zero";
                }else{
                    $first_rev = array_reverse(str_split($first));
                    $second_rev = array_reverse(str_split($second));
                    

                }
                
            }

            ?>

            <div class="row">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="first_number">Enter the first number(string): </label>
                        <input type="text" class="form-control" id="first_number" placeholder="first_number" name="first_number" required>
                    </div>
                    <div class="form-group">
                        <label for="second_number">Enter the second number(string): </label>
                        <input type="text" class="form-control" id="second_number" placeholder="second_number" name="second_number" required>
                    </div>
                    <div><?php if($msg!="") echo $msg; ?></div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <!--script to negate the use of space in the input text box-->
        <script type="text/javascript">
            $(function() {
                $('#string').on('keypress', function(e) {
                    if (e.which == 32)
                        return false;
                });
            });
        </script>
    </body>
</html>