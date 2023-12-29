<?php
require_once '../../helpers/identity_helper.php';
require_once '../../entities/app_user.php';

session_start();
IdentityHelper::grantAccessToUser(UserRole::USER());
require_once '../partials/header.view.php';
require_once 'profile_inc.php';

?>

<?php
require_once '../forms/student_info_form.php';
require_once '../partials/footer.view.php';

?>