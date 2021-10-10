<?php
namespace App\Traits;



trait C
{
    use Categorizable;

    public function c($request)
    {
        $this->syncCategory($request['category']);
}
}