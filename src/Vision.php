<?php

namespace yedincisenol\Vision;

use Google\Cloud\Vision\VisionClient;
use Google\Cloud\Vision\Image;

class Vision extends VisionClient
{
    public function annotate(Image $image, array $options = [])
    {
        if (!key_exists('api_key', $options)) {
            $options['key'] = config('vision.api_key');
        }

        return parent::annotate($image, $options);
    }
}
