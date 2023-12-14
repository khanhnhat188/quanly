<?php
if (isset($_POST['add'])) {
    DepartmentController::addDepartment($connect, $_POST);
}
?>
<div class="box_edit">
<form action="" method="post">
    <h2>Add Post</h2>
    <div class="form-item">
        <label>Phòng ban</label>
        <input type="text" name="name" placeholder="Title"/>
    </div>

    <div class="form-item">
        <input type="submit" name="add" value="Submit" />
    </div>
</form>
</div>
<style>
.box_edit{
    width:600px;
    margin:auto;
}
h2{
    font-size:23px;
    padding:5px;
    border-bottom:2px solid rgba(0,145,234,1);
    position:relative;
    z-index:1000;
    text-indent:10px;
    overflow: hidden;
    color:#fff;
    margin-bottom:10px;
}
h2::before{
    content: "";
    width: 200px;
    height: 100%;
    background: rgba(0,145,234,1);
    position: absolute;
    top: 0;
    left: -37px;
    z-index: -1;
    transform: skewX(30deg);
   
}
.form-item{
   margin-bottom:10px;
}
label{
    font-size:20px;
    display:block;
    font-weight:bold;
}
input,textarea{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    border:none;
    box-shadow:0 0 1px  #000;
    outline:none;

}
input[type="submit"]{
    background: #000;
    color:#fff;
    font-weight:bold;
}

</style>