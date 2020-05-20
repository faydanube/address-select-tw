<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style='display: flex' id='address' data-url='js/_cityTw.json' data-selects='city,area' data-first-title='請選擇' data-first-value=''>
    <select name='city' data-value='' class="city form-control" style='width: 20%;'></select>
    <select name='area' data-value='' class="area form-control" style='width: 20%; margin:0 10px'></select>
    <input type="text" name='street' value='' class="form-control" placeholder="請輸入街道地址">
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.cxselect.min.js"></script>
<script>$("#address").cxSelect();</script>
</body>
</html>