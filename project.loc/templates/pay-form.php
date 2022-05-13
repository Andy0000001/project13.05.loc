<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
    <link rel="stylesheet" href="/css/header.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/pay-page.css?<?echo time();?>">
</head>

<body>
<div class="page-wrapper">
        <header>
    
           <div class="main-logo">Custom Burgers</div> <!-- Лого должно быть слева + отступ слева от границы -->
           <div class="order-items"></div> <!-- должно быть с правого края и при заказе будет отображаться сколько бургеров и тд уже в корзине-->
           <div class="border-line"></div>
           
        </header>

            <main>
                <div class="main-group">
                    <input  id="name" class="first-name" type="text" placeholder=" " require autocomplete="off"  >
                    <label class = "first-label" for="name">full name</label>
                    <br/>
                    <input  id="number" class="number" type="number" placeholder=" " require autocomplete="off"  >
                    <label class = "second-label" for="number">number</label>
                </div>

                <div class="total"> TOTAL <!-- название в верху правого блока -->
                    <img class= "burger-photo" src="/img/1.jpeg.jpg" alt=""> <!-- сразу под ним фото бургера (тянется из бд) -->
                    <p class="choise-burg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, ducimus.</p> <!-- справа после фото название бургера (тянется из бд) -->
                    <div class="x">x</div> <!-- справа после названия знак умножения -->
                    <span class="order-sum">12</span> <!--справа после умножения число равное заказам этого бургера (из бд) -->
                    <div class="line">-</div> <!-- справа после числа знак дефис -->
                    <div class="price">250</div> <!-- справа после дефиса цена (из бд) -->
                    <div class="line-border">----------------</div> <!-- линия границы -->
                    <div class="total-sum">500</div> <!-- общая цена, соединяет цены заказа и считает-->
                </div>

            </div>
            </main>
        
</div>
<footer>
    
</footer>

<!-- js скрипт если надо -->
</body>
</html>