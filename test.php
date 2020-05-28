<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магниты</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--style.css-->
    <link rel="stylesheet" href="css/style.css">
    <!--slick css-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!--animate.css-->
    <link rel="stylesheet" href="css/animate.css">
  </head>
  <body>
  
<?php
	if(isset($_POST['send'])){
	   
       echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><center><h1>ОТПРАВЛЕНО</h1></center>';
       $imya = $_POST['imya'];
       $telefon = $_POST['telefon'];
       $email = $_POST['email'];
       $text = $_POST['text'];
       $razmer = $_POST['razmer'];
       $filename = $_FILES['userfile']['name'];
       
       
if(!empty($filename)){
$filename ='('.date("H").'-'.date ("i").')'.$filename;
mail("djsensei@mail.ru", "My Subject", "Имя: $imya \n Телефон: $telefon \n Мыло: $email \n Текст: $text \n Размер: $razmer \n ссылка http://mylinx.ru/prospect/new/files/$filename");
  
// Каталог, в который мы будем принимать файл:
$uploaddir = './files/';
$uploadfile = $uploaddir.basename($filename);


$blacklist = array(".php", ".phtml", ".php3", ".php4");
foreach ($blacklist as $item) {
if(preg_match("/$item\$/i", $filename)) {
echo "Нельзя заливать PHP файлы\n";
exit;
}
}


// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['userfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

       
       
}else{
mail("djsensei@mail.ru", "My Subject", "Имя: $imya \n Телефон: $telefon \n Мыло: $email \n Текст: $text \n Размер: $razmer");
}
       
       






    
    
    }
    
    
    

    
    
    
    
    
    
