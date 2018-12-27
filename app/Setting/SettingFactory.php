<?php

declare(strict_types = 1);

namespace App\Setting;

use App\Model\Setting as Model;
use App\Setting\ErrorEmail\SettingErrorEmail;
use App\Setting\ErrorEmailSentOn\SettingErrorEmailSentOn;

final class SettingFactory
{
    public function create(Model $model): Setting
    {
        $data = \json_decode($model->json, true);

        switch ($model->name) {
            case Setting::ERROR_EMAIL:
                return new SettingErrorEmail($data);
            case Setting::ERROR_EMAIL_SENT_ON:
                return new SettingErrorEmailSentOn($data);
            default:
                throw new \InvalidArgumentException(\sprintf('Setting with name "%s" not found.', $model->name));
        }
    }
}
