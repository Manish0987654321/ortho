
<x-default-layout>
    

<div class="card card-custom mt-5">
	<div class="card-header">
		<h3 class="card-title">
		Add New User
		</h3>
	</div>
	<!--begin::Form-->
	<form action="new_user" method="post">
		@csrf
		<div class="card-body ">
            <div class="form-group m-form__group row mb-10">
                <div class="col-lg-6 m-form__group-sub">
                    <label>Client First Name  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control m-input" name="fname" placeholder="Enter Client First Name" required>
                </div>
                <div class="col-lg-6 m-form__group-sub">
                    <label>Client Last Name  <span class="text-danger">*</span></label>
                    <input type="text" class="form-control m-input" name="lname" placeholder="Enter Client Last Name" required>
                </div>
            </div>

			<div class="form-group m-form__group row mb-10">
				<div class="col-lg-6 m-form__group-sub">
					<label>Email  <span class="text-danger">*</span></label>
					<input type="email" class="form-control m-input" name="email" placeholder="Enter Email" required>
				</div>
				<div class="col-lg-6 m-form__group-sub">
					<label>Phone  <span class="text-danger">*</span></label>
					<input type="tel" class="form-control m-input" name="phone" placeholder="Enter Phone" required>
				</div>
			</div>

			<div class="form-group m-form__group row mb-10 ">
				<div class="col-lg-6 m-form__group-sub">
					<label for="email">Password <span class="text-danger">*</span></label>
					<input class="form-control m-input" type="password" placeholder="New Password" name="password" id="password" autocomplete="off" required>
				</div>
				<div class="col-lg-6 m-form__group-sub">
					<label for="email">Repeat Password <span class="text-danger">*</span></label>
					<input class="form-control m-input" type="password" placeholder="Repeat Password" name="doublepassword" autocomplete="off" required>
				</div>
			</div>

			<div class="form-group m-form__group row mb-10">
				<div class="col-lg-6 m-form__group-sub">
					<label>Website</label>
					<input type="url" class="form-control m-input" name="user_website" placeholder="Enter Website">
				</div>
				<div class="col-lg-6 m-form__group-sub">
					<label>Patient Support Number</label>
					<input type="tel" class="form-control m-input" name="patientsupportnumber" placeholder="Enter Patient Support Number">
				</div>
			</div>

			<div class="form-group m-form__group row logo mb-10">
				<div class="col-lg-6 m-form__group-sub">
					<label for="user_logo" class="logolabel">Upload Logo</label>
					<div class="custom-file">
						<input type="file" name="user_logo" id="file" class="custom-file-input">	
					</div>
				</div>
			
			</div>

			<div class="form-group row mb-10">
				<label class="col-form-label text-right col-lg-3 col-sm-12">State Colors</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input data-switch="true" type="checkbox"  checked="checked" data-on-color="success" data-off-color="warning"/>
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="primary"/>
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="danger"/>
					<input data-switch="true" type="checkbox" checked="checked" data-on-color="info"/>
				</div>
			</div>

			
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary mr-2">Submit</button>
			<button type="reset" class="btn btn-secondary">Cancel</button>
		</div>
	</form>
	<!--end::Form-->
</div>
</x-default-layout>





{{-- 
// Class definition

var KTBootstrapSwitch = function() {

// Private functions
var demos = function() {
	// minimum setup
	$('[data-switch=true]').bootstrapSwitch();
};

return {
	// public functions
	init: function() {
	demos();
	},
};
}();

jQuery(document).ready(function() {
KTBootstrapSwitch.init();
}); --}}