<?php
  include('header.html');
  require_once __DIR__ .'/data.php';
  require_once __DIR__ .'/functions.php';
  if(!empty($_POST)){
    debug($_POST);
      $fields = load($fields);
      debug($fields);
      if($errors = validate($fields)){
        debug($errors);
      }else{
        echo 'OK';
      }
  }

 ?>

  <body>
    <header>
    <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
      <h1 class = "text_up head_title" style= "position: fixed; left: 25%;top:1%; width: 45%;height: 5%;">Отдых на природе</h1>  
    </header>
    <main> 
      <div class = "background1" style = "position: absolute; left: 0%; top:20%; height: 110%;"></div>
      <div class = "blackout" style = "position: absolute; left: 30%;top:25%; height: 80%;"></div>
      <form  action = "home.php" method = "POST" enctype = "multipart/form-data" class = "text" style = "position: absolute; left: 40%;top:25%; width: 45%;">    
            <label for = "last_name">Фамилия <br><br><em></em></label>
            <input id = "last_name" name = "last_name" value="<?=isset($_POST['last_name'])?$_POST['last_name']:''?>"><br>      
            <label for = "first_name">Имя <br><br><em></em></label>
            <input id = "first_name" name ="first_name" value="<?=isset($_POST['first_name'])?$_POST['first_name']:''?>"><br>
            <label for = "second_name">Отчество <br><br><em></em></label>
            <input id = "second_name" name ="second_name" value="<?=isset($_POST['second_name'])?$_POST['second_name']:''?>"><br>
            <label for = "email" >Email <br><br><em></em></label>
            <input id = "email" name ="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>"><br>
            <label for = "sex">Вид<br><br></label>
            <select id = "sex">
              <option value = "appeal">Жалоба</option>
              <option value = "handling">Обращение</option>
              <option value = "help">Помощь</option>
              <option value = "other">Другое</option>
            </select><br>
            <label for = "comments">Заметки<br><br></label>
            <input id = "comments" name = "comments"><br>
            <label for = "about">Откуда узнали о нас<br></label>
            <label><br>
              <input type="radio" name="radio-test" value="1"<?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '1') { 
                echo 'checked';
              }
              ?> >
              Друзья
            </label>
            <label><br>
              <input type="radio" name="radio-test" value="2" <?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '2') { 
                echo 'checked';
              }
              ?> >
              Соцсети
            </label>
            <p><input type = "file" name = "photo" multiple accept = "image/*,image/jpeg"></p>
            <textarea id = "text" name="text"  style="background: #ffffff;border: 2px solid #ffffff; width: 305px; height: 80px; box-sizing: border-box; font-size: 14px; resize: none;">
              </textarea> <br>
              <input type="checkbox" name="option5" value="a5">Даю согласие на обработку </br> персональных данных</p> 
                   
              <p><input type = "submit" class = "button_main" value="          Отправить         "></p>
              
      </form>

    </main>
    <footer>
      <div class = "top_line" style = "position: absolute; left: 0%;top:110%; width: 100%; height: 20%;"> </div>
      <div class = "text" style = "position: absolute; left: 35%;top:115%; width: 40%; height: 10%;"><?php echo($errors); ?> </div>
    </footer>
  </body>
  
  </html>
