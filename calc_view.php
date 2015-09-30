<?php
include_once 'calc.php';
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>A Basic Calculator App</title>
</head>
<body>
<header><h1>Simple Calculator</h1></header>
<form action="calc_view.php" method="post">

    <table class="table" style="width: 40%; margin: auto; border: 2px solid darkolivegreen;">
        <tr>
            <td>Enter First Number </td>
            <td>
                <input type="text" name="first_number" value="<?php echo $_POST['first_number'];?>">
            </td>
        </tr>
        <tr>
            <td>Enter Second Number </td>
            <td>
                <input type="text" name="second_number" value="<?php echo $_POST['second_number'];?>">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-default" type="submit" name="btn" value="+">+</button>
                    <button class="btn btn-default" type="submit" name="btn" value="-">-</button>
                    <button class="btn btn-default" type="submit" name="btn" value="*">*</button>
                    <button class="btn btn-default" type="submit" name="btn" value="/">/</button>
                </div>
            </td>
        </tr>
        <!--Checks whether buttons have been clicked and calls the function according to btn clicked-->
        <?php
        $obj= new Calculator();
        if(isset($_POST['btn']))
        {
            $first_number=$_POST['first_number'];
            $second_number=$_POST['second_number'];

            if($_POST['btn']=='+')
            {
                $result= $obj->addition($first_number,$second_number);
            }
            if($_POST['btn']=='-')
            {
                $result= $obj->subtraction($first_number,$second_number);
            }
            if($_POST['btn']=='*')
            {
                $result= $obj->multiply($first_number,$second_number);
            }
            if($_POST['btn']=='/')
            {
                $result= $obj->division($first_number,$second_number);
            }
//            if($first_number==0 or $second_number==0){
//                $result= $obj->nothing();
//            }

        }
        ?>

        <tr>
            <td><?php echo $result['label_value'];?></td>
            <td>
                <?php echo $result['value'];?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
