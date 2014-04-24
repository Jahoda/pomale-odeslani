<?php 

sleep(2);

echo "Odesláno";

file_put_contents("data.txt", "1\n", FILE_APPEND);