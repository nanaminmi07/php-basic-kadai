body>
    <p>
        <?php
        function sort_2way($array, $order) {
            $nums = [15, 4, 8, 23, 10];
            if($order) {
                echo "昇順にソートしました。<br>";
                sort($nums, $array);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }else {
                echo "降順にソートしました。<br>";
                rsort($nums, $array);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }

            }
        }
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
        </p>
    </body>
    </html>