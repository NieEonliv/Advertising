<?php

namespace Nieeonliv\Advertising\Enums;

enum AdvertisingScopeEnum: string
{
    case EDIT = 'can-edit-advertising';
    case LINKER = 'can-push-links-advertising';
}