?>    
  
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="logo">
            <div class="brand">
              <a href="">
                <img src="images/logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="navbar">
            <div class="toggle-menu">
              <div class="hamburger">
                <span></span>
              </div>
            </div>
            <div class="memu">
              <nav>
                <ul>
                  <li>
                    <a href="#s_1" class="active">Заказать</a>
                  </li>
                  <li>
                    <a href="#s_2">магниты</a>
                  </li>
                  <li>
                    <a href="#s_3">преимущества</a>
                  </li>
                  <li>
                    <a href="#s_4">требования</a>
                  </li>
                  <li>
                    <a href="#s_5">оплата</a>
                  </li>
                  <li>
                    <a href="#s_6">доставка</a>
                  </li>
                  <li>
                    <a href="#s_7">контакты</a>
                  </li>
                </ul>
              </nav>
              
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="home-slider">
      <div class="jumb-slider">
        <div class="item jumbotron jumb1">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="wow fadeInLeft">
                  ВИНИЛОВЫЕ МАГНИТЫ
                </h1>
                <p class="wow fadeInLeft">
                  Срок изготовления — 24 часа <br>
                  Доставка до адреса дома или офиса <br>
                  Разработка дизайна любой сложности <br>
                  Магнитный винил 0.4 мм
                </p>
                <span class="wow fadeInLeft">
                  от 4 руб/шт.
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="item jumbotron jumb2">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="wow fadeInLeft">
                  ВИНИЛОВЫЕ МАГНИТЫ
                </h1>
                <p class="wow fadeInLeft">
                  Срок изготовления — 24 часа <br>
                  Доставка до адреса дома или офиса <br>
                  Разработка дизайна любой сложности <br>
                  Магнитный винил 0.4 мм
                </p>
                <span class="wow fadeInLeft">
                  от 4 руб/шт.
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="item jumbotron jumb3">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="wow fadeInLeft">
                  ВИНИЛОВЫЕ МАГНИТЫ
                </h1>
                <p class="wow fadeInLeft">
                  Срок изготовления — 24 часа <br>
                  Доставка до адреса дома или офиса <br>
                  Разработка дизайна любой сложности <br>
                  Магнитный винил 0.4 мм
                </p>
                <span class="wow fadeInLeft">
                  от 4 руб/шт.
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="item jumbotron jumb4">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="wow fadeInLeft">
                  ВИНИЛОВЫЕ МАГНИТЫ
                </h1>
                <p class="wow fadeInLeft">
                  Срок изготовления — 24 часа <br>
                  Доставка до адреса дома или офиса <br>
                  Разработка дизайна любой сложности <br>
                  Магнитный винил 0.4 мм
                </p>
                <span class="wow fadeInLeft">
                  от 4 руб/шт.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feedback-form">
        <div class="feedback wow fadeInRight">
                  <span>Закажите сейчас!</span>
                  <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="no">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                </div>
                <div class="feedback-info-txt">
                  <p>
                    Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                  </p>
                </div>
      </div>
    </div>
    <main>
      <section class="order" id="s_1">
        <div class="heading heading-dark">
          <div class="container">
            <span >
              ИЗГОТОВИМ ДЛЯ ВАС ЛЮБОЙ ЗАКАЗ
            </span>
          </div>
        </div>
        <div class="section-main">
          <div class="order-tab">
            <div class="container">
              <ul class="tabs">
                <li class="active tab1" rel="tab1">
                  <span>
                    Виниловые <br> магниты
                  </span>
                </li>
                <li rel="tab2" class="tab2">
                  <span>
                    Акриловые <br> магниты
                  </span>
                </li>
                <li rel="tab3" class="tab3">
                  <span>
                    Закатные <br> магниты и значки
                  </span>
                </li>
                <li rel="tab4" class="tab4">
                  <span>
                    Магниты <br> на автомобиль
                  </span>
                </li>
                <li rel="tab5" class="tab5">
                  <span>
                    Индивидуальный <br> заказ
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="order-tab-content">
            <div class="tab_container container">
              <h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
              <div id="tab1" class="tab_content">
                <div class="row product-list wow fadeInLeft">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm1">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×10 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm2">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row product-list wow fadeInLeft">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm3">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm4">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row product-list wow fadeInLeft">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm5">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm6">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×10 СМ2</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х10">
                    </div>
                    
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm3" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ3</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm4" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ4</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm5" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ5</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm6" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ6</span>
                          <span>123123</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab2" class="tab_content">
                <div class="row product-list">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm7-1">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm7-2">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm7-1" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm7-2" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab3" class="tab_content">
                <div class="row product-list">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm8-1">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm8-2">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row product-list">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm8-3">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm8-4">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row product-list">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm8-5">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm8-1" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm8-2" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm8-3" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm8-4" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm8-5" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab4" class="tab_content">
                <div class="row product-list">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm9-1">Заказать</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm9-2">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row product-list">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Прямоугольная: 5×9 см</h3>
                      </div>
                      <div class="item-main clearfix">
                        <div class="col-sm-4 product-img">
                          <img src="images/product/1.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-8">
                          <table>
                            <tr>
                              <td>
                                Тираж, <br> шт.
                              </td>
                              <td>
                                Цена <br> за шт., руб
                              </td>
                              <td>
                                Цена за <br> тираж, руб.
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                            <tr>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                              <td>
                                123
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="item-footer">
                        <a href="">Скачать прайс</a>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm9-3">Заказать</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm9-1" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm9-2" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade bs-example-modal-sm9-3" tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="feedback">
                          <span>Закажите сейчас!</span>
                          <span>ПРЯМОУГОЛЬНАЯ: 5×9 СМ1</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="5х9">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                        </div>
                        <div class="feedback-info-txt">
                          <p>
                            Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                          </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab5" class="tab_content individual">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="feedback">
                      <span>Закажите сейчас!</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="no">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                    </div>
                    <div class="feedback-info-txt">
                      <p>
                        Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/individual_order_big_img.png" alt="" class="img-responsive" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       
      <section class="howIs" id="s_2">
        <div class="heading heading-light">
          <div class="conctainer">
            <span>КАК УСТРОЕН ВИНИЛОВЫЙ МАГНИТ?</span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <img src="images/howIt_bg.png" alt="" class="img-responsive wow fadeInLeft">
          </div>
        </div>
      </section>

      <section class="advantages" id="s_3">
        <div class="heading heading-dark">
          <div class="container">
            <span>
              Преимущества виниловых магнитов
            </span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 bigImg">
                <img src="images/advantages/big_img.png" alt="" class="img-responsive wow fadeInLeft">
              </div>
              <div class="col-sm-6 list-item">
                <div class="item-row clearfix">
                  <div class="col-xs-6 wow fadeInRight">
                    <div class="topImg">
                      <img src="images/advantages/1.png" alt="">
                    </div>
                    <p>
                      Вы будете первым  среди конкурентов!
                    </p>
                  </div>
                  <div class="col-xs-6 wow fadeInRight">
                    <div class="topImg">
                      <img src="images/advantages/1.png" alt="">
                    </div>
                    <p>
                      Вы будете первым  среди конкурентов!
                    </p>
                  </div>
                </div>
                <div class="item-row clearfix">
                  <div class="col-xs-6 wow fadeInRight">
                    <div class="topImg">
                      <img src="images/advantages/1.png" alt="">
                    </div>
                    <p>
                      Вы будете первым  среди конкурентов!
                    </p>
                  </div>
                  <div class="col-xs-6 wow fadeInRight">
                    <div class="topImg">
                      <img src="images/advantages/1.png" alt="">
                    </div>
                    <p>
                      Вы будете первым  среди конкурентов!
                    </p>
                  </div>
                </div>
                <div class="item-row clearfix">
                  <div class="col-xs-6 wow fadeInRight">
                    <div class="topImg">
                      <img src="images/advantages/1.png" alt="">
                    </div>
                    <p>
                      Вы будете первым  среди конкурентов!
                    </p>
                  </div>
                  <div class="col-xs-6 wow fadeInRight">
                    <div class="topImg">
                      <img src="images/advantages/1.png" alt="">
                    </div>
                    <p>
                      Вы будете первым  среди конкурентов!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="herbage" id="s_4">
        <div class="heading heading-dark">
          <div class="container">
            <span>
              Требования к макету
            </span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 wow fadeInLeft">
                <div class="info-block">
                  <p>Файлы для печати необходимо предоставить в одном из форматов:</p>
                  <ul>
                    <li>
                      <strong>pdf</strong> (Adobe Acrobat)
                    </li>
                    <li>
                      <strong>tiff</strong>, psd (Adobe Photoshop)
                    </li>
                    <li>
                      <strong>cdr</strong> (Corel Draw)
                    </li>
                    <li>
                      <strong>jpg</strong> (Растровые изображения) должны иметь разрешение не менее 300 dpi.
                    </li>
                    <li>
                      Если материал печати не белый, то макеты с белыми местами будут при печати под цвет полотна, учитывайте это при создании макета!
                        (Относится к золотому и серебряному пластику).
                    </li>
                    <li>
                      Внешние вылеты за вырубной контур должны быть <strong>не менее 2,5мм</strong>. в каждую сторону.
                    </li>
                    <li>
                      Расстояние от края магнита до текста или значимых элементов должно быть <strong>не менее 3 мм</strong> с каждой стороны.
                      Также надо учитывать скругленные углы магнита при разработке дизайна.
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInRight">
                <img src="images/herbage_big_img.png" alt="" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="payment" id="s_5">
        <div class="heading heading-light"> 
          <div class="container">
            <span>СПОСОБЫ ОПЛАТЫ</span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="payment_method_item">
                  <img src="images/method_payment.png" alt="" class="img-responsive">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 wow fadeInLeft">
                <div class="info-block">
                  <ul>
                    <li>
                      Hаличными курьеру при получении
                      (Только для Москвы и Московской области)
                    </li>
                    <li>
                      Безналичный расчет (для юридических лиц)
                    </li>
                    <li>
                      На карту Сбербанка <span>6761-9600-0216-9575-98</span>
                    </li>
                    <li>
                      На счет Яндекс-денег <span>41001423052941</span>
                    </li>
                  </ul>
                  <p>
                    На магниты: при заказе количества от 1000 шт. — изготовление дизайна магнита <span>бесплатно.</span>
                  </p>
                  <p>
                    сюда входит: разработка макета, при условии предоставления исходников, логотипа, сайта, четких пожеланий, а также мелкие доработки.
                  </p>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInRight">
                <div class="payment_method">
                  <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/shop-widget?account=410014642126422&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=buyer&targets-hint=&default-sum=&button-text=03&comment=on&hint=&fio=on&phone=on&successURL=" width="450" height="258"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="delivery" id="s_6">
        <div class="heading heading-dark">
          <div class="container">
            <span>способы доставки</span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <div class="info-block">
              <p><span>Внимание!</span> Минимальная стоимость заказа при условии осуществления доставки – 500 руб. В остальных случаях заказ забирается самовывозом с нашего производства по адресу: Московская область, Наро-Фоминский р-н п. Селятино, ул. Спортивная д. 4.</p>
            </div>
            <div class="row">
              <div class="col-sm-6 wow fadeInLeft">
                <div class="info-delivery wow fadeInLeft">
                  <div class="item">
                    <p>По Москве: <br>
                    Заказы на магниты,  тиражом более 1 000 шт. – доставляются бесплатно. <br>
                    (в пределах МКАД) <br>
                    Остальные заказы: <br>
                    До любого метро – 200р. <br>
                    По адресу – 350р.</p>
                  </div>
                  <div class="item">
                    <p>
                      По Подмосковью: <br>
                      От 500р. (зависит от дальности расположения от МКАД) <br>
                      Рассчитывается индивидуально менеджером. <br>
                    </p>
                  </div>
                  <div class="item">
                    <p>
                      по России: <br>
                      Доставка до терминала транспортной компании – бесплатно. <br>
                      Далее доставку груза оплачивает клиент. <br>
                      Стоимость обычно 400-600р. <br>
                      ТК “Байкал-сервис”, “Деловые линии”. <br>
                      Срок от 1 до 5 дней. <br>
                      По почте: <br>
                      Стоимость обычно от 200р. до 600р. <br>
                      Средний срок 2 недели. <br>
                      Контакты: <br>
                      Адрес производства: <br>
                      Московская область, Наро-Фоминский р-н <br>
                      п. Селятино, ул. Спортивная д.4
                    </p>
                  </div>
                </div>
              </div> 
              <div class="col-sm-6 map wow fadeInRight">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6997524.674487253!2d17.138442382728332!3d64.64757421012774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cadf4b32f6dd%3A0x146d63c75a810!2z0KTQuNC90LvRj9C90LTQuNGP!5e0!3m2!1sru!2sru!4v1492146953357" height="650" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="crush" id="s_7">
        <div class="heading heading-dark">
          <div class="container">
            <span>
              Получите расчет прямо сейчас!
            </span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 bigImg wow fadeInLeft">
                <img src="images/crush_big_img.png" alt="" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 wow fadeInRight">
                <div class="feedback">
                  <span>Закажите сейчас!</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="no">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                </div>
                <div class="feedback-info-txt">
                  <p>
                    Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                  </p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section class="big-info" id="s_8">
        <div class="heading heading-dark" data-toggle="modal" data-target=".bs-example-modal-sm">
          <div class="container">
            <span>
              Получи расчет за 1 минуту!
            </span>
          </div>
        </div>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" >
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="feedback">
                  <span>Закажите сейчас!</span>
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" placeholder="Ваше имя" name="imya" required="">
                    </div>
                    <div class="form-group">
                      <input type="phone" placeholder="Телефон" name="telefon" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required="email">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="razmer" value="no">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Загрузить макет</div>
                              <input id="upload" type="file" name="userfile" >
                              </div>
                      <input type="submit" name="send" class="btn btn-primary">
                    </div>
                  </form>
                </div>
                <div class="feedback-info-txt">
                  <p>
                    Закажите расчет прямо сейчас, <br> менеджер перезвонит в течении 1 <br> минуты и ответит на все вопросы
                  </p>
                </div>
            </div>
          </div>
        </div>
      </section>

      <div class="goTop">
        <img src="images/goTop.png" alt="">
      </div>
    </main>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
       $(document).ready(function () {
          $(document).on("scroll", onScroll);

          $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function () {
              $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = this.hash;
            $target = $(target);
            $('html, body').stop().animate({
              'scrollTop': $target.offset().top-90
            }, 500, 'swing', function () {
              window.location.hash = target;
              $(document).on("scroll", onScroll);
            });
          });

          var width = $(document).width();
            if(width < 767){
              $('.navbar nav').css("display","none");
                $('body').removeClass('menu-active');
            }
        });

        function onScroll(event){
          var scrollPosition = $(document).scrollTop();
          $('nav a').each(function () {
            var currentLink = $(this);
            var refElement = $(currentLink.attr("href"));
            if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
              $('nav ul li a').removeClass("active");
              currentLink.addClass("active");
            }
            else{
              currentLink.removeClass("active");
            }
          });
        }
    </script>
  </body>
</html>