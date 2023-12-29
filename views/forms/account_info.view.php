<h4 class="w3-text-green">Account info</h4>

<div class="row">
    <div class="col-md-4 form-group mb-3">
        <label for="emailInput">Email *</label>
        <input id="emailInput" name="email" required type="email" value="<?= $emailAddress; ?>" class="form-control"
            autocomplete="email" />
    </div>

    <div class="col-md-4 form-group mb-3">
        <label>Password *</label>
        <input class="form-control" required name="password" type="password" value="<?= $password ?>" />
    </div>
</div>
<hr />
<br />