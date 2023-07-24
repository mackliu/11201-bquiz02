<?php include_once "../base.php";?>
<table>
        <tr>
            <td width="30%">標題</td>
            <td width="40%">內容</td>
            <td>人氣</td>
        </tr>
        <?php
    $rows=$News->paginate(5,['sh'=>1]," order by goods desc");
    foreach($rows as $row){
    ?>        
        <tr>
            <td width="30%" class='title'><?=$row['title'];?></td>
            <td width="40%" class='content'>
                <div class="short"><?=mb_substr($row['text'],0,25);?>...</div>
                <div class="all">
                    <h2 style="color:aqua"><?=$News->type($row['type']);?></h2>
                    <div><?=$row['text'];?></div>
                </div>
            </td>
            <td>
                <span class="amount"><?=$row['goods'];?></span>個人說 <div class="good"></div>
            <?php
            if(isset($_SESSION['user'])){
                echo "-<a href='#' class='goods' data-id='{$row['id']}'>";
                echo $Log->showGoods($row['id']);
                echo "</a>";
            }
            ?>                
            </td>
        </tr>
    <?php
    }
    ?>        
    </table>
    <div><?=$News->links("pop");?></div>


