<?php
/**
 * @author ANDY <ltanh1194@gmail.com>
 * @date 8:20 AM 7/15/2021
 * @projectName baseProject by ANDY
 */

namespace beehamchoi\vimeo\models;
/**
 * Class Video
 * @package beehamchoi\vimeo\models
 */
class Video
{
    public $uri;
    public $name;
    public $description;
    public $type;
    public $link;
    public Embed $embed;

    public function __construct(array $array)
    {
        $this->uri = $array['uri'] ?? NULL;
        $this->name = $array['name'] ?? NULL;
        $this->description = $array['description'] ?? NULL;
        $this->type = $array['type'] ?? NULL;
        $this->link = $array['link'] ?? NULL;
        $this->embed = new Embed($array['embed']);
    }
}