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
	   
       echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><center><h1>Спасибо! Сообщение отправлено</h1></center>';
       $imya = $_POST['imya'];
       $telefon = $_POST['telefon'];
       $email = $_POST['email'];
       $text = $_POST['text'];
       $razmer = $_POST['razmer'];
       $filename = $_FILES['userfile']['name'];
       
       
if(!empty($filename)){
$filename ='('.date("H").'-'.date ("i").')'.$filename;
mail("designer.egor@ya.ru", "My Subject", "Имя: $imya \n Телефон: $telefon \n Мыло: $email \n Текст: $text \n Размер: $razmer \n ссылка http://mylinx.ru/prospect/new4/files/$filename");
  
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
echo "<center><h3>Файл успешно загружен на сервер</h3></center>'";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

       
       
}else{
mail("designer.egor@ya.ru", "My Subject", "Имя: $imya \n Телефон: $telefon \n Мыло: $email \n Текст: $text \n Размер: $razmer");
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
                    <a href="#s_2">Что это?</a>
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
                  НАБОРЫ ИНСТАМАГНИТОВ
                </h1>
                <p class="wow fadeInLeft">
                  Наборы инстамагнитов 5х5см —<br>
                  50 шт. за 800руб., <br>
                  100шт. за 1350 руб.<br>
                                 <br> </p> 
                <span class="wow fadeInLeft">
                   Закажи сейчас!
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
                  ЛЮБЫЕ МАГНИТЫ НА ЗАКАЗ
                </h1>
                <p class="wow fadeInLeft">
                  виниловые, акриловые, <br>
                  с заливной смолой, <br>
                  деревянные и многие другие - <br>
                 сделают своё дело                 </p>
                <span class="wow fadeInLeft">
                  от 3,9 руб./шт.
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
                  МАГНИТЫ НА АВТОМОБИЛЬ
                </h1>
                <p class="wow fadeInLeft">
                  Срок изготовления — 5-7 дней <br>
                  Доставка до адреса дома или офиса <br>
                  Разработка дизайна любой сложности <br>
                  Магнитный винил 0.7 мм
                </p>
                <span class="wow fadeInLeft">
                  от 26 руб/шт.
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="item jumbotron jumb5">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="wow fadeInLeft">
                  ЗНАЧКИ И МАГНИТЫ
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
                              <div class="selectbutton">Прикрепить макет</div>
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
          <a href="#s_1"><div class="order-tab">
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
                    Магниты <br> со смолой
                  </span>
                </li>
                <li rel="tab5" class="tab5">
                  <span>
                    Магниты <br> на автомобиль
                  </span>
                </li>
                 <li rel="tab6" class="tab6">
                  <span>
                    Индивидуальный <br> заказ
                  </span>
                </li>
              </ul>
            </div></a>
          </div>
          <div class="order-tab-content">
            <div class="tab_container container">
              <h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
              <div id="tab1" class="tab_content">
                <div class="row product-list wow fadeInLeft">
                  <div class="col-sm-6">
                    <div class="item">
                      <div class="item-head">
                        <h3>Квадратная : 5×5 см</h3>
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
                                50
                              </td>
                              <td>
                                11
                              </td>
                              <td>
                                550
                              </td>
                            </tr>
                            <tr>
                              <td>
                                2 500
                              </td>
                              <td>
                                4.5
                              </td>
                              <td>
                                11 250
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
                        <h3>Квадратная: 6,3×6,3 см</h3>
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
                                50
                              </td>
                              <td>
                                15
                              </td>
                              <td>
                                750
                              </td>
                            </tr>
                            <tr>
                              <td>
                                2 500
                              </td>
                              <td>
                                5.5
                              </td>
                              <td>
                                13 750
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
                        <h3>Квадратная: 8×8 см</h3>
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
                                50
                              </td>
                              <td>
                                30
                              </td>
                              <td>
                                1 500
                              </td>
                            </tr>
                            <tr>
                              <td>
                                2 500
                              </td>
                              <td>
                                11
                              </td>
                              <td>
                                27 500
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
                        <h3>Квадратная: 9,7×9,7 см</h3>
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
                                50
                              </td>
                              <td>
                                44
                              </td>
                              <td>
                                2 200
                              </td>
                            </tr>
                            <tr>
                              <td>
                                2 500
                              </td>
                              <td>
                                16.5
                              </td>
                              <td>
                                41 250
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
                        <h3>Круглая: 5×5 см</h3>
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
                                50
                              </td>
                              <td>
                                16
                              </td>
                              <td>
                                800
                              </td>
                            </tr>
                            <tr>
                              <td>
                                2 500
                              </td>
                              <td>
                                6.5
                              </td>
                              <td>
                                16 250
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
                        <h3>Круглая: 7×7 см</h3>
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
                                50
                              </td>
                              <td>
                                29
                              </td>
                              <td>
                                1 450
                              </td>
                            </tr>
                            <tr>
                              <td>
                                2 500
                              </td>
                              <td>
                                11
                              </td>
                              <td>
                                27 500
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
                          <span>Квадратная : 5×5 см</span>
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
                      <input type="hidden" name="razmer" value="Квадратная : 5×5 см">
                    </div>
                    
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Прикрепить макет</div>
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
                          <span>Квадратная: 6,3×6,3 см</span>
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
                      <input type="hidden" name="razmer" value="Квадратная: 6,3×6,3 см">
                    </div>
                    
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Прикрепить макет</div>
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
                          <span>Квадратная: 8×8 см</span>
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
                      <input type="hidden" name="razmer" value="Квадратная: 8×8 см">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Прикрепить макет</div>
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
                          <span>Квадратная: 9,7×9,7 см</span>
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
                      <input type="hidden" name="razmer" value="Квадратная: 9,7×9,7 см">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Прикрепить макет</div>
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
                          <span>Круглая: 5×5 см</span>
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
                      <input type="hidden" name="razmer" value="Круглая: 5×5 см">
                    </div>
                    <div class="form-group">
                      <textarea name="text" name="text" placeholder="Напишите необходимую продукцию и тираж..." required=""></textarea>
                    </div>
                    <div class="form-group btns">
                      <div class="fileform">
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
                              <div class="selectbutton">Прикрепить макет</div>
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
        <div class="heading heading-dark">
          <div class="container">
            <span>
              Как устроен виниловый магнит
            </span>
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
                <img src="images/advantages/big_img.png" alt="" class="">
              </div>
              <div class="col-sm-6 list-item">
                <div class="item-row clearfix"> 
                  <div class="col-xs-6 ">
                    <div class="topImg">
                      <img src="images/advantages/punk.svg" alt="" width="80%" height="80%">
                    </div>
                    <p>
                      Напомнит клиенту о Вашей компании
                    </p>
                  </div>
                  <div class="col-xs-6 ">
                    <div class="topImg">
                      <img src="images/advantages/afro.svg" alt="" width="80%" height="80%" >
                    </div>
                    <p>
                      Займёт достойное место в его коллекции
                    </p>
                  </div>
                </div>
                <div class="item-row clearfix">
                  <div class="col-xs-6">
                    <div class="topImg">
                      <img src="images/advantages/rapper.svg" alt="" width="80%" height="80%" >
                    </div>
                    <p>
                      Недорогой, но приятный сувенир
                    </p>
                  </div>
                  <div class="col-xs-6">
                    <div class="topImg">
                      <img src="images/advantages/heisenberg.svg" alt="" width="80%" height="80%" >
                    </div>
                    <p>
                      Повышает лояльность клиента
                    </p>
                  </div>
                </div>
                <div class="item-row clearfix">
                  <div class="col-xs-6">
                    <div class="topImg">
                      <img src="images/advantages/hipster.svg" alt="" width="80%" height="80%">
                    </div>
                    <p>
                      Прослужит не менее 5 лет
                    </p>
                  </div>
                  <div class="col-xs-6">
                    <div class="topImg">
                      <img src="images/advantages/scared.svg" alt="" width="80%" height="80%">
                    </div>
                    <p>
                      Победит мусорку, если будет сильным!
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
              <div class="col-sm-6 ">
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
              <div class="col-sm-6 ">
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
              <div class="col-sm-6 ">
                <div class="info-block">
                 <ul>
                    <li>
                      <strong>pdf</strong> (Adobe Acrobat)
                    </li>
                    <li>
                      <strong>tiff, psd </strong>(Adobe Photoshop)
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
              <div class="col-sm-6 ">
                <div class="payment_method">
                  <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/shop-widget?account=410014642126422&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=buyer&targets-hint=&default-sum=&button-text=03&comment=on&hint=&fio=on&phone=on&successURL=" width="100%" height="258"></iframe>
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
              <div class="col-sm-6 ">
                <div class="info-delivery">
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
              <div class="col-md-6 col-sm-6 bigImg wow fadeInLeft">
                <img src="images/crush_big_img.png" alt="" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="crush" id="s_7">
        <div class="heading heading-dark">
          <div class="container">
            <span>
              Контактная информация
            </span>
          </div>
        </div>
        <div class="section-main">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 map">
<a class="dg-widget-link" href="http://2gis.ru/chelyabinsk/firm/70000001006973665/center/61.3883399963379,55.16658858422566/zoom/14?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Челябинска</a><div class="dg-widget-link"><a href="http://2gis.ru/chelyabinsk/firm/70000001006973665/photos/70000001006973665/center/61.3883399963379,55.16658858422566/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/chelyabinsk/center/61.388032,55.161007/zoom/14/routeTab/rsType/bus/to/61.388032,55.161007╎Проспект, типография?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Проспект, типография</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":600,"height":451,"borderColor":"#a3a3a3","pos":{"lat":55.16658858422566,"lon":61.3883399963379,"zoom":14},"opt":{"city":"chelyabinsk"},"org":[{"id":"70000001006973665"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>              <div class="info-delivery">
                  <div class="feedback-info-txt">
                  <p>
                    
<b>Адрес:</b> г.Челябинск, Свердловский проспект, 64<br>
<b>Режим работы:</b> Пн-Пт 10:00-19:00, Сб 10:00-15:00, Вс — выходной<br><br>
<b>E-mail:</b> <a href="mailto: mail@magnita.ru">mail@magnita.ru</a><br>
<b>Тел:</b> <a href="tel:+73512420250">+7 (351) 242-02-50</a><br><br>
<a href="http://futurica.co">Пользовательсое соглашение и оферта</a><br><br>
<a href="http://futurica.co">Разработка: futurica.co</a>

                  </p>
                </div>
                                </div></div>
             
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
                              <div class="selectbutton">Прикрепить макет</div>
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
        
      </section>
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
                              <div class="selectbutton">Прикрепить макет</div>
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