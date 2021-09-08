<?php
namespace App\Traits;



trait T
{
    use Typeable;

    public function t($request)
    {
        $this->syncType($request['type']);
}
}