<fieldset>
    <legend>帳號管理</legend>
    <form action="./api/user_admin.php" method='post'>
    <table class="ct" style="width:50%;margin:auto">
        <tr class='clo'>
            <td>帳號</td>
            <td>密碼</td>
            <td>刪除</td>
        </tr>
        <?php
        foreach($rows as $row){
        ?>
        <tr>
            <td><?=$row['acc'];?></td>
            <td><?=str_repeat("*",strlen($row['pw']));?></td>
            <td>
                <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct">
        <input type="submit" value="確定刪除">
        <input type="reset" value="清空選取">
    </div>
    </form>
</fieldset>