<?php
require_once 'core/entities/enums.php';
require_once 'core/helpers/identity_helper.php';

IdentityHelper::grantAccessToUser(UserRole::USER());
session_destroy();
session_start();

require 'views/auth/logout.view.php';
