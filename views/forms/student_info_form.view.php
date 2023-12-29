<?php require_once 'core/entities/enums.php' ?>
<style>
<?=require_once 'resources/css/form.css'?>
</style>
<div class="container">
    <form method="post" action="<?= htmlspecialchars('register'); ?>">
        <div class=" col">

            <?php require_once 'account_info.view.php' ?>
            <h4 class="w3-text-green">Child info</h4>
            <div class="row">

                <div class="col-md-4 form-group mb-3">
                    <label>Full name *</label>

                    <input name="childName" required value="<?= $childName ?>" class="form-control" />

                </div>
                <br />
                <div class="col-md-4 form-group mb-3">
                    <label>Gender *</label>

                    <select name="gender" class="form-control">
                        <?php
                        $maleOption = Gender::MALE()->getValue();

                        $femaleOption = Gender::FEMALE()->getValue();
                        ?>
                        <option value="<?= $maleOption ?>" <?php if ($gender == $maleOption) echo "selected"; ?>>
                            <?= $maleOption ?>
                        </option>
                        <option value="<?= $femaleOption ?>" <?php if ($gender == $femaleOption) echo "selected"; ?>>
                            <?= $femaleOption ?>
                        </option>
                    </select>
                </div>
                <div class="col-md-4 form-group mb-3">
                    <label>Birth Date *</label>
                    <input required value="<?= $dateOfBirth ?>" name="dateOfBirth" class="form-control" type="date"
                        aria-required="true" />

                </div>
            </div>
            <br />
            <div class="row">

                <div class="col-md-4 form-group mb-3">
                    <label>The language you wish to teach your child *</label>

                    <select name="languageToLearn" class="form-control">
                        <?php
                        $arabicOption = Language::ARABIC()->getValue();
                        $englishOption = Language::ENGLISH()->getValue();
                        $frenchOption = Language::FRENCH()->getValue();
                        ?>
                        <option value="<?= $arabicOption ?>"
                            <?php if ($languageToLearn == $arabicOption) echo "selected"; ?>>
                            <?= $arabicOption ?>

                        </option>
                        <option value="<?= $englishOption ?>"
                            <?php if ($languageToLearn == $englishOption) echo "selected"; ?>>
                            <?= $englishOption ?>

                        </option>
                        <option value="<?= $frenchOption ?>"
                            <?php if ($languageToLearn == $frenchOption) echo "selected"; ?>>
                            <?= $frenchOption ?>

                        </option>
                    </select>
                </div>
                <?php
                $yesOption = "Yes";
                $noOption = "No";
                ?>
                <div class="col-md-4 form-group mb-3">
                    <label>Can he speak this language? *</label>

                    <select name="canSpeakTheLang" class="form-control">
                        <option value="Yes" <?php if ($canSpeakTheLang == $yesOption) echo "selected"; ?>>Yes</option>
                        <option value="No" <?php if ($canSpeakTheLang == $noOption) echo "selected"; ?>>No</option>
                    </select>
                </div>
                <div class="col-md-4 form-group mb-3">
                    <label>Did he study this language before? *</label>

                    <select name="didStudyTheLang" class="form-control">
                        <option value="Yes" <?php if ($didStudyTheLang == $yesOption) echo "selected"; ?>>Yes</option>
                        <option value="No" <?php if ($didStudyTheLang == $noOption) echo "selected"; ?>>No</option>
                    </select>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-4 form-group mb-3">
                    <label>Your child level at this language*</label>
                    <select name="levelAtLanguage" class="form-control">
                        <?php
                        $beginnerLevel = LanguageLevel::BEGINNER()->getValue();
                        $intermediateLevel = LanguageLevel::INTERMEDIATE()->getValue();
                        $advancedLevel = LanguageLevel::ADVANCED()->getValue();
                        ?>
                        <option value="<?= $beginnerLevel ?>"
                            <?php if ($levelAtLanguage == $beginnerLevel) echo "selected"; ?>>
                            <?= $beginnerLevel  ?>
                        </option>
                        <option value="<?= $intermediateLevel ?>"
                            <?php if ($levelAtLanguage == $intermediateLevel) echo "selected"; ?>>
                            <?= $intermediateLevel  ?>
                        </option>
                        <option value="<?= $advancedLevel ?>"
                            <?php if ($levelAtLanguage == $advancedLevel) echo "selected"; ?>>

                            <?= $advancedLevel ?>
                        </option>
                    </select>
                </div>

                <div class="col-md-4 form-group mb-3">
                    <label>Home address *</label>

                    <textarea required name="homeAddress" class="form-control" rows="3">
                <?= trim($homeAddress) ?>
                </textarea>

                </div>
                <div class="col-md-4 form-group mb-3">
                    <label>Country *</label>

                    <input required name="country" value="<?= $country ?>" class="form-control" />

                </div>
            </div>
            <br />
            <div class="row">


                <div class="col-md-4 form-group mb-3">
                    <label>City *</label>

                    <input name="city" value="<?= $city ?>" class="form-control" required aria-required="true">

                </div>
                <div class="col-md-4 form-group mb-3">
                    <label>Phone number *</label>
                    <input value="<?= $phoneNumber ?>" required type="tel" min="9" max="9" name="phoneNumber"
                        class="form-control" />

                </div>
                <div class="col-md-4 form-group mb-3">
                    <label>Guardian *</label>

                    <select name="guardian" class="form-control">
                        <?php
                        $fatherOption = Guardian::FATHER()->getValue();
                        $motherOption = Guardian::MOTHER()->getValue();
                        $bothParentsOption = Guardian::BOTH_PARENTS()->getValue();

                        ?>
                        <option value="<?= $fatherOption ?>" <?php if ($guardian == $fatherOption) echo "selected"; ?>>
                            <?= $fatherOption  ?>
                        </option>
                        <option value="<?= $motherOption  ?>" <?php if ($guardian == $motherOption) echo "selected"; ?>>
                            <?= $motherOption  ?>
                        </option>
                        <option value="<?= $bothParentsOption  ?>"
                            <?php if ($guardian == $bothParentsOption) echo "selected"; ?>>

                            <?= $bothParentsOption  ?>
                        </option>


                    </select>
                </div>
            </div>
            <hr />
            <br />

            <h4 class="w3-text-green">Parents info</h4>
            <div class="row">
                <div class="col-md-4 form-group mb-3">
                    <label>Father Name *</label>
                    <input required name="fatherName" value="<?= $fatherName ?>" class="form-control"
                        aria-required="true">

                </div>
                <div class="col-md-4 form-group mb-3">
                    <label>Mother Name *</label>
                    <input required name="motherName" value="<?= $motherName ?>" class="form-control"
                        autocomplete="MotherName" aria-required="true" />
                </div>


            </div>
            <div class="w3-cell w3-container w3-padding-48">

                <button type="submit" class="btn btn-primary">Register</button>
            </div>

        </div>

    </form>
</div>