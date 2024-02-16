<div class="col-lg-6">
    <div class="p-lg-5 p-4">
        <div>
            <h5 class="text-primary">Register Account</h5>
            <p class="text-muted">Get your Booking account now.</p>
        </div>

        <div class="mt-4">
            <form action="{{ url("/user-registration") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input id="firstName" name="name" placeholder="First Name" class="form-control" type="text"/>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input id="email" name="email" placeholder="User Email" class="form-control" type="email"/>
                </div>
                <div class="mb-3">
                    <label>Who Are You ? </label>
                    <select name="role" id="role" class="form-control">
                        <option selected value="">Join As a Company Or Candidates</option>
                        <option value="2">I am Company</option>
                        <option value="3">I am Candidates</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input id="password" name="password" placeholder="User Password" class="form-control" type="password"/>
                </div>
                <div class="mt-4">
                    <button class="btn btn-success w-100">Sign Up</button>
                </div>
            </form>
        </div>

        <div class="mt-5 text-center">
            <p class="mb-0">Already have an account ? <a href="{{ '/userLogin' }}" class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
        </div>
    </div>
</div>
