<fieldset>
    <legend>會員註冊</legend>
    <div style="color:red">
        *請設定您要註冊的帳號及密碼(最長12個字元)
    </div>        
        <table>
            <tr>
                <td class="clo">Step1:登入帳號</td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td class="clo">Step2:登入密碼</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td class="clo">Step3:再次確認密碼</td>
                <td><input type="password" name="pw2" id="pw2"></td>
            </tr>
            <tr>
                <td class="clo">Step4:信箱(忘記密碼時使用)</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>
                    <button onclick="reg()">註冊</button>
                    <button onclick="clean()">清除</button></td>
                <td></td>
            </tr>
        </table>
    </div>
</fieldset>