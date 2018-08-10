<?php

namespace yedincisenol\Vision;

use Google\Cloud\Vision\VisionClient;
use Google\Cloud\Vision\Image;

class Vision extends VisionClient
{
<<<<<<< HEAD
    public function annotate(Image $image, array $options = [])
    {
        if (!key_exists('api_key', $options)) {
            $options['key'] = config('vision.api_key');
        }

        return parent::annotate($image, $options);
    }
}
=======
}
>>>>>>> 16b2f98206c5c73f86b31d9dafaaf8840567c3cf
