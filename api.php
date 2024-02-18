
<h1>API та бекенд</h1>
<div class="card-panel pink darken-1">
    <button class="btn pink darken-4" onclick="getClick()">CREATE</button>
   
    <div id="api-result">
    </div>

</div>
<div class="card-panel pink darken-4">
   
    <button class="btn pink darken-1" onclick="postClick()">POST</button>
    <div id="api-result2">
    </div>

</div>

<h2>Робота з БД</h2>
<p>
Підготовчі роботи.
Встановлюємо СУБД (MySQL/MariaDB).
Створюємо окрему БД для проєкту, користувача для неї.<br/>
<code>CREATE DATABASE php_spd_111;</code><br/>
<code>CREATE USER 'spd_111_user'@'localhost' IDENTIFIED BY 'spd_pass';</code><br/>
Даємо користувачу права на дану БД<br/>
<code>GRANT ALL PRIVILEGES ON php_spd_111.* TO 'spd_111_user'@'localhost';</code><br/>
Оновлюємо таблицю доступу<br/>
<code>FLUSH PRIVILEGES</code><br/>
</p>
<p>
Підключення.
Є дві групи технологій роботи з БД: "індивідуальні" - набори команд
під кожну БД окремо (mysql_connect(), ib_connect(),...);
та "універсальна" - технологія PDO (аналог ADO у .NET)
    <p>Далі розглядаємо PDO.</p>
</p>

<script>
    function getClick(){//надсилаємо запит до сервера - fetch
        fetch("/test")//передаємо адресу
        .then(r => r.text())//.then - приходить відповідь. (r => r.text())- перетворюємо її в текст
        .then(t => {//приходить вже текст (t )
            //виводимо в блочок текст
            document.getElementById("api-result").innerText = t;
        });

    }
    function postClick(){
        fetch("/test",{//fetch автоматично надсилає запити методом GET
            method: 'POST'//для передачі методом POST необхідно його вписати
        })
        .then(r => r.text())
        .then(t => {
            document.getElementById("api-result2").innerText = t;
        });
    }
</script>
