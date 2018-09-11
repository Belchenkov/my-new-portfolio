<?php

namespace App\Services;


class HelperService
{
    /**
     * @param File $img
     *  Загрузка картинки на сервер
     * @return string|null
     * @author Aleksey Belchenkov <belchenkov@yksoft.ru>
     */
    public function downloadImg($img)
    {
        if (!empty($img)) {
            $imgName = $img->getClientOriginalName();
            $path = storage_path('app/public/img/') . $imgName;

            $img->move(storage_path('app/public/img'), $imgName);

            return $path;
        }

        return null;
    }
}