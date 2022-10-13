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
    <div class = "background2" style = "position: absolute; left: 0%; top:20%; height: 110%;"></div>
      <div class = "blackout" style = "position: absolute; left: 30%;top:25%; height: 80%;"></div>
      <form action = "index.php" method = "POST" enctype = "multipart/form-data" class = "text" style = "position: absolute; left: 40%;top:25%; width: 45%;"> 
            <label for = "last_name" >Фамилия <br><br><em></em></label>
            <input id = "last_name" name = "last_name" value="<?=isset($_POST['last_name'])?$_POST['last_name']:''?>" ><br>      
            <label for = "first_name" >Имя <br><br><em></em></label>
            <input id = "first_name" name = "first_name" value="<?=isset($_POST['first_name'])?$_POST['first_name']:''?>"><br>
            <label for = "second_name" >Отчество <br><br><em></em></label>
            <input id = "second_name" name = "second_name" value="<?=isset($_POST['second_name'])?$_POST['second_name']:''?>"><br>
            
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
            <div class = "text" style = "position: absolute; width: 40%; height: 10%;"></div><br><br><br>            
              <p><input type = "submit" class = "button_main" value="   Заполнить повторно   "></p>
      </form>
    </main>
    <footer>
      <div class = "top_line" style = "position: absolute; left: 0%;top:110%; width: 100%; height: 20%;"> </div>
      <div class = "text" style = "position: absolute; left: 35%;top:115%; width: 40%; height: 10%;">Крупенин Александр +7 901 744 15 74 </div>
    </footer>
  </body>
  </html>

