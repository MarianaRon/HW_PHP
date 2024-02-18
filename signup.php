

<div class="container my-4">
    <h1>Реєстрація</h1>
    <form class="col s12" method="post">
    <div class="input-field col s6">
         <input  id="icon_email" type="tel"  name="user-email">
         <i class="material-icons prefix">mail</i>
         <label for="icon_email">Введіть E-mail</label>
         <span class="helper-text"
               data-error="Це необхідне поле"
               data-success="Правильно"></span>
    </div>
        
    <div class="input-field col s6">
        <input id="icon_prefix" type="text" name="user-name" class="" >
        <i class="material-icons prefix">account_circle</i>
        <label for="icon_prefix">Введіть прізвище, ім'я, по-батькові</label>
        <span class="helper-text"data-error=""
              data-success="Правильно"></span>
    </div>
        
    <div class="input-field col s6">
        <input  id="icon_password" type="password" name="user-password" >
        <i class="material-icons prefix">lock</i>
        <label for="icon_password">Введіть пароль</label>
        <span class="helper-text"
              data-error="Це необхідне поле"
              data-success="Припустимо"></span>
    </div>
        
    <div class="input-field col s6">
        <input id="icon_repeat" type="password"  name="user-repeat" inputmode="tel">
        <i class="material-icons prefix">key</i>
        <label for="icon_repeat">Повторіть введений пароль</label>
        <span class="helper-text"
              data-error="Це необхідне поле"
              data-success="Правильно"></span>
    </div>
        
    <div class="file-field input-field col s6">
        <div class="btn pink darken-2">
            <i class="material-icons">photo</i>
            <input type="file">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Аватарка">
        </div>
    </div><br>
    <div class="input-field col s6">
         <button class="btn btn-success" type="submit"><i class="material-icons left">task_alt</i>РЕЄСТРАЦІЯ</button>
         </div>
 </form></div>