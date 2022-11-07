<?php
    $months = [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Август',
        4 => 'Сентябрь',
        5 => 'Октябрь',
        6 => 'Ноябрь',
    ];
   $tonnage = [
        1 => 25,
        2 => 50,
        3 => 75,
        4 => 100,
    ];

    $type = [
        1 => 'Шрот',
        2 => 'Жмых',
        3 => 'Соя',
    ];

    $price = [
        1 => [1 => [1 => 125, 2 => 121, 3 => 137, 4 => 126, 5 => 124, 6 => 128],
            2 => [1 => 145, 2 => 118, 3 => 119, 4 => 121, 5 => 122, 6 => 147],
            3 => [1 => 136, 2 => 137, 3 => 141, 4 => 137, 5 => 131, 6 => 143],
            4 => [1 => 138, 2 => 142, 3 => 117, 4 => 124, 5 => 147, 6 => 112]],

        2 => [1 => [1 => 121, 2 => 137, 3 => 124, 4 => 137, 5 => 122, 6 => 125],
            2 => [1 => 118, 2 => 121, 3 => 145, 4 => 147, 5 => 143, 6 => 145],
            3 => [1 => 137, 2 => 124, 3 => 136, 4 => 143, 5 => 112, 6 => 136],
            4 => [1 => 142, 2 => 131, 3 => 138, 4 => 112, 5 => 117, 6 => 138],],
        
        3 => [1 => [1 => 137, 2 => 125, 3 => 124, 4 => 122, 5 => 137, 6 => 121],
            2 => [1 => 147, 2 => 145, 3 => 145, 4 => 143, 5 => 119, 6 => 118],
            3 => [1 => 112, 2 => 136, 3 => 136, 4 => 112, 5 => 141, 6 => 137],
            4 => [1 => 122, 2 => 138, 3 => 138, 4 => 117, 5 => 117, 6 => 142],]
    ];
?>

<div class  ='container'>
    <div class="row mt-5">   
<form action = "index.php" method = "POST">
        <div class="mb-3">
        <label for="months" class="form-label">Месяц</label>
            <select name = 'months' class="form-select" aria-label="Default select example">
                <option selected disabled> Выбрать месяц </option>
                <?php foreach ($months as $key => $value): ?>
                    <option value="<?= $key ?>"> <?= $value ?> </option>
                <?php endforeach ?>
            </select>
        </div>
    <div class="mb-3">
    <label for="tonnage" class="form-label">Тоннаж</label>
            <select name = 'tonnage' class="form-select" aria-label="Default select example">
                <option selected disabled> Выбрать тоннаж </option>
                    <?php foreach ($tonnage as $key => $value): ?>
                    <option value="<?= $key ?>"> <?= $value ?> </option>
                    <?php endforeach ?>
            </select>
    </div>
    <div class="mb-3">
    <label for="type" class="form-label">Тип сырья</label>
            <select name = 'type' class="form-select" aria-label="Default select example">
                <option selected disabled> Выбрать сырье </option>
                <?php foreach ($type as $key => $value): ?>
                    <option value="<?= $key ?>"> <?= $value ?> </option>
                <?php endforeach ?>
            </select>
    </div>
    <button type="submit" class="btn btn-primary">Расчитать</button>
    </form>
</div>
</div>

<?php if (isset ($_POST) && count($_POST) ===3): ?>
    <?php    
        $selectMonth = $_POST['months'];
        $selectTonnage = $_POST['tonnage'];
        $selectType = $_POST['type'];
        echo '<br>';
        echo 'Стоимость = ' . $price[$selectType][$selectTonnage][$selectMonth]; 
    ?>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Тоннаж|</th>
            <?php foreach ($months as $key => $value): ?>
            <th scope="col"><?= $value ?></th>
            <?php endforeach ?>
            </tr>
        </thead>
    <tbody>
        <?php for ($i = 1; $i <= 4; $i++):?>
            <tr>
            <th scope="row"><?= $tonnage[$i]?></th>   
            <?php  foreach ($price[$selectType][$i] as $key => $value): ?> 
            <td> <?= $value ?> </td>
            <?php endforeach ?>
            </tr>
        <?php endfor ?>
    </tbody>
    </table>
    
<?php endif ?>
 
   
