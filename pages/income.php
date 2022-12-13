<main class="main">
    <div class="container main-income">
        <div class="main__income-block">
            <div class="main__income-row">
                <h2 class="main__income-title">Добавить доход</h2>
            </div>
            <form action="./components/add-income.php" method="POST" class="main__income-info">
                <div class="main__income-row">
                    <input type="text" 
                    class="main__income-sum currency-mask" 
                    placeholder="Сумма" 
                    autocomplete="off"
                    name="summa">
                    <select name="incomtype" id="" class="main__income-select">
                        <option value="Заработная плата">Заработная плата</option>
                        <option value="Иные Доходы">Иные Доходы</option>
                    </select>
                    <input type="date"  
                    name="date" 
                    class="main__income-date" 
                    value="<?echo date("Y-m-d");?>" 
                    min="2017-01-01" 
                    max="2025-01-01">
                    <input type="time"  name="time" class="main__income-time">
                    <textarea name="comment"  class="main__income-textarea" placeholder="Комментарий"></textarea>
                </div>
                <div class="main__income-row">
                <button type="submit" class="main__submit-btn">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</main>
