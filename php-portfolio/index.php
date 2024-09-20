<?php
    include 'boilerplate.php';
?>
<body>
    <h1>Ievietot sludinājumu</h1>
    <a href="contact.html">Uz kontaktiem</a>
    <hr>
    <img src="https://img.autogidas.lt/4_26_248532874/bmw-320-e90-sedanas-2006.jpg" alt="" class="image">
    <form action="receive-data.php" method="post">
        <label for="make">Enter your car's make</label>
        <br>
        <input type="text" name="make">
        <br>
        <label for="model">Enter your car's model</label>
        <br>
        <input type="text" name="model">
        <br>
        <input type="radio" id="diesel" name="fuel" value="diesel" checked>
        <label for="carrot">Diesel</label>
        <input type="radio" id="gasoline" name="fuel" value="gasoline">
        <label for="lettuce">Gasoline</label>
        <br>
        <label for="engine">Engine displacement:</label>
        <select name="engine" id="engine">
            <option value="16">1.6l</option>
            <option value="18">1.8l</option>
            <option value="20">2.0l</option>
            <option value="30">3.0l</option>
        </select>
        <br>
        <input type="submit" value="submit">
    </form>
    <ul>
        <?php 
            $cars = [
                1 => ['make' => 'BMW', 'model' => '320', 'fuel' => 'diesel', 'engine' => '2.0'],
                2 => ['make' => 'Mercedes', 'model' => 'SLK', 'fuel' => 'gasoline', 'engine' => '2.0'],
                3 => ['make' => 'Audi', 'model' => '80', 'fuel' => 'gasoline', 'engine' => '1.6'],
            ];
            
            foreach($cars as $car) {
                $make = $car['make'];
                $model = $car['model'];
                $fuel = $car['fuel'];
                $engine = $car['engine'];
                $str = "<li>$make $model, $engine $fuel</li>";
                echo $str;
            }
        ?>
    </ul>
</body>
</html>