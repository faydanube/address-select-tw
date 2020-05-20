<div id='address' class="form-group row" data-url='{{ asset('js/_cityTw.json') }}' data-selects='city,area' data-first-title='請選擇' data-first-value=''>
    <label for="userAddr" class="col-3 col-md-2 col-form-label">地　址</label>
    <div class="col-9 col-md-10" style='display: flex'>
        <select name='city' data-value='{{ old('city', $user->city) }}' class="city form-control" style='width: 20%;'></select>
        <select name='area' data-value='{{ old('area', $user->area) }}' class="area form-control" style='width: 20%;margin:0 10px'></select>
        <input type="text" name='street' value='{{ old('street', $user->street) }}' class="form-control" placeholder="請輸入街道地址">
    </div>
</div>

<script src="{{ asset('js/jquery.cxselect.min.js') }}"></script>
<script>
    $(function () {
        $("#address").cxSelect();
    })
</script>