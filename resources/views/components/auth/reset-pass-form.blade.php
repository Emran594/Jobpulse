<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <h5 class="text-primary">Create new password</h5>
        <p class="text-muted">Your new password must be different from previous used password.</p>

        <div class="p-2">
                <div class="mb-3">
                    <label class="form-label" for="password-input">Password</label>
                    <div class="position-relative ">
                        <input id="password" placeholder="New Password" class="form-control" type="password"/>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="confirm-password-input">Confirm Password</label>
                    <div class="position-relative  mb-3">
                        <input id="cpassword" placeholder="Confirm Password" class="form-control" type="password"/>
                    </div>
                </div>

                <div class="mt-4">
                    <button onclick="ResetPass()" class="btn btn-success w-100" type="submit">Reset Password</button>
                </div>
        </div>

        <div class="mt-5 text-center">
            <p class="mb-0">Wait, I remember my password... <a href="{{ url("/") }}" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
        </div>
    </div>
</div>

<script>
    async function ResetPass() {
          let password = document.getElementById('password').value;
          let cpassword = document.getElementById('cpassword').value;

          if(password.length===0){
              errorToast('Password is required')
          }
          else if(cpassword.length===0){
              errorToast('Confirm Password is required')
          }
          else if(password!==cpassword){
              errorToast('Password and Confirm Password must be same')
          }
          else{
           // showLoader()
            let res=await axios.post("/reset-password",{password:password});
           // hideLoader();
            if(res.status===200 && res.data['status']==='success'){
                successToast(res.data['message']);
                setTimeout(function () {
                    window.location.href="/userLogin";
                },1000);
            }
            else{
              errorToast(res.data['message'])
            }
          }

      }
  </script>
