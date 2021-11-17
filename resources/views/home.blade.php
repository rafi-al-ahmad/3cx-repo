@extends('admin.index')
@section('content')

<div class="row">
  <div class="col-12">

    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">{{ trans("general.Profile Details") }}</h4>
      </div>
      <div class="card-body ">


        <!-- form -->
        <form class="validate-form mt-2 pt-50">
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">{{ trans("general.First Name") }}</label>
              <input type="text" class="form-control" id="accountFirstName" name="firstName" placeholder="John" value="{{ Auth::guard('admin')->user()->first_name }}" data-msg="Please enter first name" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName">{{ trans("general.Last Name") }}</label>
              <input type="text" class="form-control" id="accountLastName" name="lastName" placeholder="Doe" value="{{ Auth::guard('admin')->user()->last_name }}" data-msg="Please enter last name" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail">{{ trans("general.Email") }}</label>
              <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="{{ Auth::guard('admin')->user()->email }}" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountUsername">{{ trans("general.Username") }}</label>
              <input type="text" class="form-control" id="accountUsername" name="Username" placeholder="Username" value="{{ Auth::guard('admin')->user()->username }}" />
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1">{{ trans("general.Save changes") }}</button>
              <button type="reset" class="btn btn-outline-secondary mt-1">{{ trans("general.reset") }}</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <div class="card">
  <div class="card-header border-bottom">
    <h4 class="card-title">{{ trans("general.Change Password")}}</h4>
  </div>
  <div class="card-body pt-1">
    <!-- form -->
    <form class="validate-form" novalidate="novalidate">
      <div class="row">
        <div class="col-12 col-sm-6 mb-1">
          <label class="form-label" for="account-old-password">{{ trans("general.Current password")}}</label>
          <div class="input-group form-password-toggle input-group-merge">
            <input type="password" class="form-control" id="account-old-password" name="password" placeholder="{{ trans("general.Enter current password")}}" data-msg="Please current password">
            <div class="input-group-text cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 mb-1">
          <label class="form-label" for="account-new-password">{{ trans("general.New Password")}}</label>
          <div class="input-group form-password-toggle input-group-merge">
            <input type="password" id="account-new-password" name="new-password" class="form-control" placeholder="{{ trans("general.Enter new password")}}">
            <div class="input-group-text cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 mb-1">
          <label class="form-label" for="account-retype-new-password">{{ trans("general.Retype New Password")}}</label>
          <div class="input-group form-password-toggle input-group-merge">
            <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="{{ trans("general.Confirm your new password")}}">
            <div class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg></div>
          </div>
        </div>
        <div class="col-12">
          <p class="fw-bolder">{{ trans("general.Password requirements:")}}</p>
          <ul class="ps-1 ms-25">
            <li class="mb-50">{{ trans("general.Minimum 8 characters long - the more, the better")}}</li>
            <li class="mb-50">{{ trans("general.At least one lowercase character")}}</li>
            <li>{{ trans("general.At least one number, symbol, or whitespace character")}}</li>
          </ul>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light">{{ trans("general.Save changes")}}</button>
          <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">{{ trans("general.Discard")}}</button>
        </div>
      </div>
    </form>
    <!--/ form -->
  </div>
</div>

    <!-- deactivate account  -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">{{ trans("general.Delete Account") }}</h4>
      </div>
      <div class="card-body py-2 my-25">
        <div class="alert alert-warning">
          <h4 class="alert-heading">{{ trans("general.Are you sure you want to delete your account?") }}</h4>
          <div class="alert-body fw-normal">
            {{ trans("general.Once you delete your account, there is no going back. Please be certain.") }}
          </div>
        </div>

        <form id="formAccountDeactivation" class="validate-form" onsubmit="return false">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" data-msg="Please confirm you want to delete account" />
            <label class="form-check-label font-small-3" for="accountActivation">
              {{ trans("general.I confirm my account deactivation") }}
            </label>
          </div>
          <div>
            <button type="submit" class="btn btn-danger deactivate-account mt-1">{{ trans("general.Deactivate Account") }}</button>
          </div>
        </form>
      </div>
    </div>
    <!--/ profile -->
  </div>
</div>

@push('scripts')
<script src="{{ url('design') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ url('design') }}/app-assets/js/scripts/pages/page-account-settings-security.js"></script>
@endpush
@endsection