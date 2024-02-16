<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <div class="mb-4">
            <div class="avatar-lg mx-auto">
                <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                    <i class="ri-mail-line"></i>
                </div>
            </div>
        </div>
        <div class="text-muted text-center mx-lg-3">
            <h4 class="">Verify Your Email</h4>
            <p>Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>
        </div>

        <div class="mt-4">
            <form action="{{ url('/verify-otp') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">OTP</label>
                    <input id="otp" placeholder="Code" class="form-control" type="text"/>
                </div>

                <div class="text-center mt-4">
                    <button onclick="VerifyOtp()" class="btn btn-success w-100" type="submit">Confirm</button>
                </div>
            </form>
        </div>

        <div class="mt-5 text-center">
            <p class="mb-0">Didn't receive a code ? <a href="{{ url('/forgot-pass') }}" class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
        </div>
    </div>
</div>

<script>
    async function VerifyOtp() {
         let otp = document.getElementById('otp').value;
         if(otp.length !==4){
            errorToast('Invalid OTP')
         }
         else{
            // showLoader();
             let res=await axios.post('/verify-otp', {
                 otp: otp,
                 email:sessionStorage.getItem('email')
             })
           //  hideLoader();

             if(res.status===200 && res.data['status']==='success'){
                 successToast(res.data['message'])
                 sessionStorage.clear();
                 setTimeout(() => {
                     window.location.href='/resetPassword'
                 }, 1000);
             }
             else{
                 errorToast(res.data['message'])
             }
         }
     }
 </script>
