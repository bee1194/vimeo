Cài đặt thông qua composer:
`composer require beehamchoi/vimeo`

Demo:
`<?php
    $vimeo = new beehamchoi\vimeo\VimeoHelper('clientId','clientSecret','access_token');
    $response = $vimeo->getOneVideo("https://vimeo.com/<video_id>");
?>`

or

`<?php
$vimeo = new beehamchoi\vimeo\VimeoHelper('clientId','clientSecret','access_token');
$response = $vimeo->getOneVideo("<video_id>");
?>`

**Hàm `getOneVideo()` Input là 1 String: Link hoặc Id của video.