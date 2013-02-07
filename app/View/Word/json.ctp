<?php

header("Content-type: application/javascript"); 

foreach ($words as $data) {
    unset($data['Word']['generated_html']);
}
echo json_encode(compact('words'));



?>