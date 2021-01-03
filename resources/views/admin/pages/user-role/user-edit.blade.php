<div class="form-group row">

    <input type="hidden" value="{{ $user->id }}" name="id">
    <div class="col-6">
      <label class="col-12">Name<span class="required">*</span></label>
      <div class="col-12">
          <input class="form-control" name="name" value="{{ $user->name }}" required="required">
      </div>
    </div>
    <div class="col-6">
      <label class="col-12">Email<span class="required">*</span></label>
      <div class="col-12">
          <input class="form-control" type="email" readonly value="{{ $user->email }}" name="email" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-6">
      <label class="col-12">Address<span class="required">*</span></label>
      <div class="col-12">
          <input class="form-control" name="address1" value="{{ $user->userDetail->address1 }}" required="required">
      </div>
    </div>
    <div class="col-6">
      <label class="col-12">Address Two<span class="required">*</span></label>
      <div class="col-12">
          <input class="form-control" name="address2" value="{{ $user->userDetail->address2 }}">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-6">
      <label class="col-12">City<span class="required"></span></label>
      <div class="col-12">
          <input class="form-control" type="text" value="{{ $user->userDetail->city }}" name="city">
      </div>
    </div>
    <div class="col-6">
      <label class="col-12">Phone<span class="required">*</span></label>
      <div class="col-12">
          <input class="form-control" type="number" name="phone" value="{{ $user->userDetail->phone }}" required="required">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-6">
      <label class="col-12">Country<span class="required">*</span></label>
      <div class="col-12">
          <select class="form-control" name="country_id" required>
              <option value="" disabled>Select Country</option>
              @foreach ($countries as $item)
                @if ($item->id == $user->country_id)
                    <option value={{ $item->id }}>{{ $item->name }}</option>
                @else
                    <option value={{ $item->id }}>{{ $item->name }}</option>
                @endif
              @endforeach
          </select>
      </div>
    </div>
    <div class="col-6">
      <label class="col-12">Password<span class="required">*</span></label>
      <div class="col-12">
          <input class="form-control" type="password" name="password">
      </div>
    </div>
  </div>

  <div class="form-group row">
      <div class="col-6">
          <label class="col-12">User Role<span class="required">*</span></label>
          <select class="form-control col-12" name="role_id" required style="width: 92% !important; margin-left: 4% !important;">
              <option value="" disabled >Select Role</option>
              @foreach ($roles as $item)
                    @if ($item->id == $user->roles[0]->id))
                        <option value={{ $item->id }}>{{ $item->name }}</option>
                    @else
                        <option value={{ $item->id }}>{{ $item->name }}</option>
                    @endif
              @endforeach
          </select>
      </div>

    <div class="col-6">
      <label class="col-12"><span class="required"></span></label>
      <div class="col-12">
      </div>
    </div>
  </div>
