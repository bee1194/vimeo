<?php
/**
 * @author ANDY <ltanh1194@gmail.com>
 * @date 8:22 AM 7/15/2021
 * @projectName baseProject by ANDY
 */

namespace beehamchoi\vimeo\models;
/**
 * Class Embed
 * @package beehamchoi\vimeo\models
 */
class Embed
{
    public $html;

    public function __construct(array $array)
    {
        $this->html = $array['html'] ?? NULL;
    }
}