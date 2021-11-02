<?php
include '../config/start.php';
include '../config/config.php';
$id = $_GET['id'];
$pname    = @$_POST['pname'];
$loaisp   = @$_POST['loaisp'];
$gia      = @$_POST['gia'];
$mota     = @$_POST['mota'];
$maphien  = @$_POST['maphien'];
// $target_dir = "../img/sanpham/";
// $target_file = '';
// $target_file = $target_dir . basename($_FILES["image"]["name"]);
$sql = "SELECT * FROM phiendaugia WHERE MaPhien='$id' ";
$rs = mysqli_query($conn , $sql);
$layra = mysqli_query($conn, "SELECT phiendaugia.*, loaisp.TenLoaiSP FROM phiendaugia JOIN loaisp ON phiendaugia.MaLoaiSP = loaisp.MaLoaiSP");
if(mysqli_num_rows($rs)>0){
    while($row = mysqli_fetch_assoc($rs)){
        $value = $row;
        break;
    }
}
?>
<div class="container">
    <div class="row">
    <form action="process-edit-auction.php" method="POST" enctype="multipart/form-data">
        <h3>Chỉnh sửa phiên đấu giá</h3>
        <div class="form-group" >
            <label>Mã phiên</label>
            <input type="number" class="form-control" name="maphien" value="<?php echo $value['MaPhien'] ?>">
        </div>
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" class="form-control" name="pname" value="<?php echo $value['TenSP'] ?>">
        </div>
        <div class="form-group">
            <label for="">Loại sản phẩm</label>
            <select name="loaisp" class="form-control">
            <option value="">--------------------Loại hàng--------------------</option>
            <?php foreach ($layra as $key => $value) {?>
                <option value="<?php echo $value['MaLoaiSP'] ?>"><?php echo $value['TenLoaiSP'] ?></option><?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" name="image" value="<?php echo $value['HinhAnh'] ?>">
        </div>
        <div class="form-group">
            <label for="">Giá khởi điểm</label>
            <input type="text" class="form-control" name="gia" placeholder="đơn vị: nghìn đồng" value="<?php echo $value['GiaKĐ'] ?>">
        </div>
        <div class="form-group align-text-top">
            <label for="">Mô tả</label>
            <br>
            <textarea name="mota" id="" cols="40" rows="2" ></textarea>
            
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Thay đổi</button>
        </div>
    </form>
    </div>
</div>