<x-default-layout>
    <h3 class="card-titl mb-8">
        Profile
             </h3>
    <div class="card card-custom mt-5 w-50">
	<div class="card-header">
		<h3 class="card-title">
    Your Profile
		</h3>
		<div class="card-toolbar">
			<div class="example-tools justify-content-center">
				<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
				<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form >

        <div class="card-body">		
            <div class="col-lg-12 m-form__group-sub  mb-10">
                <label> First Name  </label>
                <input type="text" class="form-control m-input" name="fname" placeholder=" First Name"  value="{{$user_data->fname}}" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label>Last Name  </label>
                <input type="text" class="form-control m-input" name="lname" placeholder="Last Name" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label>Email  </label>
                <input type="email" class="form-control m-input" name="email" placeholder="Email" required>
            </div>
			<div class="col-lg-12 m-form__group-sub mb-10">
                <label>Phone </label>
                <input type="number" class="form-control m-input" name="phone" placeholder="Phone" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label>Address </label>
                <input type="text"  class="form-control m-input" name="address" placeholder="Address"  required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> City  </label>
                <input type="text" class="form-control m-input" name="city" placeholder="city"  required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Country  </label>
                <input type="text" class="form-control m-input" name="country" placeholder="country"  required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Pincode  </label>
                <input type="number" class="form-control m-input" name="pincode" placeholder="Pincode" required>
            </div>
			{{-- <div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Picture  </label>
                <input type="file" class="form-control m-input" name="picture" placeholder="Picture" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> DOB  </label>
                <input type="number" class="form-control m-input" name="dob" placeholder="D-O-B" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Pincode  </label>
                <input type="number" class="form-control m-input" name="pincode" placeholder="Pincode" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Pincode  </label>
                <input type="number" class="form-control m-input" name="pincode" placeholder="Pincode" required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Pincode  </label>
                <input type="number" class="form-control m-input" name="pincode" placeholder="Pincode" required>
            </div> --}}
			
		</div>
		<div class="card-footer">
			<button type="reset" class="btn btn-primary mr-2">Update</button>
			<button type="reset" class="btn btn-secondary">Cancel</button>
		</div>
    
	</form>
	<!--end::Form-->
</div>
<div class="card card-custom mt-5 w-50">
	<div class="card-header">
		<h3 class="card-title">
    Change Password
		</h3>
		<div class="card-toolbar">
			<div class="example-tools justify-content-center">
				<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
				<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form >
      
        <div class="card-body">		
            <div class="col-lg-12 m-form__group-sub  mb-10">
                <label> Password  </label>
                <input type="text" class="form-control m-input" name="fname" placeholder="Enter Client First Name"  required>
            </div>
			<div class="col-lg-12 m-form__group-sub  mb-10">
                <label>Repeat Password  </label>
                <input type="text" class="form-control m-input" name="lname" placeholder="Enter Client Last Name" required>
            </div>			
		</div>
		<div class="card-footer">
			<button type="reset" class="btn btn-primary mr-2">Update</button>
			<button type="reset" class="btn btn-secondary">Cancel</button>
		</div>
    
	</form>
	<!--end::Form-->
</div>
    
</x-default-layout>



