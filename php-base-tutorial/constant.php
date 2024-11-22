<h1>Constant</h1>

<?php

define("PI", 3.14);

echo PI;
echo constant('PI');

//命名傳統： 多個一個字的時候就在字與字之間加_

if(defined("PI")){
    echo PI;
}else{
    echo "non-defined"
}

?>
