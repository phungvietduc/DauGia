<?php
include '../config/connect.php';
include '../bridge/menu.php';
$lh = mysqli_query($conn, "SELECT * FROM loaisp");
$layra = mysqli_query($conn, "SELECT phiendaugia.*, loaisp.TenLoaiSP FROM phiendaugia JOIN loaisp ON phiendaugia.MaLoaiSP = loaisp.MaLoaiSP");
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title  text-center">Phiên đấu giá mới</h3>
                    </div>
                    <div class="panel-body">
                        <form action="process-add-auction.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group" style="display: none;">
                                <label>Mã phiên</label>
                                <input type="number" class="form-control" name="maphien">
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="pname">
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="loaisp" class="form-control">
                                    <option value="">----------------Loại hàng----------------</option>
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
                            <div class="form-group align-text-top">
                                <label for="">Mô tả</label>
                                <br>
                                <textarea name="mota" id="" cols="40" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btthem" class="btn btn-primary">Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-titel text-center" style="background-color: aqua;">Sản phẩm hiện đang đấu giá</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá khởi điểm</th>
                                    <th>Mô tả</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($layra as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $value['TenSP'] ?></td>
                                        <td><?php echo $value['TenLoaiSP'] ?></td>
                                        <td><img src="<?php echo $value['HinhAnh'] ?>" alt="" width="50px"></td>
                                        <td><?php echo number_format($value['GiaKĐ'])  ?></td>
                                        <td><?php echo $value['MoTaSP'] ?></td>
                                        <td><button class="btn btn-warning ">

                                                <a onclick="return Del('<?php echo $value['TenSP']; ?>')" style=" text-decoration: none" href="delete-auction.php?id=<?php echo $value['MaPhien']; ?>"><i class="bi bi-calendar-x"></i>Kết thúc</a>
                                                </button>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function Del(name) {
            return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + " ?")
        }
    </script>
</body>

</html>