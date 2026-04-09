<?php
// подключение к базе данных
$conn = new mysqli("localhost", "root", "", "Udmurtia_t2");
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT * FROM `card_route`"; // таблица с маршрутами
$result = $conn->query($sql);
?>

<?php
while($row = $result->fetch_assoc()) {
    // Используем 'id' из вашей таблицы для уникальности
    $cardId = "card-" . $row["id"]; 
    
    echo '<div id="'.$cardId.'" class="floating-card">';
    // Выводим первую картинку из колонки img_1
    echo '  <img src="'.$row["img_1"].'" alt="'.$row["name"].'">'; 
    echo '  <div class="content">';
    echo '    <img src="img/Location1.png" alt="">';
    echo '    <h3>'.$row["name"].'</h3>'; // В базе это 'name', а не 'title'
    echo '    <p class="desc">'.$row["description"].'</p>';
    echo '    <div class="info">';
    echo '      <div class="footer">';
    echo '        <div class="rating">';
    echo            $row["reviews_count"].' отзывов '.$row["rating"].' <span class="stars">★★★★★</span>';
    echo '        </div>';
    echo '        <div class="price-row">';
    echo '          <span class="price">'.number_format($row["price"], 0, '', ' ').'₽ <small>за человека</small></span>';
    echo '          <div class="card-buttons">';
    echo '            <a href="#contact" class="btn-book">Забронировать</a>';
    // →
    // echo '            <button onclick="centerOnMapPoint(\''.$cardId.'\')" class="btn-map">📍 Карта</button>';
    echo '          </div>';
    echo '        </div>';
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}

?>