
<div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="modal-close"></button>
            </div>
            <form id="save-form" class="tablelist-form" autocomplete="off">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Category Name</label>
                        <input type="text" id="categoryName" class="form-control" placeholder="Enter name" required />
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button onclick="Save()" class="btn btn-success" id="save-btn">Add Customer</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->


<script>
    async function Save() {
        let categoryName = document.getElementById('categoryName').value;
        if (categoryName.length === 0) {
            errorToast("Category Required !")
        }
        else {
            document.getElementById('modal-close').click();
           // showLoader();
            let res = await axios.post("/create-category",{name:categoryName})
           // hideLoader();
            if(res.status===201){
                successToast('Request completed');
                document.getElementById("save-form").reset();
                await getList();
            }
            else{
                errorToast("Request fail !")
            }
        }
    }
</script>
