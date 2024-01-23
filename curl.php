<?php
#Aqui esta el enlace en dónde se almacena la infromación 
function getFacebookData($access_token) {
    $url = "https://graph.facebook.com/v18.0/me?fields=id%2Cname%2Cbirthday%2Cemail%2Cgender%2Cfriends%2Clikes&access_token=EAAU7Bs7g1T4BOxb11OECYUFWZB4wg0wlT6DxtqaULYs3wDLnv7OnSY8xeYA1CbWm2byQaX5HrLVtesh6NwE5s5lwG8TZBvHFeRIpUXSwyMVGgFoBpgnKOSZB6mVksY8va5c4wQj5sJCx9OituR9CxkZBQPqNXX7ZAf72xHGEyc4AZCTzVHLPwoBPcqqdQEBOcznfhZCm1AIqKAxrAAJGpohY5TiBSqhVIsQNg2KmqahDgZAjN7c5a0cgvS9eZAnpCDAZDZD";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);

    return json_decode($data);
}
?>