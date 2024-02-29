<?php
    require('../inc/db_config.php');

    if(isset($_POST['get_categories'])){
        $res = selectAll('categoties');

        while($row = mysqli_fetch_assoc($res)){
            echo <<<data
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="$row[catImage]">
                            <h5><a href="#">$row[catName]</a></h5>
                        </div>
                    </div>
                </div>
            data;

        }
            
        

    }

?>