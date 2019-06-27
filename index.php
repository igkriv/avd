<!DOCTYPE html>
<html>
<head>
    <title>avd-trade.com</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- <script src="js/jquery-3.4.0.min.js"></script> -->
    <link rel="stylesheet" href="s.css">
</head>

<body>
    <h1>avd-trade service site</h1>
    <div class="data">
        <div class="f block">наименование</div>
        <div class="se block">кол-во, 3м</div>
        <div class="s block">кол-во, 4м</div>
        <div class="t block">цвет</div>
        <div class="fo block">диаметр</div>
        <div id="finp" class="fi block">результат</div>
        <form action="b.php" method="post">
            <span class="f block">желоб:</span>
            <input id="dlinazh3" class="se forma" type="text" name="dlinazh3">
            <input id="dlinazh4" class="s forma" type="text" name="dlinazh4">
            <select class="t forma" name="cvet">
                <option value="1">коричневый</option>
                <option value="2">белый</option>
                <option value="3">графит</option>
                <option value="4">серебро</option>
                <option value="5">черный</option>
                <option value="6">медный</option>
                <option value="7">кирпичный</option>
                <option value="8">зеленый</option>
            </select>
            <select class="fo forma" name="diam">
                <option>125</option>
                <option>150</option>
                <option>100</option>
                <option>75</option>
            </select>
            <input id="sinp" class="fi forma" type="submit" value="download excel file"><br>
        <!-- </form> -->
    </div><br>
    <div class="data">
        <div class="f block">наименование</div>
        <div class="se block">кол-во, 3м</div>
        <div class="s block">кол-во, 4м</div>
        <div class="t block">цвет</div>
        <div class="fo block">диаметр</div>
        <div class="fi block">результат</div>
            <span class="f block">труба:</span>
            <input id="dlinatr3" class="s forma" type="text" name="dlinatr3">
            <input id="dlinatr4" class="se forma" type="text" name="dlinatr4">
            <select class="t forma" name="cvet1">
                <option value="1">коричневый</option>
                <option value="2">белый</option>
                <option value="3">графит</option>
                <option value="4">серебро</option>
                <option value="5">черный</option>
                <option value="6">медный</option>
                <option value="7">кирпичный</option>
                <option value="8">зеленый</option>
            </select>
            <select class="fo forma" name="diam1">
                <option value="90">90</option>
                <option value="110">110</option>
                <option value="63">63</option>
            </select>
            <input id="secinput" class="fi forma" type="submit" value="расчет"><br>
        </form>
    </div>
    <div id="bottom">
        <a href="https://avd-trade.tk/">Powered by KRIG</a>
    </div>
    <script src="s.js"></script>
</body>
</html>