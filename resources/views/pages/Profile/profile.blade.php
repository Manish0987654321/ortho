<x-default-layout>
<div class="m-subheader ">
<div class="d-flex align-items-center">
<div class="mr-auto">
    <h3 class="m-subheader__title ">users</h3>
</div>
</div>
</div>

<div class="m-content">

<div class="row">
<div class="col-lg-12">

    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Add New user
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" id="form-single">
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">
                    <div class="col-lg-6 m-form__group-sub">
                        <label>Client First Name <span class="required-symbol">*</span></label>
                        <input type="text" class="form-control m-input" name="firstname" placeholder="Enter Client First Name" required>
                    </div>
                    <div class="col-lg-6 m-form__group-sub">
                        <label>Client Last Name <span class="required-symbol">*</span></label>
                        <input type="text" class="form-control m-input" name="lastname" placeholder="Enter Client Last Name" required>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-6 m-form__group-sub">
                        <label>Email <span class="required-symbol">*</span></label>
                        <input type="email" class="form-control m-input" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 m-form__group-sub">
                        <label>Phone <span class="required-symbol">*</span></label>
                        <input type="tel" class="form-control m-input" name="phone" placeholder="Enter Phone" required>
                    </div>
                </div>

                <!-- <div class="m-form__seperator m-form__seperator--dashed  m-form__seperator--space m--margin-bottom-20"></div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12 m-form__group-sub">
                        <label>Devices (MAC IDs)</label>
                        <textarea class="form-control m-input" name="serial_numbers" placeholder="Device Serial Numbers" rows="3"></textarea>
                    </div>
                </div> -->

                <div class="m-form__seperator m-form__seperator--dashed  m-form__seperator--space m--margin-bottom-20"></div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-6 m-form__group-sub">
                        <label for="email">Password <span class="required-symbol">*</span></label>
                        <input class="form-control m-input" type="password" placeholder="New Password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="col-lg-6 m-form__group-sub">
                        <label for="email">Repeat Password <span class="required-symbol">*</span></label>
                        <input class="form-control m-input" type="password" placeholder="Repeat Password" name="doublepassword" autocomplete="off" required>
                    </div>
                </div>

                <div class="m-form__seperator m-form__seperator--dashed  m-form__seperator--space m--margin-bottom-20"></div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-6 m-form__group-sub">
                        <label>Website</label>
                        <input type="url" class="form-control m-input" name="user_website" placeholder="Enter Website">
                    </div>
                    <div class="col-lg-6 m-form__group-sub">
                        <label>Patient Support Number</label>
                        <input type="tel" class="form-control m-input" name="patientsupportnumber" placeholder="Enter Patient Support Number">
                    </div>
                </div>

                <div class="form-group m-form__group row logo">
                    <div class="col-lg-6 m-form__group-sub">
                        <label for="user_logo" class="logolabel">Upload Logo</label>
                        <div class="custom-file">
                            <input type="file" name="user_logo" id="file" class="custom-file-input">
                            <label class="custom-file-label" for="user_logo">Choose file</label>
                        </div>
                    </div>
                    <div class="col-lg-6 m-form__group-sub" style="text-align: center">
                        <label class="col-lg-12">Enable mail for Patients?</label>
                        <input data-switch="true" type="checkbox" name="enable_mail" checked="checked" data-on-text="Enabled" data-handle-width="85" data-off-text="Disabled" data-on-color="brand">
                    </div>
                </div>

                <div class="m-form__seperator m-form__seperator--dashed  m-form__seperator--space m--margin-bottom-10"></div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12" style="text-align: center">
                        <label class="col-12 col-form-label">Status</label>
                        <input data-switch="true" type="checkbox" name="status" checked="checked" data-on-text="Activated" data-handle-width="85" data-off-text="Deactivated" data-on-color="brand">
                    </div>
                </div>

            </div>
            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <input type="hidden" name="type" value="users">
                    <input type="hidden" name="created_by" value="1">
                    <button type="submit" id="save-single" class="btn m-btn btn-primary m-loader--light m-loader--right" value="Save">Add</button>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
</div>
</div>


</div>


</div>
    </div>

    <!-- end:: Body -->
    
</x-default-layout>



