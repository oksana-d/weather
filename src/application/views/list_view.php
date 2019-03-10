<div class="container">
    <div class="row justify-content-center align-items-center">
        <h1><font color="blue">Список фидбеков</font></h1></div>
    <?php
    if(isset($data) && is_array($data)){
        foreach($data as $value){
            echo "<div class='container feedback-container'>
                        <div class='border border-primaty feedback-author'>
                            <div> <h5>".$value['name']."</h5></div>
                            <a href='mailto:".$value['email']."'>".$value['email']."</a>
                        </div>
                        <div class=' border border-primaty feedback-message'> ".$value['message']."</div>
                   </div></br>";
        }
    } else echo "Список фидбеков не найден";
    ?>
</div>
</div>