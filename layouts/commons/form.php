<form class="form-dashboard">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="label" for="email">Email</label>
            <input type="email" placeholder="E.g- example@gmail.com" class="input input-border input-border-secondary2" id="email">
        </div>
        <div class="form-group col-md-6">
            <label class="label" for="password">Password</label>
            <input type="password" class="input input-border input-border-secondary2" id="password">
        </div>
    </div>
    <div class="form-group">
        <label class="label" for="inputAddress">Address</label>
        <input type="text" class="input input-border input-border-secondary2" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label class="label" for="inputAddress2">Address 2</label>
        <input type="text" class="input input-border input-border-secondary2" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="label" for="inputCity">City</label>
            <input type="text" class=" input input-border input-border-secondary2" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label class="label" for="inputState">State</label>
            <select id="inputState" class="input input-border input-border-secondary2">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label class="label" for="inputZip">Zip</label>
            <input type="text" class="input input-border input-border-secondary2" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <input type="checkbox" id="gridCheck">
        <label class="label mb-0" for="gridCheck">
            Check me out
        </label>
    </div>
    <button type="submit" class="button button-border button-border-secondary2">Sign in</button>
</form>