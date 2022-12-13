<main class="main">
    <div class="container main-consumption">
    <div class="main__consumption-block">
            <h2 class="main__consumption-title">Добавить расход</h2>
            <form action="./components/add-consumption.php" method="POST" class="main__consumption-info">
                <div class="main__consumption-row">
                    <input type="text" 
                    class="main__consumption-sum currency-mask" 
                    placeholder="Сумма" 
                    name="summa"
                    autocomplete="off">
                    <select name="comstype"  class="main__consumption-select">
                        <option value="Продукты питания">Продукты питания</option>
                        <option value="Транспорт">Транспорт</option>
                        <option value="Мобильная связь">Мобильная связь</option>
                        <option value="Интернет">Интернет</option>
                        <option value="Развлечения">Развлечения</option>
                        <option value="Другое">Другое</option>
                    </select>
                    <input 
                    type="date"  
                    name="date" 
                    class="main__consumption-date"
                    value="<?echo date("Y-m-d");?>" 
                    min="2017-01-01" 
                    max="2025-01-01">
                    <input type="time" name="time" class="main__consumption-time">
                    <textarea name="comment" class="main__consumption-textarea" placeholder="Комментарий"></textarea>
                </div>
                <div class="main__consumption-row">
                    <button class="main__submit-btn" type="submit">Отправить</button>
                </div>
            </form>
        </div>
</main>