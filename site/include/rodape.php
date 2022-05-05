   
</main>

<footer>
    <p>Site desenvolvido como exemplo</p>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y H:i");
    ?>
    <p> <?=$data?> </p>
</footer>

</body>
</html> 


<!-- // $Object = new DateTime();  
// $DateAndTime = $Object->format("d-m-Y h:i:s a");  
// echo "A data de hoje e o horário $DateAndTime.";

// $Object = new DateTime();  
// $Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
// $DateAndTime = $Object->format("d-m-Y h:i:s a");  
// echo "A data e o horário atual são $DateAndTime.\n";
// $Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
// $DateAndTime = $Object->format("d-m-Y h:i:s a");  
// echo "A data e o horário atual são $DateAndTime."; -->

</body>
</html>