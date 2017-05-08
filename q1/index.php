<?php include('header.php'); ?>
<?php 
        $msg = "";
        if(isset($_POST['submit']) && $_POST['string']!=""){
            $str = $_POST['string'];
            if($str == ctype_upper($str) || $str == ucfirst($str) || $str == strtolower($str)){
                $msg = "The given word ".$str." is TRUE";
            }else{
                $msg = "The given word ".$str." is FALSE";
            }
        }

?>

<div class="row">
    <form method="post" action="">
        <div class="form-group">
            <label for="string">Enter any word: </label>
            <input type="text" class="form-control" id="string" placeholder="string" name="string" required>
        </div>
        <div><?php if($msg!="") echo $msg; ?></div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
</div>
<?php include('footer.php');?>
