請輸入信箱以查詢密碼
<input type="email" name="email" id="email">
<div id="res"></div>
<button onclick="find()">尋找</button>
<script>
function find(){
    $.get("./api/find.php",{email:$("#email").val()},(res)=>{
        $("#res").text(res)
    })
}
</script>