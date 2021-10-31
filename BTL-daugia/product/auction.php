<?php
include '../config/start.php';
include '../config/config.php';
$lh = mysqli_query($conn, "SELECT * FROM loaisp");
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Danh sách sản phẩm</h3>
                    </div>
                    <div class="panel-body">
                        <form action="process-auction.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="pname">
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="loaisp" class="form-control">
                                    <option value="">--------------------Loại hàng--------------------</option>
                                    <?php foreach ($lh as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['MaLoaiSP'] ?>">
                                            <?php echo $value['TenLoaiSP'] ?>
                                        </option><?php }
                                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label for="">Giá khởi điểm</label>
                                <input type="text" class="form-control" name="gia" placeholder="đơn vị: nghìn đồng">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea name="mota" id="" cols="70" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>