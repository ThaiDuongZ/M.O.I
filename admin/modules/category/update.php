<?php
    include('config/config.php');
    $sql_update = "SELECT * FROM DM WHERE Ma_dm = '".$_GET['id']."'";
    $query_sql_update = mysqli_query($mysqli,$sql_update);
?>

<form method="POST" action="modules/category/edit.php?Ma_dm=<?php echo $_GET['id'] ?>">
    <?php
        while($_row = mysqli_fetch_array($query_sql_update)){ 
    ?>
    <div class="warpper">
        <div class="add__gird">
            <div class="add__header0">
                <!-- <p class="ti-package"></p> -->
                <p class="add__header">Sửa danh mục</p>
            </div>
            <div class="add_wrap5">
                <div class="add__code">
                    <div class="add__code--name">Mã danh mục</div>
                    <input type="text" class="add__code--code" name="Ma_dm" value="<?php echo $_row['Ma_dm'] ?>">
                </div>
                <div class="add__name">
                    <div class="add__name--name">Tên danh mục</div>
                    <input type="text" class="add__name--code" name="Ten_dm" value="<?php echo $_row['Ten_dm'] ?>">
                </div>
                <div class="add__name">
                    <div class="add__name--name">Nhóm danh mục</div>
                    <input type="text" class="add__name--code" name="Ma_nh" value="<?php echo $_row['Ma_nh'] ?>">
                </div>
                <div class="add__name">
                    <div class="add__name--name" >Acitve</div>
                    <?php
                        if($_row['Active'] == '1'){
                    ?>
                        <select name="Active" id="" class="form-select" style="width: 200px">
                            <option value="1">Sử dụng</option>
                            <option value="0">Không sử dụng</option>
                        </select>
                    <?php
                        }else{
                    ?>
                        <select name="Active" id="" class="form-select" style="width: 200px">
                            <option value="0">Không sử dụng</option>
                            <option value="1">Sử dụng</option>
                        </select>
                    <?php     
                        }
                    ?>
                </div>
                <input type="submit" value="Submit" class="btn btn-secondary add__dm" name="Update_dm">
                <a style="background-color: #838383; margin-left: 200px;border-color: #838383" class="btn btn-primary add__dm" href="index.php?admin=category&query=add" role="button">Back</a>
            </div>
        </div>
    </div>

    <?php
         }
    ?>

</form>
