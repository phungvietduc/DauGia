<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.col {
  flex: 50%;
  padding: 10px;
  height: 46px; /* Should be removed. Only for demonstration */
}
.row hleft{
    float: left;
    width: 30%;
}
.row hright{
    float: right;
    width: 70%;
}
</style>
</head>
<body>
<div class="row">
  <div class="col hleft" style="background-color:#aaa;">
    <h2>Column 1</h2>
  </div>
  <div class="col hright" style="background-color:#bbb;">
    <h2>Column 2</h2>
  </div>
</div>

</body>
</html>