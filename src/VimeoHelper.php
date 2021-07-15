<?php
/**
 * @author ANDY <ltanh1194@gmail.com>
 * @date 3:00 PM 7/14/2021
 * @projectName baseProject by ANDY
 */

namespace beehamchoi\vimeo;

use beehamchoi\vimeo\models\Video;
use Vimeo\Exceptions\VimeoRequestException;
use Vimeo\Vimeo;

/**
 * Class VimeoHelper
 * @package beehamchoi\vimeo
 */
class VimeoHelper
{
    public Vimeo $vimeo;

    /**
     * VimeoHelper constructor.
     * @param string $client_id
     * @param string $client_secret
     * @param string|null $access_token
     */
    public function __construct(string $client_id, string $client_secret, string $access_token = NULL)
    {
        $this->vimeo = new Vimeo($client_id, $client_secret, $access_token);
    }

    /**
     * @return array
     * @throws VimeoRequestException
     */
    public function tutorial(): array
    {
        return $this->vimeo->request('/tutorial');
    }

    /**
     * @return array
     * @throws VimeoRequestException
     */
    public function getMe(): array
    {
        return $this->vimeo->request('/me');
    }

    /**
     * @param string $videoId
     * @param string $format
     * @return array|Video
     * @throws VimeoRequestException
     */
    public function getOneVideo(string $videoId, $format = 'object')
    {
        $linkFormat = explode('/', $videoId);
        $id = end($linkFormat);
        $response = $this->vimeo->request("/videos/$id", NULL, 'GET');
        if ($format == 'object' && !empty($response['body'])) {
            return new Video($response['body']);
        }
        return $response;
    }
}